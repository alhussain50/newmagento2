<?php

namespace HWW\MenuCreate\Ui;

use HWW\MenuCreate\Model\ResourceModel\Item\Collection;
use Magento\Ui\DataProvider\AbstractDataProvider;

class DataProvider extends AbstractDataProvider
{
    protected $collection;

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        Collection $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
    }

    public function addFilter(\Magento\Framework\Api\Filter $filter)
    {
        return null;
    }

    public function getData()
    {
        $result = [];
        return $result;
    }
}