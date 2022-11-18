<?php

namespace HWW\MenuCreate\Controller\Adminhtml\Testimonial;

use HWW\MenuCreate\Model\Item as ItemFactory;

class Save extends \Magento\Backend\App\Action
{
    private $itemFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        ItemFactory $itemFactory
    ) {
        $this->itemFactory = $itemFactory;
        parent::__construct($context);
    }

    public function execute()
    {
// var_dump($this->getRequest()->getParams());exit;
        // $this->itemFactory->create()
        //     ->setData($this->getRequest()->getParams('general'))
        //     ->save();
        // return $this->resultRedirectFactory->create()->setPath('menucreate/create/index');
        $this->itemFactory
            ->setData($this->getRequest()->getParam('general'))
            ->save();
        return $this->resultRedirectFactory->create()->setPath('menucreate/create/index');
    }
}
