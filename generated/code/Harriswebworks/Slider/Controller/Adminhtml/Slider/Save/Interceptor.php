<?php
namespace Harriswebworks\Slider\Controller\Adminhtml\Slider\Save;

/**
 * Interceptor class for @see \Harriswebworks\Slider\Controller\Adminhtml\Slider\Save
 */
class Interceptor extends \Harriswebworks\Slider\Controller\Adminhtml\Slider\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Harriswebworks\Slider\Model\SliderFactory $sliderFactory)
    {
        $this->___init();
        parent::__construct($context, $sliderFactory);
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
