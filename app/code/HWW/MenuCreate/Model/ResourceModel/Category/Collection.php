<?php

namespace HWW\MenuCreate\Model\ResourceModel\Category;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use HWW\MenuCreate\Model\Category;
use HWW\MenuCreate\Model\ResourceModel\Category as CategoryResource;
use Magento\InventoryLowQuantityNotification\Model\ResourceModel\SourceItemConfiguration\GetData;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(Category::class, CategoryResource::class);
    }

    public function create(array $data = [])
    {
        return [];
    }
}
