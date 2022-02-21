<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Test\BusinessPoliciesManagement\Types;

use PWCode\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileResponse;

class RemoveProfileResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RemoveProfileResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileResponse', $this->obj);
    }

    public function testExtendsBaseResponse()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\BusinessPoliciesManagement\Types\BaseResponse', $this->obj);
    }
}
