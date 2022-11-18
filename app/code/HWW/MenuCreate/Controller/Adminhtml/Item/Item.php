<?php
namespace HWW\MenuCreate\Controller\Adminhtml\Item;

use Magento\Framework\Controller\ResultFactory;

class Item extends \Magento\Backend\App\Action
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