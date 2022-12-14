<?php

namespace HWW\Tutorial\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('hww_sample_item', 'id');
    }
}