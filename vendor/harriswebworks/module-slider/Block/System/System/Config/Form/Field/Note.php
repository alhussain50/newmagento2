<?php

namespace Harriswebworks\Slider\Block\System\Config\Form\Field;

class Note extends \Magento\Config\Block\System\Config\Form\Field {

    public function __construct(
            \Magento\Backend\Block\Template\Context $context,
            array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element) {
        $html = '<h2>Slider adding system in store front</h2>
            <p>You can add specific slides in your storefront using your suitable method that expressed below.</p> 
            <p><strong>Add in XML</strong><pre><code><i>&lt;referenceContainer name="content"&gt;
    &lt;block class="Harriswebworks\Slider\Block\Slider" 
           name="custom-slider-1"                    
           template="Harriswebworks_Slider::slider.phtml" 
           ifconfig="hww_slider/general/enable"&gt;
        &lt;arguments&gt;
            &lt;argument name="slider_id" xsi:type="string"&gt;1&lt;/argument&gt;
        &lt;/arguments&gt;
    &lt;/block&gt;
&lt;/referenceContainer&gt;</i></code></pre></p>
    <p><strong>Add in CMS page/block</strong><pre><code><i>{{block class="Harriswebworks\Slider\Block\Slider" 
name="custom-slider-1" 
slider_id="1" 
template="Harriswebworks_Slider::slider.phtml" 
ifconfig="hww_slider/general/enable"}}</i></code></pre></p>
    <p><strong>Add in phtml file</strong><pre><code><i>&lt;?php echo $block->getLayout()
->createBlock("Harriswebworks\Slider\Block\Slider")
->setName("custom-slider-1")
->setSliderId(1)
->setTemplate("Harriswebworks_Slider::slider.phtml")
->toHtml();?&gt;</i></code></pre></p>';
        return $html;
    }

}
