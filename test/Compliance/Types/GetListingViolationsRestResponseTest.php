<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Test\Compliance\Types;

use PWCode\eBaySDK\Compliance\Types\GetListingViolationsRestResponse;

class GetListingViolationsRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetListingViolationsRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Compliance\Types\GetListingViolationsRestResponse', $this->obj);
    }

    public function testExtendsPagedComplianceViolationCollection()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Compliance\Types\PagedComplianceViolationCollection', $this->obj);
    }
}