<?php

namespace HWW\Tutorial\Model\ResourceModel\Item;

use HWW\Tutorial\Model\Item;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use HWW\Tutorial\Model\ResourceModel\Item as ItemResouce;

class Collection extends AbstractCollection{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(Item::class, ItemResouce::class);
    }
}