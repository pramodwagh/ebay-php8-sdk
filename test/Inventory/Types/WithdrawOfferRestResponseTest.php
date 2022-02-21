<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Test\Inventory\Types;

use PWCode\eBaySDK\Inventory\Types\WithdrawOfferRestResponse;

class WithdrawOfferRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new WithdrawOfferRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Inventory\Types\WithdrawOfferRestResponse', $this->obj);
    }

    public function testExtendsWithdrawResponse()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Inventory\Types\WithdrawResponse', $this->obj);
    }
}