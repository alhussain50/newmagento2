<?php
namespace HWW\MenuCreate\Controller\Frontend\Display;

/**
 * Interceptor class for @see \HWW\MenuCreate\Controller\Frontend\Display
 */
class Interceptor extends \HWW\MenuCreate\Controller\Frontend\Display implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory, \Magento\Framework\Registry $registry, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \HWW\MenuCreate\Model\ResourceModel\Item\CollectionFactory $itemFactory, \HWW\MenuCreate\Model\ResourceModel\Category\CollectionFactory $categoryFactory)
    {
        $this->___init();
        parent::__construct($context, $pageFactory, $registry, $resultJsonFactory, $itemFactory, $categoryFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
