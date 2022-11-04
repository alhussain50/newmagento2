<?php

namespace HWW\MenuCreate\Model;

use Magento\Framework\Model\AbstractModel;

class Item extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\HWW\MenuCreate\Model\ResourceModel\Item::class);
    }
}