<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Test\Fulfillment\Enums;

use PWCode\eBaySDK\Fulfillment\Enums\PaymentStatusEnum;

class PaymentStatusEnumTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PaymentStatusEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Fulfillment\Enums\PaymentStatusEnum', $this->obj);
    }
}
