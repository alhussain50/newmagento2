<?php

namespace HWW\MenuCreate\Model\ResourceModel\Item;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use HWW\MenuCreate\Model\Item;
use HWW\MenuCreate\Model\ResourceModel\Item as ItemResource;
use Magento\InventoryLowQuantityNotification\Model\ResourceModel\SourceItemConfiguration\GetData;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(Item::class, ItemResource::class);
    }

    // public function create(array $data = [])
    // {
    //     return [];
    // }
}
