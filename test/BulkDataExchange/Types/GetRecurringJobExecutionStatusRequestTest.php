<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Test\BulkDataExchange\Types;

use PWCode\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusRequest;

class GetRecurringJobExecutionStatusRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetRecurringJobExecutionStatusRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\BulkDataExchange\Types\BaseServiceRequest', $this->obj);
    }
}
