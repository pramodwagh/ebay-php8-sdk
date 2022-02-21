<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Test\Marketing\Types;

use PWCode\eBaySDK\Marketing\Types\CreateCampaignRestRequest;

class CreateCampaignRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateCampaignRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Marketing\Types\CreateCampaignRestRequest', $this->obj);
    }

    public function testExtendsCreateCampaignRequest()
    {
        $this->assertInstanceOf('\PWCode\eBaySDK\Marketing\Types\CreateCampaignRequest', $this->obj);
    }
}
