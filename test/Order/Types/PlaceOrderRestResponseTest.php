<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Test\Order\Types;

use PWCode\eBaySDK\Order\Types\PlaceOrderRestResponse;

class PlaceOrderRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PlaceOrderRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Order\Types\PlaceOrderRestResponse', $this->obj);
    }

    public function testExtendsPurchaseOrderSummary()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Order\Types\PurchaseOrderSummary', $this->obj);
    }
}
