<?php

namespace HWW\MenuCreate\Ui\Category;

use HWW\MenuCreate\Model\ResourceModel\Category\CollectionFactory;

use Magento\Ui\DataProvider\AbstractDataProvider;

class DataProvider extends AbstractDataProvider {

    protected $collection;

    public function __construct(
            $name,
            $primaryFieldName,
            $requestFieldName,
            CollectionFactory $collectionFactory,
            array $meta = [],
            array $data = []
    ) {
        $this->collection = $collectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);

        // var_dump($collectionFactory->create());exit;
    }

    public function addFilter(\Magento\Framework\Api\Filter $filter) {
        return null;
    }

    public function getData() {
        $result = [];
        // var_dump($this->collection);exit;
        // foreach ($this->collection->getItems() as $item) {
        //     $result[$item->getId()]['general'] = $item->getData();
        // }
        return $result;
    }

}
