<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\FileTransfer\Services;

class FileTransferService extends \PWCode\eBaySDK\FileTransfer\Services\FileTransferBaseService
{
    const API_VERSION = '1.1.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \PWCode\eBaySDK\FileTransfer\Types\UploadFileRequest $request
     * @return \PWCode\eBaySDK\FileTransfer\Types\UploadFileResponse
     */
    public function uploadFile(\PWCode\eBaySDK\FileTransfer\Types\UploadFileRequest $request)
    {
        return $this->uploadFileAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\FileTransfer\Types\UploadFileRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadFileAsync(\PWCode\eBaySDK\FileTransfer\Types\UploadFileRequest $request)
    {
        return $this->callOperationAsync(
            'uploadFile',
            $request,
            '\PWCode\eBaySDK\FileTransfer\Types\UploadFileResponse'
        );
    }

    /**
     * @param \PWCode\eBaySDK\FileTransfer\Types\DownloadFileRequest $request
     * @return \PWCode\eBaySDK\FileTransfer\Types\DownloadFileResponse
     */
    public function downloadFile(\PWCode\eBaySDK\FileTransfer\Types\DownloadFileRequest $request)
    {
        return $this->downloadFileAsync($request)->wait();
    }

    /**
     * @param \PWCode\eBaySDK\FileTransfer\Types\DownloadFileRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function downloadFileAsync(\PWCode\eBaySDK\FileTransfer\Types\DownloadFileRequest $request)
    {
        return $this->callOperationAsync(
            'downloadFile',
            $request,
            '\PWCode\eBaySDK\FileTransfer\Types\DownloadFileResponse'
        );
    }
}