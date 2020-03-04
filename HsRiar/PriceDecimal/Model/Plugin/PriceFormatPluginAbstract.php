<?php
/**
 *
 * @package HsRiar\PriceDecimal\Model\Plugin
 *
 * @author  Hs Riar <hsriar.work@gmail.com>
 */


namespace HsRiar\PriceDecimal\Model\Plugin;

use HsRiar\PriceDecimal\Model\ConfigInterface;
use HsRiar\PriceDecimal\Model\PricePrecisionConfigTrait;

abstract class PriceFormatPluginAbstract
{

    use PricePrecisionConfigTrait;

    /** @var ConfigInterface  */
    protected $moduleConfig;

    /**
     * @param \HsRiar\PriceDecimal\Model\ConfigInterface $moduleConfig
     */
    public function __construct(
        ConfigInterface $moduleConfig
    ) {
        $this->moduleConfig  = $moduleConfig;
    }
}
