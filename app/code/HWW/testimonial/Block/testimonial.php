<?php
namespace HWW\testimonial\Block;

class testimonial extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * testimonial constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct(
            $context
        );
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @return mixed|string
     */
    public function gettestimonialTxt()
    {
        $text = $this->getText();
        if (!isset($text)) {
            $text = 'Hello World';
        } else {
            $text = 'Hello '.$text;
        }
        return $text;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->scopeConfig
            ->getValue('testimonial/general/text_content',    \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}