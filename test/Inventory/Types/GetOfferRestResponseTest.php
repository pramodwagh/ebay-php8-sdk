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

use PWCode\eBaySDK\Inventory\Types\GetOfferRestResponse;

class GetOfferRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetOfferRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Inventory\Types\GetOfferRestResponse', $this->obj);
    }

    public function testExtendsEbayOfferDetailsWithAll()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Inventory\Types\EbayOfferDetailsWithAll', $this->obj);
    }
}