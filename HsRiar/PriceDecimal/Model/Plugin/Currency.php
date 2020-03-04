<?php
/**
 *
 * @package package HsRiar\PriceDecimal\Model\Plugin\Local
 *
 * @author  Hs Riar <hsriar.work@gmail.com>
 */

namespace HsRiar\PriceDecimal\Model\Plugin;

class Currency extends PriceFormatPluginAbstract
{

    /**
     * {@inheritdoc}
     *
     * @param \Magento\Framework\CurrencyInterface $subject
     * @param array                                ...$args
     *
     * @return array
     */
    public function beforeToCurrency(
        \HsRiar\PriceDecimal\Model\Currency $subject,
        ...$arguments
    ) {
        if ($this->getConfig()->isEnable()) {
            $arguments[1]['precision'] = $subject->getPricePrecision();
        }
        return $arguments;
    }
}
