<?php
namespace HWW\MenuCreate\Controller\Frontend;

use Magento\Framework\Controller\Result\JsonFactory;

class CategoryItem extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	protected $_resultJsonFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		JsonFactory $resultJsonFactory)
	{
		$this->_resultJsonFactory = $resultJsonFactory;
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		$height = $this->getRequest()->getParam('height');
		var_dump($height);exit();
        $result = $this->_resultJsonFactory->create();
        $resultPage = $this->_pageFactory->create();

        $block = $resultPage->getLayout()
                ->createBlock('HWW\MenuCreate\Block\Frontend\Display')
                ->setTemplate('HWW_MenuCreate::categoryitem.phtml')
                ->setData('height',$height)
                ->toHtml();

        $result->setData(['output' => $block]);
        return $result;
	}
}