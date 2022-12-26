<?php

namespace Harriswebworks\CustomCategory\Controller\Filter;

use Harriswebworks\CustomCategory\Model\ResourceModel\Item\CollectionFactory as ItemFactory;
use Harriswebworks\CustomCategory\Model\ResourceModel\Category\CollectionFactory as CategoryFactory;
use Magento\Framework\Controller\Result\JsonFactory;

class Display extends \Magento\Framework\App\Action\Action {

    protected $_pageFactory;
    protected $_itemFactory;
    protected $_categoryFactory;
    protected $_resultJsonFactory;
    protected $_registry;

    public function __construct(
            \Magento\Framework\App\Action\Context $context,
            \Magento\Framework\View\Result\PageFactory $pageFactory,
            \Magento\Framework\Registry $registry,
            JsonFactory $resultJsonFactory,
            ItemFactory $itemFactory,
            CategoryFactory $categoryFactory
    ) {
        $this->_pageFactory = $pageFactory;
        $this->_registry = $registry;
        $this->_resultJsonFactory = $resultJsonFactory;
        $this->_itemFactory = $itemFactory;
        $this->_categoryFactory = $categoryFactory;
        return parent::__construct($context);
    }

    public function execute() {

        $result = $this->_resultJsonFactory->create();
        $resultPage = $this->_pageFactory->create();

        return $resultPage;
    }

}
