<?php
namespace Harriswebworks\Glossary\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
    protected $_postFactory;

	public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Harriswebworks\Glossary\Model\PostFactory $postFactory
    )
	{
		$this->_pageFactory = $pageFactory;
        $this->_postFactory = $postFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
        $post = $this->_postFactory->create();
		$collection = $post->getCollection();

        foreach($collection as $item){
			echo "<pre>";
            if($item->getCategory() == "Glossary"){
                print_r($item->getData());
            }
		}
		exit();
		return $this->_pageFactory->create();
	}
}
