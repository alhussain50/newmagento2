<?php

namespace Harriswebworks\CustomCategory\Controller\Adminhtml\Category;

use Harriswebworks\CustomCategory\Model\Category as ItemFactory;

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
        return $this->resultRedirectFactory->create()->setPath('customcategory/category/index');
    }
}
