<?php
namespace Toogas\AbTesting\Controller\Frontend\Statistics;

/**
 * Interceptor class for @see \Toogas\AbTesting\Controller\Frontend\Statistics
 */
class Interceptor extends \Toogas\AbTesting\Controller\Frontend\Statistics implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Toogas\AbTesting\Api\StatisticRepositoryInterface $statisticRepository, \Toogas\AbTesting\Api\Data\StatisticInterfaceFactory $statisticFactory, \Magento\Customer\Model\Session $session)
    {
        $this->___init();
        parent::__construct($context, $statisticRepository, $statisticFactory, $session);
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
