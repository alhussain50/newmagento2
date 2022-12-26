<?php

namespace Harriswebworks\CustomCategory\Model;

use Magento\Framework\Model\AbstractModel;

class Category extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Harriswebworks\CustomCategory\Model\ResourceModel\Category::class);
    }
    public function create(array $data = [])
    {
        return [];
    }
}