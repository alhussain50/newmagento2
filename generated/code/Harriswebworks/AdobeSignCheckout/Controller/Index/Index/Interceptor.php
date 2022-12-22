<?php
namespace Harriswebworks\AdobeSignCheckout\Controller\Index\Index;

/**
 * Interceptor class for @see \Harriswebworks\AdobeSignCheckout\Controller\Index\Index
 */
class Interceptor extends \Harriswebworks\AdobeSignCheckout\Controller\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\View\Result\PageFactory $pageFactory, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Checkout\Model\Cart $cart, \Magento\Framework\Filesystem\DirectoryList $directoryList, \Magento\Theme\Block\Html\Header\Logo $logo, \Harriswebworks\AdobeSignCheckout\Model\AdobeSignFactory $adobeSignFactory, \Magento\Checkout\Model\Session $checkoutSession, \Harriswebworks\AdobeSignCheckout\Logger\Logger $nLogger, \Harriswebworks\AdobeSignCheckout\Helper\Data $helper)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $storeManager, $scopeConfig, $pageFactory, $resultJsonFactory, $cart, $directoryList, $logo, $adobeSignFactory, $checkoutSession, $nLogger, $helper);
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
