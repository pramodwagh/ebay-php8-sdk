<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Test\BulkDataExchange\Enums;

use PWCode\eBaySDK\BulkDataExchange\Enums\ErrorSeverity;

class ErrorSeverityTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ErrorSeverity();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\BulkDataExchange\Enums\ErrorSeverity', $this->obj);
    }
}
