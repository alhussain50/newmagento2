<?php
namespace Harriswebworks\Glossary\Controller\Adminhtml\Glossary;


/**
 * Class Index
 */
class Index extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Harriswebworks_Glossary::glossarys';
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('*/index/index');
        return $resultRedirect;
    }
}
