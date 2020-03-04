<?php
/**
 *
 * @package HsRiar\PriceDecimal
 *
 * @author  Hs Riar <hsriar.work@gmail.com>
 */

namespace HsRiar\PriceDecimal\Model;

trait PricePrecisionConfigTrait
{


    /**
     * @return \HsRiar\PriceDecimal\Model\ConfigInterface
     */
    public function getConfig()
    {
        return $this->moduleConfig;
    }

    /**
     * @return int|mixed
     */
    public function getPricePrecision()
    {
        if ($this->getConfig()->canShowPriceDecimal()) {
            return $this->getConfig()->getPricePrecision();
        }

        return 0;
    }
}
