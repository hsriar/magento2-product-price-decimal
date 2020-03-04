<?php
/**
 * @category   Magento Module
 * @package    Magento_HsRiar
 * @copyright  Copyright (c) 2020 Hs Riar
 * @author     Hs Riar <hsriar.work@evozon.com>
 */

namespace HsRiar\PriceDecimal\Test\Unit\Plugin\Model;

use HsRiar\PriceDecimal\Model\ConfigInterface;
use HsRiar\PriceDecimal\Model\Plugin\PriceCurrency;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;

class PriceCurrencyTest extends \PHPUnit\Framework\TestCase
{

    private $closureMock;

    private $priceCurrencyMock;

    protected function setUp()
    {
        $this->closureMock = function (...$args) {
            return number_format($args[0], $args[2]);
        };

        $this->priceCurrencyMock = $this->getMockBuilder('Magento\Directory\Model\PriceCurrency')
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     *
     */
    public function testAroundFormat()
    {

        $price = 22.54;
        $args = [
            $price,
            true,
            2
        ];

        $pricePrecision = 2;

        $configMock = $this->getMockBuilder(
            ConfigInterface::class
        )->disableOriginalConstructor()
            ->setMethods(['isEnable', 'getScopeConfig', 'canShowPriceDecimal', 'getPricePrecision'])
            ->getMock();

        $configMock->expects($this->any())->method('isEnable')->willReturn(1);
        $configMock->expects($this->any())->method('canShowPriceDecimal')->willReturn(1);
        $configMock->expects($this->any())->method('getPricePrecision')->willReturn($pricePrecision);

        $objectManager = new ObjectManager($this);
        $model = $objectManager->getObject(
            PriceCurrency::class,
            [
                'moduleConfig' => $configMock
            ]
        );

        $result = $model->aroundFormat(
            $this->priceCurrencyMock,
            $this->closureMock,
            ...$args
        );

        $this->assertEquals(number_format($args[0], $args[2]), $result);
    }
}
