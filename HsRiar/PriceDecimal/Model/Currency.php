<?php
/**
 *
 * @package package HsRiar\PriceDecimal
 *
 * @author  Hs Riar <hsriar.work@gmail.com>
 */

namespace HsRiar\PriceDecimal\Model;

use Magento\Framework\CurrencyInterface;
use Magento\Framework\Currency as MagentoCurrency;
use HsRiar\PriceDecimal\Model\ConfigInterface;

/** @method getPricePrecision */
class Currency extends MagentoCurrency implements CurrencyInterface
{

    use PricePrecisionConfigTrait;

    /**
     * @var \HsRiar\PriceDecimal\Model\ConfigInterface
     */
    public $moduleConfig;

    /**
     * Currency constructor.
     *
     * @param \Magento\Framework\App\CacheInterface      $appCache
     * @param \HsRiar\PriceDecimal\Model\ConfigInterface $moduleConfig
     * @param null                                       $options
     * @param null                                       $locale
     */
    public function __construct(
        \Magento\Framework\App\CacheInterface $appCache,
        ConfigInterface $moduleConfig,
        $options = null,
        $locale = null
    ) {
        $this->moduleConfig = $moduleConfig;
        parent::__construct($appCache, $options, $locale);
    }
}
