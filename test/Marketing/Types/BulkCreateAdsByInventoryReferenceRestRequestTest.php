<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Test\Marketing\Types;

use PWCode\eBaySDK\Marketing\Types\BulkCreateAdsByInventoryReferenceRestRequest;

class BulkCreateAdsByInventoryReferenceRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BulkCreateAdsByInventoryReferenceRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Marketing\Types\BulkCreateAdsByInventoryReferenceRestRequest', $this->obj);
    }

    public function testExtendsBulkCreateAdsByInventoryReferenceRequest()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Marketing\Types\BulkCreateAdsByInventoryReferenceRequest', $this->obj);
    }
}
