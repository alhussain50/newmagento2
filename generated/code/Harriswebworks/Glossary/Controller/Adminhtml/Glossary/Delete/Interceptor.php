<?php
namespace Harriswebworks\Glossary\Controller\Adminhtml\Glossary\Delete;

/**
 * Interceptor class for @see \Harriswebworks\Glossary\Controller\Adminhtml\Glossary\Delete
 */
class Interceptor extends \Harriswebworks\Glossary\Controller\Adminhtml\Glossary\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Harriswebworks\Glossary\Model\GlossaryRepository $objectRepository, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($objectRepository, $context);
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
