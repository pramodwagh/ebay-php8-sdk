<?php
namespace PWCode\eBaySDK\Types\Test;

use PWCode\eBaySDK\Types\IntegerType;

class IntegerTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new IntegerType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Types\IntegerType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testHasValueProperty()
    {
        $this->obj->value = 123;
        $this->assertEquals(123, $this->obj->value);
        $this->assertInternalType('integer', $this->obj->value);
    }
}
