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

use PWCode\eBaySDK\Trading\Types\PictureManagerSubscriptionType;

class PictureManagerSubscriptionTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PictureManagerSubscriptionType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Trading\Types\PictureManagerSubscriptionType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Types\BaseType', $this->obj);
    }
}