<?php
/**
 *
 * @package package HsRiar\PriceDecimal\Model\Plugin\Local
 *
 * @author  Hs Riar<hsriar.work@gmail.com>
 */

namespace HsRiar\PriceDecimal\Model\Plugin\Local;

use HsRiar\PriceDecimal\Model\Plugin\PriceFormatPluginAbstract;

class Format extends PriceFormatPluginAbstract
{

    /**
     * {@inheritdoc}
     *
     * @param $subject
     * @param $result
     *
     * @return mixed
     */
    public function afterGetPriceFormat($subject, $result)
    {
        $precision = $this->getPricePrecision();

        if ($this->getConfig()->isEnable()) {
            $result['precision'] = $precision;
            $result['requiredPrecision'] = $precision;
        }

        return $result;
    }
}
