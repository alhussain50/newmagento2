<?php
namespace HWW\MenuCreate\Model\ResourceModel\Item\Grid\Collection;

/**
 * Interceptor class for @see \HWW\MenuCreate\Model\ResourceModel\Item\Grid\Collection
 */
class Interceptor extends \HWW\MenuCreate\Model\ResourceModel\Item\Grid\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, $mainTable = 'hww_glossary', $resourceModel = 'HWW\\MenuCreate\\Model\\ResourceModel\\Item')
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $mainTable, $resourceModel);
    }

    /**
     * {@inheritdoc}
     */
    public function addFieldToFilter($field, $condition = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFieldToFilter');
        return $pluginInfo ? $this->___callPlugins('addFieldToFilter', func_get_args(), $pluginInfo) : parent::addFieldToFilter($field, $condition);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
