<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Test\PostOrder\Types;

use PWCode\eBaySDK\PostOrder\Types\GetCustomListsRestResponse;

class GetCustomListsRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetCustomListsRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\PostOrder\Types\GetCustomListsRestResponse', $this->obj);
    }

    public function testExtendsGetCustomListsResponse()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\PostOrder\Types\GetCustomListsResponse', $this->obj);
    }
}