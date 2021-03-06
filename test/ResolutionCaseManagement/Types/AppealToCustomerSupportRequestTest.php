<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Test\ResolutionCaseManagement\Types;

use PWCode\eBaySDK\ResolutionCaseManagement\Types\AppealToCustomerSupportRequest;

class AppealToCustomerSupportRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AppealToCustomerSupportRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\ResolutionCaseManagement\Types\AppealToCustomerSupportRequest', $this->obj);
    }

    public function testExtendsBaseRequest()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\ResolutionCaseManagement\Types\BaseRequest', $this->obj);
    }
}
