<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Feedback\Services;

class FeedbackService extends \PWCode\eBaySDK\Feedback\Services\FeedbackBaseService
{
    const API_VERSION = '1.2.2';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryByTransactionRequest $request
     * @return \PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryResponse
     */
    public function createDSRSummaryByTransaction(\PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryByTransactionRequest $request)
    {
        return $this->createDSRSummaryByTransactionAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryByTransactionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDSRSummaryByTransactionAsync(\PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryByTransactionRequest $request)
    {
        return $this->callOperationAsync(
            'createDSRSummaryByTransaction',
            $request,
            '\PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryByPeriodRequest $request
     * @return \PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryResponse
     */
    public function createDSRSummaryByPeriod(\PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryByPeriodRequest $request)
    {
        return $this->createDSRSummaryByPeriodAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryByPeriodRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDSRSummaryByPeriodAsync(\PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryByPeriodRequest $request)
    {
        return $this->callOperationAsync(
            'createDSRSummaryByPeriod',
            $request,
            '\PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryByCategoryRequest $request
     * @return \PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryResponse
     */
    public function createDSRSummaryByCategory(\PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryByCategoryRequest $request)
    {
        return $this->createDSRSummaryByCategoryAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryByCategoryRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDSRSummaryByCategoryAsync(\PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryByCategoryRequest $request)
    {
        return $this->callOperationAsync(
            'createDSRSummaryByCategory',
            $request,
            '\PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryByShippingDetailRequest $request
     * @return \PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryResponse
     */
    public function createDSRSummaryByShippingDetail(\PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryByShippingDetailRequest $request)
    {
        return $this->createDSRSummaryByShippingDetailAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryByShippingDetailRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDSRSummaryByShippingDetailAsync(\PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryByShippingDetailRequest $request)
    {
        return $this->callOperationAsync(
            'createDSRSummaryByShippingDetail',
            $request,
            '\PWCode\eBaySDK\Feedback\Types\CreateDSRSummaryResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\Feedback\Types\GetDSRSummaryRequest $request
     * @return \PWCode\eBaySDK\Feedback\Types\GetDSRSummaryResponse
     */
    public function getDSRSummary(\PWCode\eBaySDK\Feedback\Types\GetDSRSummaryRequest $request)
    {
        return $this->getDSRSummaryAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\Feedback\Types\GetDSRSummaryRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDSRSummaryAsync(\PWCode\eBaySDK\Feedback\Types\GetDSRSummaryRequest $request)
    {
        return $this->callOperationAsync(
            'getDSRSummary',
            $request,
            '\PWCode\eBaySDK\Feedback\Types\GetDSRSummaryResponse'
        );
    }
}
