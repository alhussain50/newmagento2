<?php
namespace Harriswebworks\Glossary\Controller\Adminhtml\Glossary\Save;

/**
 * Interceptor class for @see \Harriswebworks\Glossary\Controller\Adminhtml\Glossary\Save
 */
class Interceptor extends \Harriswebworks\Glossary\Controller\Adminhtml\Glossary\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, \Harriswebworks\Glossary\Model\GlossaryRepository $objectRepository)
    {
        $this->___init();
        parent::__construct($context, $dataPersistor, $objectRepository);
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
