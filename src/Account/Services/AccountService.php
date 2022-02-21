<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Account\Services;

class AccountService extends \PWCode\eBaySDK\Account\Services\AccountBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'CreateAFulfillmentPolicy' => [
            'method' => 'POST',
            'resource' => 'fulfillment_policy',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestResponse',
            'params' => [
            ]
        ],
        'DeleteAFulfillmentPolicy' => [
            'method' => 'DELETE',
            'resource' => 'fulfillment_policy/{fulfillmentPolicyId}',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\DeleteAFulfillmentPolicyRestResponse',
            'params' => [
                'fulfillmentPolicyId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetFulfillmentPoliciesByMarketplace' => [
            'method' => 'GET',
            'resource' => 'fulfillment_policy',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\GetFulfillmentPoliciesByMarketplaceRestResponse',
            'params' => [
                'marketplace_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAFulfillmentPolicyByID' => [
            'method' => 'GET',
            'resource' => 'fulfillment_policy/{fulfillmentPolicyId}',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\GetAFulfillmentPolicyByIDRestResponse',
            'params' => [
                'fulfillmentPolicyId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAFulfillmentPolicyByName' => [
            'method' => 'GET',
            'resource' => 'fulfillment_policy/get_by_policy_name',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\GetAFulfillmentPolicyByNameRestResponse',
            'params' => [
                'marketplace_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'name' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateAFulfillmentPolicy' => [
            'method' => 'PUT',
            'resource' => 'fulfillment_policy/{fulfillmentPolicyId}',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestResponse',
            'params' => [
                'fulfillmentPolicyId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'CreateAPaymentPolicy' => [
            'method' => 'POST',
            'resource' => 'payment_policy',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\CreateAPaymentPolicyRestResponse',
            'params' => [
            ]
        ],
        'DeleteAPaymentPolicy' => [
            'method' => 'DELETE',
            'resource' => 'payment_policy/{payment_policy_id}',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\DeleteAPaymentPolicyRestResponse',
            'params' => [
                'payment_policy_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetPaymentPoliciesByMarketplace' => [
            'method' => 'GET',
            'resource' => 'payment_policy',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\GetPaymentPoliciesByMarketplaceRestResponse',
            'params' => [
                'marketplace_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAPaymentPolicyByID' => [
            'method' => 'GET',
            'resource' => 'payment_policy/{paymentPolicyId}',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestResponse',
            'params' => [
                'paymentPolicyId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAPaymentPolicyByName' => [
            'method' => 'GET',
            'resource' => 'payment_policy/get_by_policy_name',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\GetAPaymentPolicyByNameRestResponse',
            'params' => [
                'marketplace_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'name' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateAPaymentPolicy' => [
            'method' => 'PUT',
            'resource' => 'payment_policy/{payment_policy_id}',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\UpdateAPaymentPolicyRestResponse',
            'params' => [
                'payment_policy_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAccountPrivileges' => [
            'method' => 'GET',
            'resource' => 'privilege',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\GetAccountPrivilegesRestResponse',
            'params' => [
            ]
        ],
        'GetOptedInPrograms' => [
            'method' => 'GET',
            'resource' => 'program/get_opted_in_programs',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\GetOptedInProgramsRestResponse',
            'params' => [
            ]
        ],
        'OptInToProgram' => [
            'method' => 'POST',
            'resource' => 'program/opt_in',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\OptInToProgramRestResponse',
            'params' => [
            ]
        ],
        'OptOutOfProgram' => [
            'method' => 'POST',
            'resource' => 'program/opt_out',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\OptOutOfProgramRestResponse',
            'params' => [
            ]
        ],
        'GetShippingRateTables' => [
            'method' => 'POST',
            'resource' => 'rate_table',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\GetShippingRateTablesRestResponse',
            'params' => [
                'country_code' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'CreateAReturnPolicy' => [
            'method' => 'POST',
            'resource' => 'return_policy',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\CreateAReturnPolicyRestResponse',
            'params' => [
            ]
        ],
        'DeleteAReturnPolicy' => [
            'method' => 'DELETE',
            'resource' => 'return_policy/{return_policy_id}',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\DeleteAReturnPolicyRestResponse',
            'params' => [
                'return_policy_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetReturnPoliciesByMarketplace' => [
            'method' => 'GET',
            'resource' => 'return_policy',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\GetReturnPoliciesByMarketplaceRestResponse',
            'params' => [
                'marketplace_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAReturnPolicyByID' => [
            'method' => 'GET',
            'resource' => 'return_policy/{returnPolicyId}',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\GetAReturnPolicyByIDRestResponse',
            'params' => [
                'returnPolicyId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAReturnPolicyByName' => [
            'method' => 'GET',
            'resource' => 'return_policy/get_by_policy_name',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\GetAReturnPolicyByNameRestResponse',
            'params' => [
                'marketplace_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'name' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateAReturnPolicy' => [
            'method' => 'PUT',
            'resource' => 'return_policy/{return_policy_id}',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\UpdateAReturnPolicyRestResponse',
            'params' => [
                'return_policy_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'CreateASalesTaxTable' => [
            'method' => 'PUT',
            'resource' => 'sales_tax/{countryCode}/{jurisdictionId}',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\CreateASalesTaxTableRestResponse',
            'params' => [
                'countryCode' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'jurisdictionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'DeleteASalesTaxTable' => [
            'method' => 'DELETE',
            'resource' => 'sales_tax/{countryCode}/{jurisdictionId}',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\DeleteASalesTaxTableRestResponse',
            'params' => [
                'countryCode' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'jurisdictionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetASalesTaxTable' => [
            'method' => 'GET',
            'resource' => 'sales_tax/{countryCode}/{jurisdictionId}',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\GetASalesTaxTableRestResponse',
            'params' => [
                'countryCode' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'jurisdictionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetAllSalesTaxTables' => [
            'method' => 'GET',
            'resource' => 'sales_tax',
            'responseClass' => '\PWCode\eBaySDK\Account\Types\GetAllSalesTaxTablesRestResponse',
            'params' => [
                'country_code' => [
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
     * @param \PWCode\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestResponse
     */
    public function createAFulfillmentPolicy(\PWCode\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestRequest $request)
    {
        return $this->createAFulfillmentPolicyAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAFulfillmentPolicyAsync(\PWCode\eBaySDK\Account\Types\CreateAFulfillmentPolicyRestRequest $request)
    {
        return $this->callOperationAsync('CreateAFulfillmentPolicy', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\DeleteAFulfillmentPolicyRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\DeleteAFulfillmentPolicyRestResponse
     */
    public function deleteAFulfillmentPolicy(\PWCode\eBaySDK\Account\Types\DeleteAFulfillmentPolicyRestRequest $request)
    {
        return $this->deleteAFulfillmentPolicyAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\DeleteAFulfillmentPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAFulfillmentPolicyAsync(\PWCode\eBaySDK\Account\Types\DeleteAFulfillmentPolicyRestRequest $request)
    {
        return $this->callOperationAsync('DeleteAFulfillmentPolicy', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetFulfillmentPoliciesByMarketplaceRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\GetFulfillmentPoliciesByMarketplaceRestResponse
     */
    public function getFulfillmentPoliciesByMarketplace(\PWCode\eBaySDK\Account\Types\GetFulfillmentPoliciesByMarketplaceRestRequest $request)
    {
        return $this->getFulfillmentPoliciesByMarketplaceAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetFulfillmentPoliciesByMarketplaceRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFulfillmentPoliciesByMarketplaceAsync(\PWCode\eBaySDK\Account\Types\GetFulfillmentPoliciesByMarketplaceRestRequest $request)
    {
        return $this->callOperationAsync('GetFulfillmentPoliciesByMarketplace', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetAFulfillmentPolicyByIDRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\GetAFulfillmentPolicyByIDRestResponse
     */
    public function getAFulfillmentPolicyByID(\PWCode\eBaySDK\Account\Types\GetAFulfillmentPolicyByIDRestRequest $request)
    {
        return $this->getAFulfillmentPolicyByIDAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetAFulfillmentPolicyByIDRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAFulfillmentPolicyByIDAsync(\PWCode\eBaySDK\Account\Types\GetAFulfillmentPolicyByIDRestRequest $request)
    {
        return $this->callOperationAsync('GetAFulfillmentPolicyByID', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetAFulfillmentPolicyByNameRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\GetAFulfillmentPolicyByNameRestResponse
     */
    public function getAFulfillmentPolicyByName(\PWCode\eBaySDK\Account\Types\GetAFulfillmentPolicyByNameRestRequest $request)
    {
        return $this->getAFulfillmentPolicyByNameAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetAFulfillmentPolicyByNameRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAFulfillmentPolicyByNameAsync(\PWCode\eBaySDK\Account\Types\GetAFulfillmentPolicyByNameRestRequest $request)
    {
        return $this->callOperationAsync('GetAFulfillmentPolicyByName', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestResponse
     */
    public function updateAFulfillmentPolicy(\PWCode\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestRequest $request)
    {
        return $this->updateAFulfillmentPolicyAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAFulfillmentPolicyAsync(\PWCode\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestRequest $request)
    {
        return $this->callOperationAsync('UpdateAFulfillmentPolicy', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\CreateAPaymentPolicyRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\CreateAPaymentPolicyRestResponse
     */
    public function createAPaymentPolicy(\PWCode\eBaySDK\Account\Types\CreateAPaymentPolicyRestRequest $request)
    {
        return $this->createAPaymentPolicyAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\CreateAPaymentPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAPaymentPolicyAsync(\PWCode\eBaySDK\Account\Types\CreateAPaymentPolicyRestRequest $request)
    {
        return $this->callOperationAsync('CreateAPaymentPolicy', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\DeleteAPaymentPolicyRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\DeleteAPaymentPolicyRestResponse
     */
    public function deleteAPaymentPolicy(\PWCode\eBaySDK\Account\Types\DeleteAPaymentPolicyRestRequest $request)
    {
        return $this->deleteAPaymentPolicyAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\DeleteAPaymentPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAPaymentPolicyAsync(\PWCode\eBaySDK\Account\Types\DeleteAPaymentPolicyRestRequest $request)
    {
        return $this->callOperationAsync('DeleteAPaymentPolicy', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetPaymentPoliciesByMarketplaceRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\GetPaymentPoliciesByMarketplaceRestResponse
     */
    public function getPaymentPoliciesByMarketplace(\PWCode\eBaySDK\Account\Types\GetPaymentPoliciesByMarketplaceRestRequest $request)
    {
        return $this->getPaymentPoliciesByMarketplaceAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetPaymentPoliciesByMarketplaceRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentPoliciesByMarketplaceAsync(\PWCode\eBaySDK\Account\Types\GetPaymentPoliciesByMarketplaceRestRequest $request)
    {
        return $this->callOperationAsync('GetPaymentPoliciesByMarketplace', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestResponse
     */
    public function getAPaymentPolicyByID(\PWCode\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestRequest $request)
    {
        return $this->getAPaymentPolicyByIDAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAPaymentPolicyByIDAsync(\PWCode\eBaySDK\Account\Types\GetAPaymentPolicyByIDRestRequest $request)
    {
        return $this->callOperationAsync('GetAPaymentPolicyByID', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetAPaymentPolicyByNameRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\GetAPaymentPolicyByNameRestResponse
     */
    public function getAPaymentPolicyByName(\PWCode\eBaySDK\Account\Types\GetAPaymentPolicyByNameRestRequest $request)
    {
        return $this->getAPaymentPolicyByNameAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetAPaymentPolicyByNameRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAPaymentPolicyByNameAsync(\PWCode\eBaySDK\Account\Types\GetAPaymentPolicyByNameRestRequest $request)
    {
        return $this->callOperationAsync('GetAPaymentPolicyByName', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\UpdateAPaymentPolicyRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\UpdateAPaymentPolicyRestResponse
     */
    public function updateAPaymentPolicy(\PWCode\eBaySDK\Account\Types\UpdateAPaymentPolicyRestRequest $request)
    {
        return $this->updateAPaymentPolicyAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\UpdateAPaymentPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAPaymentPolicyAsync(\PWCode\eBaySDK\Account\Types\UpdateAPaymentPolicyRestRequest $request)
    {
        return $this->callOperationAsync('UpdateAPaymentPolicy', $request);
    }

    /**
     * @return \PWCode\eBaySDK\Account\Types\GetAccountPrivilegesRestResponse
     */
    public function getAccountPrivileges()
    {
        return $this->getAccountPrivilegesAsync()->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAccountPrivilegesAsync()
    {
        return $this->callOperationAsync('GetAccountPrivileges');
    }

    /**
     * @return \PWCode\eBaySDK\Account\Types\GetOptedInProgramsRestResponse
     */
    public function getOptedInPrograms()
    {
        return $this->getOptedInProgramsAsync()->wait();
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOptedInProgramsAsync()
    {
        return $this->callOperationAsync('GetOptedInPrograms');
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\OptInToProgramRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\OptInToProgramRestResponse
     */
    public function optInToProgram(\PWCode\eBaySDK\Account\Types\OptInToProgramRestRequest $request)
    {
        return $this->optInToProgramAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\OptInToProgramRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function optInToProgramAsync(\PWCode\eBaySDK\Account\Types\OptInToProgramRestRequest $request)
    {
        return $this->callOperationAsync('OptInToProgram', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\OptOutOfProgramRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\OptOutOfProgramRestResponse
     */
    public function optOutOfProgram(\PWCode\eBaySDK\Account\Types\OptOutOfProgramRestRequest $request)
    {
        return $this->optOutOfProgramAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\OptOutOfProgramRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function optOutOfProgramAsync(\PWCode\eBaySDK\Account\Types\OptOutOfProgramRestRequest $request)
    {
        return $this->callOperationAsync('OptOutOfProgram', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetShippingRateTablesRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\GetShippingRateTablesRestResponse
     */
    public function getShippingRateTables(\PWCode\eBaySDK\Account\Types\GetShippingRateTablesRestRequest $request)
    {
        return $this->getShippingRateTablesAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetShippingRateTablesRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShippingRateTablesAsync(\PWCode\eBaySDK\Account\Types\GetShippingRateTablesRestRequest $request)
    {
        return $this->callOperationAsync('GetShippingRateTables', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\CreateAReturnPolicyRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\CreateAReturnPolicyRestResponse
     */
    public function createAReturnPolicy(\PWCode\eBaySDK\Account\Types\CreateAReturnPolicyRestRequest $request)
    {
        return $this->createAReturnPolicyAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\CreateAReturnPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createAReturnPolicyAsync(\PWCode\eBaySDK\Account\Types\CreateAReturnPolicyRestRequest $request)
    {
        return $this->callOperationAsync('CreateAReturnPolicy', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\DeleteAReturnPolicyRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\DeleteAReturnPolicyRestResponse
     */
    public function deleteAReturnPolicy(\PWCode\eBaySDK\Account\Types\DeleteAReturnPolicyRestRequest $request)
    {
        return $this->deleteAReturnPolicyAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\DeleteAReturnPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteAReturnPolicyAsync(\PWCode\eBaySDK\Account\Types\DeleteAReturnPolicyRestRequest $request)
    {
        return $this->callOperationAsync('DeleteAReturnPolicy', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetReturnPoliciesByMarketplaceRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\GetReturnPoliciesByMarketplaceRestResponse
     */
    public function getReturnPoliciesByMarketplace(\PWCode\eBaySDK\Account\Types\GetReturnPoliciesByMarketplaceRestRequest $request)
    {
        return $this->getReturnPoliciesByMarketplaceAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetReturnPoliciesByMarketplaceRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReturnPoliciesByMarketplaceAsync(\PWCode\eBaySDK\Account\Types\GetReturnPoliciesByMarketplaceRestRequest $request)
    {
        return $this->callOperationAsync('GetReturnPoliciesByMarketplace', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetAReturnPolicyByIDRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\GetAReturnPolicyByIDRestResponse
     */
    public function getAReturnPolicyByID(\PWCode\eBaySDK\Account\Types\GetAReturnPolicyByIDRestRequest $request)
    {
        return $this->getAReturnPolicyByIDAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetAReturnPolicyByIDRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAReturnPolicyByIDAsync(\PWCode\eBaySDK\Account\Types\GetAReturnPolicyByIDRestRequest $request)
    {
        return $this->callOperationAsync('GetAReturnPolicyByID', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetAReturnPolicyByNameRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\GetAReturnPolicyByNameRestResponse
     */
    public function getAReturnPolicyByName(\PWCode\eBaySDK\Account\Types\GetAReturnPolicyByNameRestRequest $request)
    {
        return $this->getAReturnPolicyByNameAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetAReturnPolicyByNameRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAReturnPolicyByNameAsync(\PWCode\eBaySDK\Account\Types\GetAReturnPolicyByNameRestRequest $request)
    {
        return $this->callOperationAsync('GetAReturnPolicyByName', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\UpdateAReturnPolicyRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\UpdateAReturnPolicyRestResponse
     */
    public function updateAReturnPolicy(\PWCode\eBaySDK\Account\Types\UpdateAReturnPolicyRestRequest $request)
    {
        return $this->updateAReturnPolicyAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\UpdateAReturnPolicyRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateAReturnPolicyAsync(\PWCode\eBaySDK\Account\Types\UpdateAReturnPolicyRestRequest $request)
    {
        return $this->callOperationAsync('UpdateAReturnPolicy', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\CreateASalesTaxTableRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\CreateASalesTaxTableRestResponse
     */
    public function createASalesTaxTable(\PWCode\eBaySDK\Account\Types\CreateASalesTaxTableRestRequest $request)
    {
        return $this->createASalesTaxTableAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\CreateASalesTaxTableRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createASalesTaxTableAsync(\PWCode\eBaySDK\Account\Types\CreateASalesTaxTableRestRequest $request)
    {
        return $this->callOperationAsync('CreateASalesTaxTable', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\DeleteASalesTaxTableRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\DeleteASalesTaxTableRestResponse
     */
    public function deleteASalesTaxTable(\PWCode\eBaySDK\Account\Types\DeleteASalesTaxTableRestRequest $request)
    {
        return $this->deleteASalesTaxTableAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\DeleteASalesTaxTableRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteASalesTaxTableAsync(\PWCode\eBaySDK\Account\Types\DeleteASalesTaxTableRestRequest $request)
    {
        return $this->callOperationAsync('DeleteASalesTaxTable', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetASalesTaxTableRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\GetASalesTaxTableRestResponse
     */
    public function getASalesTaxTable(\PWCode\eBaySDK\Account\Types\GetASalesTaxTableRestRequest $request)
    {
        return $this->getASalesTaxTableAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetASalesTaxTableRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getASalesTaxTableAsync(\PWCode\eBaySDK\Account\Types\GetASalesTaxTableRestRequest $request)
    {
        return $this->callOperationAsync('GetASalesTaxTable', $request);
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetAllSalesTaxTablesRestRequest $request
     * @return \PWCode\eBaySDK\Account\Types\GetAllSalesTaxTablesRestResponse
     */
    public function getAllSalesTaxTables(\PWCode\eBaySDK\Account\Types\GetAllSalesTaxTablesRestRequest $request)
    {
        return $this->getAllSalesTaxTablesAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Account\Types\GetAllSalesTaxTablesRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllSalesTaxTablesAsync(\PWCode\eBaySDK\Account\Types\GetAllSalesTaxTablesRestRequest $request)
    {
        return $this->callOperationAsync('GetAllSalesTaxTables', $request);
    }
}
