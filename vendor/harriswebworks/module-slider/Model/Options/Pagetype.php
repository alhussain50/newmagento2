<?php

/**
 * Harriswebworks_Slider Status Options Model.
 * @category    Harriswebworks
 * @author      Harriswebworks Dhaka
 */

namespace Harriswebworks\Slider\Model\Options;

use Magento\Framework\Data\OptionSourceInterface;

class Pagetype implements OptionSourceInterface
{

    /**
     * Get Grid row status type labels array.
     * @return array
     */
    public function getOptionArray()
    {
        $options = ['0' => __('None'),'1' => __('CMS Page'), '2' => __('Category'), '3' => __('Custom Route')];
        return $options;
    }

    /**
     * Get Grid row status labels array with empty value for option element.
     *
     * @return array
     */
    public function getAllOptions()
    {
        $res = $this->getOptions();
        array_unshift($res, ['value' => '', 'label' => '']);
        return $res;
    }

    /**
     * Get Grid row type array for option element.
     * @return array
     */
    public function getOptions()
    {
        $res = [];
        foreach ($this->getOptionArray() as $index => $value) {
            $res[] = ['value' => $index, 'label' => $value];
        }
        return $res;
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        return $this->getOptions();
    }
}
