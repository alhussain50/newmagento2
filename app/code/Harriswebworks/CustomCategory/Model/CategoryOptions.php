<?php

namespace Harriswebworks\CustomCategory\Model;

class CategoryOptions implements \Magento\Framework\Data\OptionSourceInterface {

    protected $_collectionFactory;
    protected $_options;

    public function __construct(
            \Harriswebworks\CustomCategory\Model\ResourceModel\Category\CollectionFactory $collectionFactory
    ) {
        $this->_collectionFactory = $collectionFactory;
    }

    public function toOptionArray() {
        $options = [];
        $collection = $this->_collectionFactory->create();
        foreach ($collection as $category) {
            $options[] = ['label' => __($category->getData('category_name')), 'value' => $category->getData('category_name')];
        }
        return $options;
    }

}
