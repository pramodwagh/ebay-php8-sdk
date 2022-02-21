<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Fulfillment\Services;

class FulfillmentService extends \PWCode\eBaySDK\Fulfillment\Services\FulfillmentBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetOrders' => [
            'method' => 'GET',
            'resource' => 'order',
            'responseClass' => '\PWCode\eBaySDK\Fulfillment\Types\GetOrdersRestResponse',
            'params' => [
                'filter' => [
                    'valid' => ['string']
                ],
                'limit' => [
                    'valid' => ['string']
                ],
                'offset' => [
                    'valid' => ['string']
                ],
                'orderIds' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'GetAnOrder' => [
            'method' => 'GET',
            'resource' => 'order/{orderId}',
            'responseClass' => '\PWCode\eBaySDK\Fulfillment\Types\GetAnOrderRestResponse',
            'params' => [
                'orderId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'CreateAShippingFulfillment' => [
            'method' => 'POST',
            'resource' => 'order/{orderId}/shipping_fulfillment',
            'responseClass' => '\PWCode\eBaySDK\Fulfillment\Types\CreateAShippingFulfillmentRestResponse',
            'params' => [
                'orderId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetShippingFulfillments' => [
            'method' => 'GET',
            'resource' => 'order/{orderId}/shipping_fulfillment',
            'responseClass' => '\PWCode\eBaySDK\Fulfillment\Types\GetShippingFulfillmentsRestResponse',
            'params' => [
                'orderId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAShippingFulfillment' => [
            'method' => 'GET',
            'resource' => 'order/{orderId}/shipping_fulfillment/{fulfillmentId}',
            'responseClass' => '\PWCode\eBaySDK\Fulfillment\Types\GetAShippingFulfillmentRestResponse',
            'params' => [
                'fulfillmentId' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'orderId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ]
    ];

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \PWCode\eBaySDK\Fulfillment\Types\GetOrdersRestRequest $request
     * @return \PWCode\eBaySDK\Fulfillment\Types\GetOrdersRestResponse
     */
    public function getOrders(\PWCode\eBaySDK\Fulfillment\Types\GetOrdersRestRequest $request)
    {
        return $this->getOrdersAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Fulfillment\Types\GetOrdersRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrdersAsync(\PWCode\eBaySDK\Fulfillment\Types\GetOrdersRestRequest $request)
    {
        return $this->callOperationAsync('GetOrders', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Fulfillment\Types\GetAnOrderRestRequest $request
     * @return \PWCode\eBaySDK\Fulfillment\Types\GetAnOrderRestResponse
     */
    public function getAnOrder(\PWCode\eBaySDK\Fulfillment\Types\GetAnOrderRestRequest $request)
    {
        return $this->getAnOrderAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Fulfillment\Types\GetAnOrderRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAnOrderAsync(\PWCode\eBaySDK\Fulfillment\Types\GetAnOrderRestRequest $request)
    {
        return $this->callOperationAsync('GetAnOrder', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Fulfillment\Types\CreateAShippingFulfillmentRestRequest $request
     * @return \PWCode\eBaySDK\Fulfillment\Types\CreateAShippingFulfillmentRestResponse
     */
    public function createAShippingFulfillment(\PWCode\eBaySDK\Fulfillment\Types\CreateAShippingFulfillmentRestRequest $request)
    {
        return $this->createAShippingFulfillmentAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Fulfillment\Types\CreateAShippingFulfillmentRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAShippingFulfillmentAsync(\PWCode\eBaySDK\Fulfillment\Types\CreateAShippingFulfillmentRestRequest $request)
    {
        return $this->callOperationAsync('CreateAShippingFulfillment', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Fulfillment\Types\GetShippingFulfillmentsRestRequest $request
     * @return \PWCode\eBaySDK\Fulfillment\Types\GetShippingFulfillmentsRestResponse
     */
    public function getShippingFulfillments(\PWCode\eBaySDK\Fulfillment\Types\GetShippingFulfillmentsRestRequest $request)
    {
        return $this->getShippingFulfillmentsAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Fulfillment\Types\GetShippingFulfillmentsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShippingFulfillmentsAsync(\PWCode\eBaySDK\Fulfillment\Types\GetShippingFulfillmentsRestRequest $request)
    {
        return $this->callOperationAsync('GetShippingFulfillments', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Fulfillment\Types\GetAShippingFulfillmentRestRequest $request
     * @return \PWCode\eBaySDK\Fulfillment\Types\GetAShippingFulfillmentRestResponse
     */
    public function getAShippingFulfillment(\PWCode\eBaySDK\Fulfillment\Types\GetAShippingFulfillmentRestRequest $request)
    {
        return $this->getAShippingFulfillmentAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Fulfillment\Types\GetAShippingFulfillmentRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAShippingFulfillmentAsync(\PWCode\eBaySDK\Fulfillment\Types\GetAShippingFulfillmentRestRequest $request)
    {
        return $this->callOperationAsync('GetAShippingFulfillment', $request);
    }
}