<?php
namespace PWCode\eBaySDK\Types\Test;

use PWCode\eBaySDK\Types\StringType;

class StringTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new StringType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Types\StringType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testHasValueProperty()
    {
        $this->obj->value = 'foo';
        $this->assertEquals('foo', $this->obj->value);
        $this->assertInternalType('string', $this->obj->value);
    }
}
