<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Test\Trading\Types;

use PWCode\eBaySDK\Trading\Types\CrossBorderTradeNorthAmericaEnabledDefinitionType;

class CrossBorderTradeNorthAmericaEnabledDefinitionTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CrossBorderTradeNorthAmericaEnabledDefinitionType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Trading\Types\CrossBorderTradeNorthAmericaEnabledDefinitionType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Types\BaseType', $this->obj);
    }
}
