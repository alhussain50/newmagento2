<?php
namespace Harriswebworks\Glossary\Controller\Adminhtml\Index;
class Index extends \Magento\Backend\App\Action
{

    const ADMIN_RESOURCE = 'Harriswebworks_Glossary::harriswebworks_glossary_glossarys_menu';

    protected $resultPageFactory;
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}
