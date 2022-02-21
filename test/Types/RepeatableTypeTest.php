<?php
namespace PWCode\eBaySDK\Types\Test;

use PWCode\eBaySDK\Types\RepeatableType;

class RepeatableTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new RepeatableType('', '', 'string');
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Types\RepeatableType', $this->obj);
    }

    public function testExtendsArrayAccess()
    {
        $this->assertInstanceOf('\ArrayAccess', $this->obj);
    }

    public function testExtendsIterator()
    {
        $this->assertInstanceOf('\Iterator', $this->obj);
    }

    public function testExtendsCountable()
    {
        $this->assertInstanceOf('\Countable', $this->obj);
    }

    public function testArray()
    {
        $this->assertEquals(0, count($this->obj));

        $this->obj[] = 'one';
        $this->assertEquals(1, count($this->obj));
        $this->assertEquals('one', $this->obj[0]);

        $this->obj[] = 'two';
        $this->assertEquals(2, count($this->obj));
        $this->assertEquals('two', $this->obj[1]);

        $this->assertEquals(null, $this->obj[10]);
        $this->obj[10] = 'three';
        $this->assertEquals(3, count($this->obj));
        $this->assertEquals('three', $this->obj[10]);

        unset($this->obj[10]);
        $this->assertEquals(2, count($this->obj));
        $this->assertEquals(null, $this->obj[10]);

        $index = 0;
        foreach ($this->obj as $key => $value) {
            $this->assertEquals($index, $key);
            $this->assertEquals($this->obj[$index], $value);
            $index++;
        }
    }

    public function testSettingInvalidType()
    {
        $this->setExpectedException('\PWCode\eBaySDK\Exceptions\InvalidPropertyTypeException', 'Invalid property type provided for . Expected string but got integer');

        $this->obj[] = 123;
    }
}
