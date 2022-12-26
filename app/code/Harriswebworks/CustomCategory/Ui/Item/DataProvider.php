<?php

namespace Harriswebworks\CustomCategory\Ui\Item;

use Harriswebworks\CustomCategory\Model\ResourceModel\Item\CollectionFactory;
use Magento\Ui\DataProvider\AbstractDataProvider;

class DataProvider extends AbstractDataProvider
{
    protected $collection;

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
        // var_dump(is_array($collectionFactory->create()));exit;
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