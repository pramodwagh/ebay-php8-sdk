<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Test\Shopping\Types;

use PWCode\eBaySDK\Shopping\Types\GetItemStatusRequestType;

class GetItemStatusRequestTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetItemStatusRequestType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Shopping\Types\GetItemStatusRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Shopping\Types\AbstractRequestType', $this->obj);
    }
}
