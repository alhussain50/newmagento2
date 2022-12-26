<?php

namespace Harriswebworks\CustomCategory\Controller\Adminhtml\Item;

use Harriswebworks\CustomCategory\Model\Item as ItemFactory;

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
        $this->itemFactory
            ->setData($this->getRequest()->getParam('general'))
            ->save();
        return $this->resultRedirectFactory->create()->setPath('customcategory/index/index');
    }
}
