<?php

namespace Laminas\Db\Adapter\Driver\Pdo;

use Closure;
use Iterator;
use Laminas\Db\Adapter\Driver\ResultInterface;
use Laminas\Db\Adapter\Exception;
use PDO;
use PDOStatement;
// phpcs:ignore SlevomatCodingStandard.Namespaces.UnusedUses.UnusedUse
use ReturnTypeWillChange;

use function call_user_func;
use function in_array;
use function is_int;

class Result implements Iterator, ResultInterface
{
    public const STATEMENT_MODE_SCROLLABLE = 'scrollable';
    public const STATEMENT_MODE_FORWARD    = 'forward';

    /** @var string */
    protected $statementMode = self::STATEMENT_MODE_FORWARD;

    /** @var int */
    protected $fetchMode = PDO::FETCH_ASSOC;

     /**
      * @internal
      *
      * @var array
      */
    public const VALID_FETCH_MODES = [
        PDO::FETCH_LAZY, // 1
        PDO::FETCH_ASSOC, // 2
        PDO::FETCH_NUM, // 3
        PDO::FETCH_BOTH, // 4
        PDO::FETCH_OBJ, // 5
        PDO::FETCH_BOUND, // 6
        // \PDO::FETCH_COLUMN,  // 7 (not a valid fetch mode)
        PDO::FETCH_CLASS, // 8
        PDO::FETCH_INTO, // 9
        PDO::FETCH_FUNC, // 10
        PDO::FETCH_NAMED, // 11
        PDO::FETCH_KEY_PAIR, // 12
        PDO::FETCH_PROPS_LATE, // Extra option for \PDO::FETCH_CLASS
        // \PDO::FETCH_SERIALIZE, // Seems to have been removed
        // \PDO::FETCH_UNIQUE,    // Option for fetchAll
        PDO::FETCH_CLASSTYPE, // Extra option for \PDO::FETCH_CLASS
    ];

    /** @var PDOStatement */
    protected $resource;

    /** @var array Result options */
    protected $options;

    /**
     * Is the current complete?
     *
     * @var bool
     */
    protected $currentComplete = false;

    /**
     * Track current item in recordset
     *
     * @var mixed
     */
    protected $currentData;

    /**
     * Current position of scrollable statement
     *
     * @var int
     */
    protected $position = -1;

    /** @var mixed */
    protected $generatedValue;

    /** @var null */
    protected $rowCount;

    /**
     * Initialize
     *
     * @param  mixed        $generatedValue
     * @param  int          $rowCount
     * @return $this Provides a fluent interface
     */
    public function initialize(PDOStatement $resource, $generatedValue, $rowCount = null)
    {
        $this->resource       = $resource;
        $this->generatedValue = $generatedValue;
        $this->rowCount       = $rowCount;

        return $this;
    }

    /**
     * @return void
     */
    public function buffer()
    {
    }

    /**
     * @return bool|null
     */
    public function isBuffered()
    {
        return false;
    }

    /**
     * @param int $fetchMode
     * @throws Exception\InvalidArgumentException On invalid fetch mode.
     */
    public function setFetchMode($fetchMode)
    {
        if (! in_array($fetchMode, self::VALID_FETCH_MODES, true)) {
            throw new Exception\InvalidArgumentException(
                'The fetch mode must be one of the PDO::FETCH_* constants.'
            );
        }

        $this->fetchMode = (int) $fetchMode;
    }

    /**
     * @return int
     */
    public function getFetchMode()
    {
        return $this->fetchMode;
    }

    /**
     * Get resource
     *
     * @return mixed
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Get the data
     *
     * @return mixed
     */
    #[ReturnTypeWillChange]
    public function current()
    {
        if ($this->currentComplete) {
            return $this->currentData;
        }

        $this->currentData     = $this->resource->fetch($this->fetchMode);
        $this->currentComplete = true;
        return $this->currentData;
    }

    /**
     * Next
     *
     * @return mixed
     */
    #[ReturnTypeWillChange]
    public function next()
    {
        $this->currentData     = $this->resource->fetch($this->fetchMode);
        $this->currentComplete = true;
        $this->position++;
        return $this->currentData;
    }

    /**
     * Key
     *
     * @return mixed
     */
    #[ReturnTypeWillChange]
    public function key()
    {
        return $this->position;
    }

    /**
     * @throws Exception\RuntimeException
     * @return void
     */
    #[ReturnTypeWillChange]
    public function rewind()
    {
        if ($this->statementMode === self::STATEMENT_MODE_FORWARD && $this->position > 0) {
            throw new Exception\RuntimeException(
                'This result is a forward only result set, calling rewind() after moving forward is not supported'
            );
        }
        if (! $this->currentComplete) {
            $this->currentData     = $this->resource->fetch($this->fetchMode);
            $this->currentComplete = true;
        }
        $this->position = 0;
    }

    /**
     * Valid
     *
     * @return bool
     */
    #[ReturnTypeWillChange]
    public function valid()
    {
        return $this->currentData !== false;
    }

    /**
     * Count
     *
     * @return int
     */
    #[ReturnTypeWillChange]
    public function count()
    {
        if (is_int($this->rowCount)) {
            return $this->rowCount;
        }
        if ($this->rowCount instanceof Closure) {
            $this->rowCount = (int) call_user_func($this->rowCount);
        } else {
            $this->rowCount = (int) $this->resource->rowCount();
        }
        return $this->rowCount;
    }

    /**
     * @return int
     */
    public function getFieldCount()
    {
        return $this->resource->columnCount();
    }

    /**
     * Is query result
     *
     * @return bool
     */
    public function isQueryResult()
    {
        return $this->resource->columnCount() > 0;
    }

    /**
     * Get affected rows
     *
     * @return int
     */
    public function getAffectedRows()
    {
        return $this->resource->rowCount();
    }

    /**
     * @return mixed|null
     */
    public function getGeneratedValue()
    {
        return $this->generatedValue;
    }
}
