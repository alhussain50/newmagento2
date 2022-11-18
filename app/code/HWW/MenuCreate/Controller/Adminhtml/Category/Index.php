<?php
namespace HWW\MenuCreate\Controller\Adminhtml\Category;
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
            // $resultPage->setActiveMenu('HWW_MenuCreate::testimonial');
            $resultPage->getConfig()->getTitle()->prepend(__('Category'));
            return $resultPage;
        }
        protected function _isAllowed()
        {
            return $this->_authorization->isAllowed('HWW_MenuCreate::testimonial');
        }
}