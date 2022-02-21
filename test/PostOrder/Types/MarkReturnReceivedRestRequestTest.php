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

use PWCode\eBaySDK\PostOrder\Types\MarkReturnReceivedRestRequest;

class MarkReturnReceivedRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MarkReturnReceivedRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\PostOrder\Types\MarkReturnReceivedRestRequest', $this->obj);
    }

    public function testExtendsMarkAsReceivedRequest()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\PostOrder\Types\MarkAsReceivedRequest', $this->obj);
    }
}