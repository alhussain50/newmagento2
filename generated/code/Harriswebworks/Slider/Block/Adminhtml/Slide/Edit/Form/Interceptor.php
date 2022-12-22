<?php
namespace Harriswebworks\Slider\Block\Adminhtml\Slide\Edit\Form;

/**
 * Interceptor class for @see \Harriswebworks\Slider\Block\Adminhtml\Slide\Edit\Form
 */
class Interceptor extends \Harriswebworks\Slider\Block\Adminhtml\Slide\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig, \Harriswebworks\Slider\Model\Options\Status $options, \Harriswebworks\Slider\Model\Options\Slideroption $sliderOption, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $wysiwygConfig, $options, $sliderOption, $data);
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
