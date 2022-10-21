<?php

namespace HWW\test\Block;

class testblock extends \Magento\Framework\View\Element\Template
{
    public function getWelcomeText()
    {
        return 'Hello World';
    }
}