<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Test\MerchantData\Types;

use PWCode\eBaySDK\MerchantData\Types\ReviseFixedPriceItemResponseType;

class ReviseFixedPriceItemResponseTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ReviseFixedPriceItemResponseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\MerchantData\Types\ReviseFixedPriceItemResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\MerchantData\Types\AbstractResponseType', $this->obj);
    }
}
