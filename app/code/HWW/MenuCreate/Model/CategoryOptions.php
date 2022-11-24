<?php

namespace HWW\MenuCreate\Model;

class CategoryOptions implements \Magento\Framework\Data\OptionSourceInterface {

    protected $_collectionFactory;
    protected $_options;

    public function __construct(
            \HWW\MenuCreate\Model\ResourceModel\Category\CollectionFactory $collectionFactory
    ) {
        $this->_collectionFactory = $collectionFactory;
    }

    public function toOptionArray() {
        $options = [];
        $collection = $this->_collectionFactory->create();
        $options[] = ['label' => 'Select One', 'value' => ''];
        foreach ($collection as $category) {
            $options[] = ['label' => __($category->getData('category_name')), 'value' => $category->getData('category_name')];
        }
        return $options;
    }

}
