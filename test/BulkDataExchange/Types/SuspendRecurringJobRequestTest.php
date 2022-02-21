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

use PWCode\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobRequest;

class SuspendRecurringJobRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SuspendRecurringJobRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\BulkDataExchange\Types\BaseServiceRequest', $this->obj);
    }
}
