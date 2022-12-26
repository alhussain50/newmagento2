<?php

namespace Harriswebworks\CustomCategory\Model;

use Magento\Framework\Model\AbstractModel;

class Item extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Harriswebworks\CustomCategory\Model\ResourceModel\Item::class);
    }
    public function create(array $data = [])
    {
        return [];
    }
}