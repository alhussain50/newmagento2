<?php
namespace Harriswebworks\Glossary\Model\ResourceModel\Glossary;

/**
 * Class Collection
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(
            \Harriswebworks\Glossary\Model\Glossary::class,
            \Harriswebworks\Glossary\Model\ResourceModel\Glossary::class
        );
    }
}
