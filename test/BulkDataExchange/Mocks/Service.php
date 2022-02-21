<?php
namespace PWCode\eBaySDK\Test\BulkDataExchange\Mocks;

use PWCode\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \PWCode\eBaySDK\BulkDataExchange\Services\BulkDataExchangeBaseService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync(
            'testOperation',
            new ComplexClass(),
            '\PWCode\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
