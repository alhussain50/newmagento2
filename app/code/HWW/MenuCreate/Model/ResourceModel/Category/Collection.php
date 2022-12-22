<?php

namespace HWW\MenuCreate\Model\ResourceModel\Category;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(\HWW\MenuCreate\Model\Category::class,
        \HWW\MenuCreate\Model\ResourceModel\Category::class);
    }

//    public function create(array $data = [])
//    {
//        return [];
//    }
}
