<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Test\Merchandising\Types;

use PWCode\eBaySDK\Merchandising\Types\GetSimilarItemsRequest;

class GetSimilarItemsRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetSimilarItemsRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Merchandising\Types\GetSimilarItemsRequest', $this->obj);
    }

    public function testExtendsBaseMerchandisingServiceRequest()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Merchandising\Types\BaseMerchandisingServiceRequest', $this->obj);
    }
}