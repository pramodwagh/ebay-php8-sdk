<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Test\ResolutionCaseManagement\Types;

use PWCode\eBaySDK\ResolutionCaseManagement\Types\Money;

class MoneyTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new Money();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\ResolutionCaseManagement\Types\Money', $this->obj);
    }

    public function testExtendsDecimalType()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Types\DecimalType', $this->obj);
    }
}
