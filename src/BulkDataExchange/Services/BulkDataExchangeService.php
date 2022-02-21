<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\BulkDataExchange\Services;

class BulkDataExchangeService extends \PWCode\eBaySDK\BulkDataExchange\Services\BulkDataExchangeBaseService
{
    const API_VERSION = '1.5.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\CreateUploadJobRequest $request
     * @return \PWCode\eBaySDK\BulkDataExchange\Types\CreateUploadJobResponse
     */
    public function createUploadJob(\PWCode\eBaySDK\BulkDataExchange\Types\CreateUploadJobRequest $request)
    {
        return $this->createUploadJobAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\CreateUploadJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createUploadJobAsync(\PWCode\eBaySDK\BulkDataExchange\Types\CreateUploadJobRequest $request)
    {
        return $this->callOperationAsync(
            'createUploadJob',
            $request,
            '\PWCode\eBaySDK\BulkDataExchange\Types\CreateUploadJobResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\StartUploadJobRequest $request
     * @return \PWCode\eBaySDK\BulkDataExchange\Types\StartUploadJobResponse
     */
    public function startUploadJob(\PWCode\eBaySDK\BulkDataExchange\Types\StartUploadJobRequest $request)
    {
        return $this->startUploadJobAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\StartUploadJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function startUploadJobAsync(\PWCode\eBaySDK\BulkDataExchange\Types\StartUploadJobRequest $request)
    {
        return $this->callOperationAsync(
            'startUploadJob',
            $request,
            '\PWCode\eBaySDK\BulkDataExchange\Types\StartUploadJobResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\AbortJobRequest $request
     * @return \PWCode\eBaySDK\BulkDataExchange\Types\AbortJobResponse
     */
    public function abortJob(\PWCode\eBaySDK\BulkDataExchange\Types\AbortJobRequest $request)
    {
        return $this->abortJobAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\AbortJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function abortJobAsync(\PWCode\eBaySDK\BulkDataExchange\Types\AbortJobRequest $request)
    {
        return $this->callOperationAsync(
            'abortJob',
            $request,
            '\PWCode\eBaySDK\BulkDataExchange\Types\AbortJobResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\GetJobsRequest $request
     * @return \PWCode\eBaySDK\BulkDataExchange\Types\GetJobsResponse
     */
    public function getJobs(\PWCode\eBaySDK\BulkDataExchange\Types\GetJobsRequest $request)
    {
        return $this->getJobsAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\GetJobsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getJobsAsync(\PWCode\eBaySDK\BulkDataExchange\Types\GetJobsRequest $request)
    {
        return $this->callOperationAsync(
            'getJobs',
            $request,
            '\PWCode\eBaySDK\BulkDataExchange\Types\GetJobsResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\GetJobStatusRequest $request
     * @return \PWCode\eBaySDK\BulkDataExchange\Types\GetJobStatusResponse
     */
    public function getJobStatus(\PWCode\eBaySDK\BulkDataExchange\Types\GetJobStatusRequest $request)
    {
        return $this->getJobStatusAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\GetJobStatusRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getJobStatusAsync(\PWCode\eBaySDK\BulkDataExchange\Types\GetJobStatusRequest $request)
    {
        return $this->callOperationAsync(
            'getJobStatus',
            $request,
            '\PWCode\eBaySDK\BulkDataExchange\Types\GetJobStatusResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\StartDownloadJobRequest $request
     * @return \PWCode\eBaySDK\BulkDataExchange\Types\StartDownloadJobResponse
     */
    public function startDownloadJob(\PWCode\eBaySDK\BulkDataExchange\Types\StartDownloadJobRequest $request)
    {
        return $this->startDownloadJobAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\StartDownloadJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function startDownloadJobAsync(\PWCode\eBaySDK\BulkDataExchange\Types\StartDownloadJobRequest $request)
    {
        return $this->callOperationAsync(
            'startDownloadJob',
            $request,
            '\PWCode\eBaySDK\BulkDataExchange\Types\StartDownloadJobResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\CreateRecurringJobRequest $request
     * @return \PWCode\eBaySDK\BulkDataExchange\Types\CreateRecurringJobResponse
     */
    public function createRecurringJob(\PWCode\eBaySDK\BulkDataExchange\Types\CreateRecurringJobRequest $request)
    {
        return $this->createRecurringJobAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\CreateRecurringJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createRecurringJobAsync(\PWCode\eBaySDK\BulkDataExchange\Types\CreateRecurringJobRequest $request)
    {
        return $this->callOperationAsync(
            'createRecurringJob',
            $request,
            '\PWCode\eBaySDK\BulkDataExchange\Types\CreateRecurringJobResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobRequest $request
     * @return \PWCode\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobResponse
     */
    public function deleteRecurringJob(\PWCode\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobRequest $request)
    {
        return $this->deleteRecurringJobAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteRecurringJobAsync(\PWCode\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobRequest $request)
    {
        return $this->callOperationAsync(
            'deleteRecurringJob',
            $request,
            '\PWCode\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\GetRecurringJobsRequest $request
     * @return \PWCode\eBaySDK\BulkDataExchange\Types\GetRecurringJobsResponse
     */
    public function getRecurringJobs(\PWCode\eBaySDK\BulkDataExchange\Types\GetRecurringJobsRequest $request)
    {
        return $this->getRecurringJobsAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\GetRecurringJobsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRecurringJobsAsync(\PWCode\eBaySDK\BulkDataExchange\Types\GetRecurringJobsRequest $request)
    {
        return $this->callOperationAsync(
            'getRecurringJobs',
            $request,
            '\PWCode\eBaySDK\BulkDataExchange\Types\GetRecurringJobsResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusRequest $request
     * @return \PWCode\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusResponse
     */
    public function getRecurringJobExecutionStatus(\PWCode\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusRequest $request)
    {
        return $this->getRecurringJobExecutionStatusAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRecurringJobExecutionStatusAsync(\PWCode\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusRequest $request)
    {
        return $this->callOperationAsync(
            'getRecurringJobExecutionStatus',
            $request,
            '\PWCode\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryRequest $request
     * @return \PWCode\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryResponse
     */
    public function getRecurringJobExecutionHistory(\PWCode\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryRequest $request)
    {
        return $this->getRecurringJobExecutionHistoryAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRecurringJobExecutionHistoryAsync(\PWCode\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryRequest $request)
    {
        return $this->callOperationAsync(
            'getRecurringJobExecutionHistory',
            $request,
            '\PWCode\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobRequest $request
     * @return \PWCode\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobResponse
     */
    public function activateRecurringJob(\PWCode\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobRequest $request)
    {
        return $this->activateRecurringJobAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function activateRecurringJobAsync(\PWCode\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobRequest $request)
    {
        return $this->callOperationAsync(
            'activateRecurringJob',
            $request,
            '\PWCode\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobRequest $request
     * @return \PWCode\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobResponse
     */
    public function suspendRecurringJob(\PWCode\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobRequest $request)
    {
        return $this->suspendRecurringJobAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function suspendRecurringJobAsync(\PWCode\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobRequest $request)
    {
        return $this->callOperationAsync(
            'suspendRecurringJob',
            $request,
            '\PWCode\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionRequest $request
     * @return \PWCode\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionResponse
     */
    public function abortRecurringJobExecution(\PWCode\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionRequest $request)
    {
        return $this->abortRecurringJobExecutionAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function abortRecurringJobExecutionAsync(\PWCode\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionRequest $request)
    {
        return $this->callOperationAsync(
            'abortRecurringJobExecution',
            $request,
            '\PWCode\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionResponse'
        );
    }
}
