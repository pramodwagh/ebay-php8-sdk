<?php
namespace PWCode\eBaySDK\Test\Mocks;

class Service extends \PWCode\eBaySDK\Test\Mocks\BaseService
{
    public function __construct(array $config)
    {
        parent::__construct(
            $config + [
                'credentials' => [
                    'appId' => '',
                    'certId' => '',
                    'devId' => ''
                ]
            ]
        );
    }

    public function foo(\PWCode\eBaySDK\Test\Mocks\ComplexClass $request)
    {
        return $this->callOperationAsync(
            'foo',
            $request,
            '\PWCode\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }

    public function bar(\PWCode\eBaySDK\Test\Mocks\ComplexClass $request)
    {
        return $this->callOperationAsync(
            'foo',
            $request,
            '\PWCode\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
