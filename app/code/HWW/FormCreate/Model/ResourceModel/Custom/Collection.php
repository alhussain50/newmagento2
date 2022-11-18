<?php
 
namespace HWW\FormCreate\Model\ResourceModel\Custom;
 
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
 
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('HWW\FormCreate\Model\Custom','HWW\FormCreate\Model\ResourceModel\Custom');
    }
}