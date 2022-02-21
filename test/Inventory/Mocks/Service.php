<?php
namespace PWCode\eBaySDK\Test\Inventory\Mocks;

use PWCode\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \PWCode\eBaySDK\Inventory\Services\InventoryBaseService
{
    protected static $operations = [
        'testOperation' => [
            'method' => 'GET',
            'resource' => 'item/{item_id}',
            'responseClass' => '\PWCode\eBaySDK\Test\Mocks\ComplexClass',
            'params' => [
            ]
        ]
    ];

    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync('testOperation', new ComplexClass())->wait();
    }
}
