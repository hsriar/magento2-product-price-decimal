<?php
/**
 * @category   Hs Riar
 * @package    Magento_HR
 * @copyright  Copyright (c) 2020 Hs Riar (http://www.hsriar.com)
 * @author     Hs Riar <hsriar.work@evozon.com>
 */

namespace HsRiar\PriceDecimal\Block\System\Config\Form\Field;


class Precision implements \Magento\Framework\Option\ArrayInterface
{

    /**
     * Return array of options as value-label pairs
     *
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     */
    public function toOptionArray()
    {
        return [
            ['value' => 1, 'label' => __('1')],
            ['value' => 2, 'label' => __('2')],
            ['value' => 3, 'label' => __('3')],
            ['value' => 4, 'label' => __('4')],
        ];
    }
}