<?php

namespace Harriswebworks\CustomCategory\Controller\Filter;

use Magento\Framework\Controller\Result\JsonFactory;
use Harriswebworks\CustomCategory\Model\ResourceModel\Item\CollectionFactory as ItemFactory;
use Harriswebworks\CustomCategory\Model\ResourceModel\Category\CollectionFactory as CategoryFactory;

class CategoryItem extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	protected $_resultJsonFactory;
	protected $_itemFactory;
	protected $_categoryFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		ItemFactory $itemFactory,
		CategoryFactory $categoryFactory,
		JsonFactory $resultJsonFactory
	) {
		$this->_resultJsonFactory = $resultJsonFactory;
		$this->_pageFactory = $pageFactory;
		$this->_itemFactory = $itemFactory;
		$this->_categoryFactory = $categoryFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		$request = $this->getRequest();
		$template = $request->getParam('template') != '' ? $request->getParam('template') : 'categoryitem.phtml';
		$resultJson = $this->_resultJsonFactory->create();
		$resultPage = $this->_pageFactory->create();
		$items = $this->_itemFactory->create()->getItems();
		$categories = $this->_categoryFactory->create()->getItems();
		$itemData = array('itemsInfo' => $items);
		$categoryData = array('categoriesInfo' => $categories);
		if($this->getRequest()->isAjax()){
			$block = $resultPage->getLayout()
			->createBlock('Harriswebworks\CustomCategory\Block\CategoryItem')
			->setTemplate('Harriswebworks_CustomCategory::' . $template)
			// ->setData('itemData', $itemData)
			// ->setData('categoryData', $categoryData)
			->toHtml();
			$resultJson->setData(['output' => $block]);
			return $resultJson;
		}
	}
}
