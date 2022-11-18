<?php

namespace HWW\MenuCreate\Ui\Category;

use HWW\MenuCreate\Model\ResourceModel\Category\Collection;
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
        // var_dump(is_array($collectionFactory->create()));exit;
    }
    
    public function addFilter(\Magento\Framework\Api\Filter $filter)
    {
        return null;
    }

    public function getData()
    {
        $result = [];
        // var_dump($this->collection);exit;
        // foreach ($this->collection->getItems() as $item) {
        //     $result[$item->getId()]['general'] = $item->getData();
        // }
        return $result;
    }
}