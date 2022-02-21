<?php
require __DIR__ . '/artifacts/ebay-sdk-php.phar';

$sdk = new \PWCode\eBaySDK\Sdk();

$trading = new \PWCode\eBaySDK\Trading\Services\TradingService([
    'siteId'      => 0,
    'credentials' => [
        'appId'  => 'secret',
        'certId' => 'secret',
        'devId'  => 'secret'
    ]
]);

echo 'Version=' . \PWCode\eBaySDK\Sdk::VERSION;
