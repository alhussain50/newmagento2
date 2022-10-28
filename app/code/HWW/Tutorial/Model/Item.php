<?php

namespace HWW\Tutorial\Model;

use Magento\Framework\Model\AbstractModel;

class Item extends AbstractModel{
    protected function _construct()
    {
        $this->_init(\HWW\Tutorial\Model\ResourceModel\Item::class);
    }
}