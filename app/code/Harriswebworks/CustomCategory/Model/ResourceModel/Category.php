<?php

namespace Harriswebworks\CustomCategory\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Category extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('harriswebworks_category', 'id');
    }
}