<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Test\Merchandising\Types;

use PWCode\eBaySDK\Merchandising\Types\Amount;

class AmountTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new Amount();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Merchandising\Types\Amount', $this->obj);
    }

    public function testExtendsDoubleType()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Types\DoubleType', $this->obj);
    }
}
