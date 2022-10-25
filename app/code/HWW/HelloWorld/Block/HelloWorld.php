<?php
namespace HWW\HelloWorld\Block;
use HWW\HelloWorld\Helper\Data as HwwHelper;
class HelloWorld extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;
    /**
     * @var \HWW\HelloWorld\Helper\Data
     */
    protected $_hwwHelper;

    protected $_storeManager;
    /**
     * Helloworld constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        HwwHelper $hwwHelper,
        \Magento\Store\Model\StoreManagerInterface $storeManager
    ) {
        parent::__construct(            $context        );
        $this->scopeConfig = $scopeConfig;
        $_hwwHelper = $hwwHelper;
        $this->_storeManager = $storeManager;
    }

    /**
     * @return mixed|string
     */
    public function getHelloWorldTxt()
    {
        $text = $this->getText();
        if (!isset($text)) {
            $text = 'Hello World';
        } else {
            $text = 'Text: '.$text;
        }
        return $text;
    }

    public function getTestimonialText()
    {
        $text = $this->getNewText();
        if (!isset($text)) {
            $text = 'Null Field';
        } 
        return $text;
    }

    // public function getImage(){

    // }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->scopeConfig
            ->getValue('helloworld/general/text_content',    \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
    public function getNewText()
    {
        return $this->scopeConfig
            ->getValue('helloworld/general/new_text_content', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
    public function getHelloWorldConfig(){
       return $this->scopeConfig->getValue('helloworld', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
    public function getHelloWorldImage(){
       $helloWorldConfig= $this->getHelloWorldConfig();
    // return $this ->_storeManager-> getStore();
        return $this->scopeConfig
            ->getValue('helloworld/general/image', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}
