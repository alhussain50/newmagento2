<?php
namespace HWW\MenuCreate\Block\Frontend;
class Display extends \Magento\Framework\View\Element\Template
{
	protected $_postFactory;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Harriswebworks\Glossary\Model\PostFactory $postFactory
	)
	{
		// $this->_postFactory = $postFactory;
		parent::__construct($context);
	}

	public function sayCheese()
	{
		return __('Hello Cheese!');
	}

	// public function getPostCollection(){
	// 	$post = $this->_postFactory->create();
	// 	return $post->getCollection();
	// }

	
}