<?php
namespace PWCode\eBaySDK\Test\OAuth\Types;

use PWCode\eBaySDK\OAuth\Types\GetAppTokenRestRequest;

class GetAppTokenRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetAppTokenRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\OAuth\Types\GetAppTokenRestRequest', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testProperties()
    {
        $this->obj->grant_type = 'foo';
        $this->obj->redirect_uri = 'bar';
        $this->obj->scope = 'baz';

        $this->assertEquals('foo', $this->obj->grant_type);
        $this->assertEquals('bar', $this->obj->redirect_uri);
        $this->assertEquals('baz', $this->obj->scope);
    }
}
