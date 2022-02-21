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

use PWCode\eBaySDK\ResolutionCaseManagement\Types\IssuePartialRefundResponse;

class IssuePartialRefundResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new IssuePartialRefundResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\ResolutionCaseManagement\Types\IssuePartialRefundResponse', $this->obj);
    }

    public function testExtendsBaseResponse()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\ResolutionCaseManagement\Types\BaseResponse', $this->obj);
    }
}
