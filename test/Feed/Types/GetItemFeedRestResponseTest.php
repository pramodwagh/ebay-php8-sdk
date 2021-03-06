<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Test\Feed\Types;

use PWCode\eBaySDK\Feed\Types\GetItemFeedRestResponse;

class GetItemFeedRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetItemFeedRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Feed\Types\GetItemFeedRestResponse', $this->obj);
    }

    public function testExtendsItemFeedResponse()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Feed\Types\ItemFeedResponse', $this->obj);
    }
}
