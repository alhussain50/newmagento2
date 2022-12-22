<?php
namespace Harriswebworks\Slider\Block\Adminhtml\Slider\Edit\Form;

/**
 * Interceptor class for @see \Harriswebworks\Slider\Block\Adminhtml\Slider\Edit\Form
 */
class Interceptor extends \Harriswebworks\Slider\Block\Adminhtml\Slider\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Harriswebworks\Slider\Model\Options\Status $options, \Harriswebworks\Slider\Model\Options\Slidetype $slidetype, \Harriswebworks\Slider\Model\Options\Slidestyle $slidestyle, \Harriswebworks\Slider\Helper\Data $sliderHelper, \Magento\Framework\Json\EncoderInterface $jsonEncoder, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $options, $slidetype, $slidestyle, $sliderHelper, $jsonEncoder, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForm');
        return $pluginInfo ? $this->___callPlugins('getForm', func_get_args(), $pluginInfo) : parent::getForm();
    }
}
