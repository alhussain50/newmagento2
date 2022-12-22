<?php
namespace HWW\MenuCreate\Controller\Adminhtml\Item\Save;

/**
 * Interceptor class for @see \HWW\MenuCreate\Controller\Adminhtml\Item\Save
 */
class Interceptor extends \HWW\MenuCreate\Controller\Adminhtml\Item\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \HWW\MenuCreate\Model\Item $itemFactory)
    {
        $this->___init();
        parent::__construct($context, $itemFactory);
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
