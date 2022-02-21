<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Test\ReturnManagement\Types;

use PWCode\eBaySDK\ReturnManagement\Types\GetReturnMetadataRequest;

class GetReturnMetadataRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetReturnMetadataRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\ReturnManagement\Types\GetReturnMetadataRequest', $this->obj);
    }

    public function testExtendsBaseRequest()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\ReturnManagement\Types\BaseRequest', $this->obj);
    }
}
