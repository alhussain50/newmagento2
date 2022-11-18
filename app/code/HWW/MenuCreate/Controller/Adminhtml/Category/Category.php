<?php
namespace HWW\MenuCreate\Controller\Adminhtml\Category;

use Magento\Framework\Controller\ResultFactory;

class Category extends \Magento\Backend\App\Action
{
    /**
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $resultPage;
    }
}