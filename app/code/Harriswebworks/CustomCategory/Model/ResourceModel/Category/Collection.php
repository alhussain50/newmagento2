<?php

namespace Harriswebworks\CustomCategory\Model\ResourceModel\Category;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(\Harriswebworks\CustomCategory\Model\Category::class,
        \Harriswebworks\CustomCategory\Model\ResourceModel\Category::class);
    }

//    public function create(array $data = [])
//    {
//        return [];
//    }
}
