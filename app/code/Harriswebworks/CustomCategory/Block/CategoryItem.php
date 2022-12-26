<?php

namespace Harriswebworks\CustomCategory\Block;

use Magento\Framework\View\Element\Template;
use Harriswebworks\CustomCategory\Model\ResourceModel\Category\CollectionFactory as CategoryFactory;
use Harriswebworks\CustomCategory\Model\ResourceModel\Item\CollectionFactory as ItemFactory;
use Magento\Customer\Model\Session;



class CategoryItem extends Template
{

    protected $itemFactory;
    protected $categoryFactory;

    public function __construct(
        Template\Context $context,
        ItemFactory $itemFactory,
        CategoryFactory $categoryFactory,
        Session $categorySession,
        array $data = []
    ) {
        $this->itemFactory = $itemFactory;
        $this->categoryFactory = $categoryFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return \Harriswebworks\CustomCategory\Model\Item[]
     */
    public function getItems()
    {
        return $this->itemFactory->create()->getItems();
    }

    /**
     * @return \Harriswebworks\CustomCategory\Model\Category[]
     */
    public function getCategory()
    {
        return $this->categoryFactory->create()->getItems();
    }

    public function getFilteredItems()
    {
        $categoryName = $this->getRequest()->getParam('category');
        $itemCollection = $this->itemFactory->create()
            ->addFieldToFilter('category_name', ['eq'=>$categoryName]);

        return $itemCollection;
    }
}
