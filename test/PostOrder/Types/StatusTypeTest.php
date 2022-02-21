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

use PWCode\eBaySDK\PostOrder\Types\StatusType;

class StatusTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new StatusType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\PostOrder\Types\StatusType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Types\BaseType', $this->obj);
    }
}
