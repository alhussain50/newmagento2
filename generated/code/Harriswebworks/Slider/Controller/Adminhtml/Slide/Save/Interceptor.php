<?php
namespace Harriswebworks\Slider\Controller\Adminhtml\Slide\Save;

/**
 * Interceptor class for @see \Harriswebworks\Slider\Controller\Adminhtml\Slide\Save
 */
class Interceptor extends \Harriswebworks\Slider\Controller\Adminhtml\Slide\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Harriswebworks\Slider\Model\SlideFactory $slideFactory)
    {
        $this->___init();
        parent::__construct($context, $slideFactory);
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
