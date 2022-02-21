<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Metadata\Services;

class MetadataService extends \PWCode\eBaySDK\Metadata\Services\MetadataBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetSalesTaxJurisdictions' => [
            'method' => 'GET',
            'resource' => 'country/{countryCode}/sales_tax_jurisdiction',
            'responseClass' => '\PWCode\eBaySDK\Metadata\Types\GetSalesTaxJurisdictionsRestResponse',
            'params' => [
                'countryCode' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetPoliciesForAutoPartsCompatibility' => [
            'method' => 'GET',
            'resource' => 'marketplace/{marketplace_id}/get_automotive_parts_compatibility_policies',
            'responseClass' => '\PWCode\eBaySDK\Metadata\Types\GetPoliciesForAutoPartsCompatibilityRestResponse',
            'params' => [
                'filter' => [
                    'valid' => ['string']
                ],
                'marketplace_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetPoliciesForItemCondition' => [
            'method' => 'GET',
            'resource' => 'marketplace/{marketplace_id}/get_item_condition_policies',
            'responseClass' => '\PWCode\eBaySDK\Metadata\Types\GetPoliciesForItemConditionRestResponse',
            'params' => [
                'filter' => [
                    'valid' => ['string']
                ],
                'marketplace_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetPoliciesForListingStructures' => [
            'method' => 'GET',
            'resource' => 'marketplace/{marketplace_id}/get_listing_structure_policies',
            'responseClass' => '\PWCode\eBaySDK\Metadata\Types\GetPoliciesForListingStructuresRestResponse',
            'params' => [
                'filter' => [
                    'valid' => ['string']
                ],
                'marketplace_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetPoliciesForNegotiatedPrice' => [
            'method' => 'GET',
            'resource' => 'marketplace/{marketplace_id}/get_negotiated_price_policies',
            'responseClass' => '\PWCode\eBaySDK\Metadata\Types\GetPoliciesForNegotiatedPriceRestResponse',
            'params' => [
                'filter' => [
                    'valid' => ['string']
                ],
                'marketplace_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetPoliciesForReturns' => [
            'method' => 'GET',
            'resource' => 'marketplace/{marketplace_id}/get_return_policies',
            'responseClass' => '\PWCode\eBaySDK\Metadata\Types\GetPoliciesForReturnsRestResponse',
            'params' => [
                'filter' => [
                    'valid' => ['string']
                ],
                'marketplace_id' => [
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
     * @param \PWCode\eBaySDK\Metadata\Types\GetSalesTaxJurisdictionsRestRequest $request
     * @return \PWCode\eBaySDK\Metadata\Types\GetSalesTaxJurisdictionsRestResponse
     */
    public function getSalesTaxJurisdictions(\PWCode\eBaySDK\Metadata\Types\GetSalesTaxJurisdictionsRestRequest $request)
    {
        return $this->getSalesTaxJurisdictionsAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Metadata\Types\GetSalesTaxJurisdictionsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSalesTaxJurisdictionsAsync(\PWCode\eBaySDK\Metadata\Types\GetSalesTaxJurisdictionsRestRequest $request)
    {
        return $this->callOperationAsync('GetSalesTaxJurisdictions', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Metadata\Types\GetPoliciesForAutoPartsCompatibilityRestRequest $request
     * @return \PWCode\eBaySDK\Metadata\Types\GetPoliciesForAutoPartsCompatibilityRestResponse
     */
    public function getPoliciesForAutoPartsCompatibility(\PWCode\eBaySDK\Metadata\Types\GetPoliciesForAutoPartsCompatibilityRestRequest $request)
    {
        return $this->getPoliciesForAutoPartsCompatibilityAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Metadata\Types\GetPoliciesForAutoPartsCompatibilityRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPoliciesForAutoPartsCompatibilityAsync(\PWCode\eBaySDK\Metadata\Types\GetPoliciesForAutoPartsCompatibilityRestRequest $request)
    {
        return $this->callOperationAsync('GetPoliciesForAutoPartsCompatibility', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Metadata\Types\GetPoliciesForItemConditionRestRequest $request
     * @return \PWCode\eBaySDK\Metadata\Types\GetPoliciesForItemConditionRestResponse
     */
    public function getPoliciesForItemCondition(\PWCode\eBaySDK\Metadata\Types\GetPoliciesForItemConditionRestRequest $request)
    {
        return $this->getPoliciesForItemConditionAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Metadata\Types\GetPoliciesForItemConditionRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPoliciesForItemConditionAsync(\PWCode\eBaySDK\Metadata\Types\GetPoliciesForItemConditionRestRequest $request)
    {
        return $this->callOperationAsync('GetPoliciesForItemCondition', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Metadata\Types\GetPoliciesForListingStructuresRestRequest $request
     * @return \PWCode\eBaySDK\Metadata\Types\GetPoliciesForListingStructuresRestResponse
     */
    public function getPoliciesForListingStructures(\PWCode\eBaySDK\Metadata\Types\GetPoliciesForListingStructuresRestRequest $request)
    {
        return $this->getPoliciesForListingStructuresAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Metadata\Types\GetPoliciesForListingStructuresRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPoliciesForListingStructuresAsync(\PWCode\eBaySDK\Metadata\Types\GetPoliciesForListingStructuresRestRequest $request)
    {
        return $this->callOperationAsync('GetPoliciesForListingStructures', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Metadata\Types\GetPoliciesForNegotiatedPriceRestRequest $request
     * @return \PWCode\eBaySDK\Metadata\Types\GetPoliciesForNegotiatedPriceRestResponse
     */
    public function getPoliciesForNegotiatedPrice(\PWCode\eBaySDK\Metadata\Types\GetPoliciesForNegotiatedPriceRestRequest $request)
    {
        return $this->getPoliciesForNegotiatedPriceAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Metadata\Types\GetPoliciesForNegotiatedPriceRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPoliciesForNegotiatedPriceAsync(\PWCode\eBaySDK\Metadata\Types\GetPoliciesForNegotiatedPriceRestRequest $request)
    {
        return $this->callOperationAsync('GetPoliciesForNegotiatedPrice', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Metadata\Types\GetPoliciesForReturnsRestRequest $request
     * @return \PWCode\eBaySDK\Metadata\Types\GetPoliciesForReturnsRestResponse
     */
    public function getPoliciesForReturns(\PWCode\eBaySDK\Metadata\Types\GetPoliciesForReturnsRestRequest $request)
    {
        return $this->getPoliciesForReturnsAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Metadata\Types\GetPoliciesForReturnsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPoliciesForReturnsAsync(\PWCode\eBaySDK\Metadata\Types\GetPoliciesForReturnsRestRequest $request)
    {
        return $this->callOperationAsync('GetPoliciesForReturns', $request);
    }
}
