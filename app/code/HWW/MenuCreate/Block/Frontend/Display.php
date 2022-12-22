<?php

namespace HWW\MenuCreate\Block\Frontend;

use Magento\Framework\View\Element\Template;
use \HWW\MenuCreate\Model\ResourceModel\Category\CollectionFactory as CategoryFactory;
use \HWW\MenuCreate\Model\ResourceModel\Item\CollectionFactory as ItemFactory;

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
     * @return \HWW\MenuCreate\Model\Item[]
     */
    public function getItems() {
        return $this->itemFactory->create()->getItems();
    }

    /**
     * @return \HWW\MenuCreate\Model\Category[]
     */
    public function getCategory() {
        return $this->categoryFactory->create()->getItems();
    }

}
