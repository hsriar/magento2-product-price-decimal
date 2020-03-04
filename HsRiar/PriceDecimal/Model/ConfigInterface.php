<?php
/**
 *
 * @package HsRiar\PriceDecimal\Model
 *
 * @author  Hs Riar <hsriar.work@gmail.com>
 */


namespace HsRiar\PriceDecimal\Model;

interface ConfigInterface
{
    /**
     * @return \Magento\Framework\App\Config\ScopeConfigInterface
     */
    public function getScopeConfig();

    /**
     * @return mixed
     */
    public function isEnable();
}
