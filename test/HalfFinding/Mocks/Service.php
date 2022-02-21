<?php
namespace PWCode\eBaySDK\Test\HalfFinding\Mocks;

use PWCode\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \PWCode\eBaySDK\HalfFinding\Services\HalfFindingBaseService
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
