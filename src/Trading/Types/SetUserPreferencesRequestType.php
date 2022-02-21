<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Trading\Types;

/**
 *
 * @property \PWCode\eBaySDK\Trading\Types\BidderNoticePreferencesType $BidderNoticePreferences
 * @property \PWCode\eBaySDK\Trading\Types\CombinedPaymentPreferencesType $CombinedPaymentPreferences
 * @property \PWCode\eBaySDK\Trading\Types\SellerPaymentPreferencesType $SellerPaymentPreferences
 * @property \PWCode\eBaySDK\Trading\Types\SellerFavoriteItemPreferencesType $SellerFavoriteItemPreferences
 * @property \PWCode\eBaySDK\Trading\Types\EndOfAuctionEmailPreferencesType $EndOfAuctionEmailPreferences
 * @property boolean $EmailShipmentTrackingNumberPreference
 * @property boolean $RequiredShipPhoneNumberPreference
 * @property \PWCode\eBaySDK\Trading\Types\UnpaidItemAssistancePreferencesType $UnpaidItemAssistancePreferences
 * @property \PWCode\eBaySDK\Trading\Types\PurchaseReminderEmailPreferencesType $PurchaseReminderEmailPreferences
 * @property \PWCode\eBaySDK\Trading\Types\DispatchCutoffTimePreferencesType $DispatchCutoffTimePreference
 * @property boolean $GlobalShippingProgramListingPreference
 * @property boolean $OverrideGSPserviceWithIntlService
 * @property boolean $OutOfStockControlPreference
 */
class SetUserPreferencesRequestType extends \PWCode\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BidderNoticePreferences' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\BidderNoticePreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidderNoticePreferences'
        ],
        'CombinedPaymentPreferences' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\CombinedPaymentPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CombinedPaymentPreferences'
        ],
        'SellerPaymentPreferences' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\SellerPaymentPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerPaymentPreferences'
        ],
        'SellerFavoriteItemPreferences' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\SellerFavoriteItemPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerFavoriteItemPreferences'
        ],
        'EndOfAuctionEmailPreferences' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\EndOfAuctionEmailPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndOfAuctionEmailPreferences'
        ],
        'EmailShipmentTrackingNumberPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EmailShipmentTrackingNumberPreference'
        ],
        'RequiredShipPhoneNumberPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RequiredShipPhoneNumberPreference'
        ],
        'UnpaidItemAssistancePreferences' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\UnpaidItemAssistancePreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UnpaidItemAssistancePreferences'
        ],
        'PurchaseReminderEmailPreferences' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\PurchaseReminderEmailPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PurchaseReminderEmailPreferences'
        ],
        'DispatchCutoffTimePreference' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\DispatchCutoffTimePreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DispatchCutoffTimePreference'
        ],
        'GlobalShippingProgramListingPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GlobalShippingProgramListingPreference'
        ],
        'OverrideGSPserviceWithIntlService' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OverrideGSPserviceWithIntlService'
        ],
        'OutOfStockControlPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OutOfStockControlPreference'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'SetUserPreferencesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}