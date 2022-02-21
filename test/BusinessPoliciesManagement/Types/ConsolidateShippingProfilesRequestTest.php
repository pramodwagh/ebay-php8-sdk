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

use PWCode\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesRequest;

class ConsolidateShippingProfilesRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ConsolidateShippingProfilesRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesRequest', $this->obj);
    }

    public function testExtendsBaseRequest()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\BusinessPoliciesManagement\Types\BaseRequest', $this->obj);
    }
}
