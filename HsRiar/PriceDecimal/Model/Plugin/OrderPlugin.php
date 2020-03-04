<?php
/**
 *
 * @package HsRiar\PriceDecimal\Model\Plugin
 *
 * @author  Hs Riar <hsriar.work@gmail.com>
 */

namespace HsRiar\PriceDecimal\Model\Plugin;

class OrderPlugin extends PriceFormatPluginAbstract
{
    /**
     * @param \Magento\Sales\Model\Order $subject
     * @param array ...$args
     * @return array
     */
    public function beforeFormatPricePrecision(
        \Magento\Sales\Model\Order $subject,
        ...$args
    ) {
        //is enabled
        if ($this->getConfig()->isEnable()) {
            //change the precision
            $args[1] = $this->getPricePrecision();
        }

        return $args;
    }
}
