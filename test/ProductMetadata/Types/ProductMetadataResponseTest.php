<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Test\ProductMetadata\Types;

use PWCode\eBaySDK\ProductMetadata\Types\ProductMetadataResponse;

class ProductMetadataResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProductMetadataResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\ProductMetadata\Types\ProductMetadataResponse', $this->obj);
    }

    public function testExtendsBaseResponse()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\ProductMetadata\Types\BaseResponse', $this->obj);
    }
}