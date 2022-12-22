<?php
namespace Toogas\AbTesting\Controller\Frontend\Content;

/**
 * Interceptor class for @see \Toogas\AbTesting\Controller\Frontend\Content
 */
class Interceptor extends \Toogas\AbTesting\Controller\Frontend\Content implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Toogas\AbTesting\Api\AbTestRepositoryInterface $abTestRepository, \Magento\Cms\Model\Template\FilterProvider $filterProvider, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Model\Session $session, \Toogas\AbTesting\Model\ResourceModel\Statistic\CollectionFactory $statisticCollection)
    {
        $this->___init();
        parent::__construct($context, $abTestRepository, $filterProvider, $storeManager, $session, $statisticCollection);
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
