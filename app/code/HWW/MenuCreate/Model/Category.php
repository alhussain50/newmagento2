<?php

namespace HWW\MenuCreate\Model;

use Magento\Framework\Model\AbstractModel;

class Category extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\HWW\MenuCreate\Model\ResourceModel\Category::class);
    }
    public function create(array $data = [])
    {
        return [];
    }
}