<?php

namespace Harriswebworks\CustomCategory\Block;

use Magento\Framework\View\Element\Template;
use Harriswebworks\CustomCategory\Model\ResourceModel\Category\CollectionFactory as CategoryFactory;
use Harriswebworks\CustomCategory\Model\ResourceModel\Item\CollectionFactory as ItemFactory;

class Display extends Template {
    
    protected $itemFactory;
    protected $categoryFactory;

    public function __construct(
            Template\Context $context,
            ItemFactory $itemFactory,
            CategoryFactory $categoryFactory,
            array $data = []
    ) {
        $this->itemFactory = $itemFactory;
        $this->categoryFactory = $categoryFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return \Harriswebworks\CustomCategory\Model\Item[]
     */
    public function getItems() {
        return $this->itemFactory->create()->getItems();
    }

    /**
     * @return \Harriswebworks\CustomCategory\Model\Category[]
     */
    public function getCategory() {
        return $this->categoryFactory->create()->getItems();
    }

}
