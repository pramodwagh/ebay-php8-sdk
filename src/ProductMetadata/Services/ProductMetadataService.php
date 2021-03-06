<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\ProductMetadata\Services;

class ProductMetadataService extends \PWCode\eBaySDK\ProductMetadata\Services\ProductMetadataBaseService
{
    const API_VERSION = '1.3.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchNamesRequest $request
     * @return \PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchNamesResponse
     */
    public function getProductSearchNames(\PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchNamesRequest $request)
    {
        return $this->getProductSearchNamesAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchNamesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductSearchNamesAsync(\PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchNamesRequest $request)
    {
        return $this->callOperationAsync(
            'getProductSearchNames',
            $request,
            '\PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchNamesResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchNamesRequest $request
     * @return \PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchNamesResponse
     */
    public function getCompatibilitySearchNames(\PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchNamesRequest $request)
    {
        return $this->getCompatibilitySearchNamesAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchNamesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCompatibilitySearchNamesAsync(\PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchNamesRequest $request)
    {
        return $this->callOperationAsync(
            'getCompatibilitySearchNames',
            $request,
            '\PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchNamesResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchValuesRequest $request
     * @return \PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchValuesResponse
     */
    public function getProductSearchValues(\PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchValuesRequest $request)
    {
        return $this->getProductSearchValuesAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchValuesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductSearchValuesAsync(\PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchValuesRequest $request)
    {
        return $this->callOperationAsync(
            'getProductSearchValues',
            $request,
            '\PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchValuesResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBulkRequest $request
     * @return \PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBulkResponse
     */
    public function getProductSearchValuesBulk(\PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBulkRequest $request)
    {
        return $this->getProductSearchValuesBulkAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBulkRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductSearchValuesBulkAsync(\PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBulkRequest $request)
    {
        return $this->callOperationAsync(
            'getProductSearchValuesBulk',
            $request,
            '\PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBulkResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesRequest $request
     * @return \PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesResponse
     */
    public function getCompatibilitySearchValues(\PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesRequest $request)
    {
        return $this->getCompatibilitySearchValuesAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCompatibilitySearchValuesAsync(\PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesRequest $request)
    {
        return $this->callOperationAsync(
            'getCompatibilitySearchValues',
            $request,
            '\PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesBulkRequest $request
     * @return \PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesBulkResponse
     */
    public function getCompatibilitySearchValuesBulk(\PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesBulkRequest $request)
    {
        return $this->getCompatibilitySearchValuesBulkAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesBulkRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCompatibilitySearchValuesBulkAsync(\PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesBulkRequest $request)
    {
        return $this->callOperationAsync(
            'getCompatibilitySearchValuesBulk',
            $request,
            '\PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesBulkResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchDataVersionRequest $request
     * @return \PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchDataVersionResponse
     */
    public function getProductSearchDataVersion(\PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchDataVersionRequest $request)
    {
        return $this->getProductSearchDataVersionAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchDataVersionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductSearchDataVersionAsync(\PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchDataVersionRequest $request)
    {
        return $this->callOperationAsync(
            'getProductSearchDataVersion',
            $request,
            '\PWCode\eBaySDK\ProductMetadata\Types\GetProductSearchDataVersionResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchDataVersionRequest $request
     * @return \PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchDataVersionResponse
     */
    public function getCompatibilitySearchDataVersion(\PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchDataVersionRequest $request)
    {
        return $this->getCompatibilitySearchDataVersionAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchDataVersionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCompatibilitySearchDataVersionAsync(\PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchDataVersionRequest $request)
    {
        return $this->callOperationAsync(
            'getCompatibilitySearchDataVersion',
            $request,
            '\PWCode\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchDataVersionResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\ProductMetadata\Types\ProductMetadataBulkRequest $request
     * @return \PWCode\eBaySDK\ProductMetadata\Types\ProductMetadataBulkResponse
     */
    public function getProductMetadataBulk(\PWCode\eBaySDK\ProductMetadata\Types\ProductMetadataBulkRequest $request)
    {
        return $this->getProductMetadataBulkAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\ProductMetadata\Types\ProductMetadataBulkRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductMetadataBulkAsync(\PWCode\eBaySDK\ProductMetadata\Types\ProductMetadataBulkRequest $request)
    {
        return $this->callOperationAsync(
            'getProductMetadataBulk',
            $request,
            '\PWCode\eBaySDK\ProductMetadata\Types\ProductMetadataBulkResponse'
        );
    }
}
