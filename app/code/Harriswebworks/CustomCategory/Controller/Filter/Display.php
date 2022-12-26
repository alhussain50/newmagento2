<?php

namespace Harriswebworks\CustomCategory\Controller\Filter;

use Harriswebworks\CustomCategory\Model\ResourceModel\Item\CollectionFactory as ItemFactory;
use Harriswebworks\CustomCategory\Model\ResourceModel\Category\CollectionFactory as CategoryFactory;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\App\RequestInterface;

class Display extends \Magento\Framework\App\Action\Action {

    protected $_pageFactory;
    protected $_itemFactory;
    protected $_categoryFactory;
    protected $_resultJsonFactory;
    protected $_registry;
    /**
      * @var RequestInterface
    */
    private $request;

    public function __construct(
            \Magento\Framework\App\Action\Context $context,
            \Magento\Framework\View\Result\PageFactory $pageFactory,
            \Magento\Framework\Registry $registry,
            JsonFactory $resultJsonFactory,
            ItemFactory $itemFactory,
            CategoryFactory $categoryFactory,
            RequestInterface $request
    ) {
        $this->_pageFactory = $pageFactory;
        $this->_registry = $registry;
        $this->_resultJsonFactory = $resultJsonFactory;
        $this->_itemFactory = $itemFactory;
        $this->_categoryFactory = $categoryFactory;
        $this->request = $request;
        return parent::__construct($context);
    }

    public function execute() {

        $firstParam = $this->request->getParam('first_param', null);
        $secondParam = $this->request->getParam('second_param', null);
        $resultPage = $this->_pageFactory->create();

        return $resultPage;
    }

}
