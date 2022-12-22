<?php

namespace Harriswebworks\Slider\Controller\Adminhtml\Slider;

class Index extends \Magento\Backend\App\Action
{

    protected $resultPageFactory = false;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Harriswebworks_Slider::hww_slider');
        $resultPage->getConfig()->getTitle()->prepend((__('Slider')));

        return $resultPage;
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Harriswebworks_Slider::slider');
    }
}
