<?php
namespace PWCode\eBaySDK\Test\Finding\Mocks;

use PWCode\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \PWCode\eBaySDK\Finding\Services\FindingBaseService
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
