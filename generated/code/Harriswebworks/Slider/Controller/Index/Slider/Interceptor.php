<?php
namespace Harriswebworks\Slider\Controller\Index\Slider;

/**
 * Interceptor class for @see \Harriswebworks\Slider\Controller\Index\Slider
 */
class Interceptor extends \Harriswebworks\Slider\Controller\Index\Slider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory, \Harriswebworks\Slider\Model\SliderFactory $sliderFactory)
    {
        $this->___init();
        parent::__construct($context, $pageFactory, $sliderFactory);
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
