<?php
namespace PWCode\eBaySDK\Test\Trading\Mocks;

use PWCode\eBaySDK\Trading\Types\GeteBayOfficialTimeRequestType;

class Service extends \PWCode\eBaySDK\Trading\Services\TradingBaseService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync(
            'testOperation',
            new GeteBayOfficialTimeRequestType(),
            '\PWCode\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
