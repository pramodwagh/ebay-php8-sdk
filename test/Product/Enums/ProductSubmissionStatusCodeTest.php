<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Test\Product\Enums;

use PWCode\eBaySDK\Product\Enums\ProductSubmissionStatusCode;

class ProductSubmissionStatusCodeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProductSubmissionStatusCode();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Product\Enums\ProductSubmissionStatusCode', $this->obj);
    }
}