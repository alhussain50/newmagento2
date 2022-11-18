<?php
namespace Harriswebworks\Glossary\Controller\Adminhtml\Index;
class Index extends \Magento\Backend\App\Action
{

    const ADMIN_RESOURCE='Harriswebworks_Glossary::glossarys';

    protected $resultPageFactory;
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        // $post = $this->_postFactory->create();
		// $collection = $post->getCollection();
        // print_r($collection = $post->getCollection());
        // exit();
		// foreach($collection as $item){
		// 	echo "<pre>";
		// 	print_r($item->getData());
		// 	echo "</pre>";
		// }
		// exit();
        return $this->resultPageFactory->create();
    }
}
