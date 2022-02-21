<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Test\Inventory\Types;

use PWCode\eBaySDK\Inventory\Types\PublishOfferRestResponse;

class PublishOfferRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PublishOfferRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Inventory\Types\PublishOfferRestResponse', $this->obj);
    }

    public function testExtendsPublishResponse()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Inventory\Types\PublishResponse', $this->obj);
    }
}
