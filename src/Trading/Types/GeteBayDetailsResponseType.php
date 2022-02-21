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
 * @property \PWCode\eBaySDK\Trading\Types\CountryDetailsType[] $CountryDetails
 * @property \PWCode\eBaySDK\Trading\Types\CurrencyDetailsType[] $CurrencyDetails
 * @property \PWCode\eBaySDK\Trading\Types\DispatchTimeMaxDetailsType[] $DispatchTimeMaxDetails
 * @property \PWCode\eBaySDK\Trading\Types\PaymentOptionDetailsType[] $PaymentOptionDetails
 * @property \PWCode\eBaySDK\Trading\Types\RegionDetailsType[] $RegionDetails
 * @property \PWCode\eBaySDK\Trading\Types\ShippingLocationDetailsType[] $ShippingLocationDetails
 * @property \PWCode\eBaySDK\Trading\Types\ShippingServiceDetailsType[] $ShippingServiceDetails
 * @property \PWCode\eBaySDK\Trading\Types\SiteDetailsType[] $SiteDetails
 * @property \PWCode\eBaySDK\Trading\Types\TaxJurisdictionType[] $TaxJurisdiction
 * @property \PWCode\eBaySDK\Trading\Types\URLDetailsType[] $URLDetails
 * @property \PWCode\eBaySDK\Trading\Types\TimeZoneDetailsType[] $TimeZoneDetails
 * @property \PWCode\eBaySDK\Trading\Types\ItemSpecificDetailsType[] $ItemSpecificDetails
 * @property \PWCode\eBaySDK\Trading\Types\RegionOfOriginDetailsType[] $RegionOfOriginDetails
 * @property \PWCode\eBaySDK\Trading\Types\ShippingPackageDetailsType[] $ShippingPackageDetails
 * @property \PWCode\eBaySDK\Trading\Types\ShippingCarrierDetailsType[] $ShippingCarrierDetails
 * @property \PWCode\eBaySDK\Trading\Types\ReturnPolicyDetailsType $ReturnPolicyDetails
 * @property \PWCode\eBaySDK\Trading\Types\ListingStartPriceDetailsType[] $ListingStartPriceDetails
 * @property \PWCode\eBaySDK\Trading\Types\SiteBuyerRequirementDetailsType[] $BuyerRequirementDetails
 * @property \PWCode\eBaySDK\Trading\Types\ListingFeatureDetailsType[] $ListingFeatureDetails
 * @property \PWCode\eBaySDK\Trading\Types\VariationDetailsType $VariationDetails
 * @property \PWCode\eBaySDK\Trading\Types\ExcludeShippingLocationDetailsType[] $ExcludeShippingLocationDetails
 * @property \DateTime $UpdateTime
 * @property \PWCode\eBaySDK\Trading\Types\RecoupmentPolicyDetailsType[] $RecoupmentPolicyDetails
 * @property \PWCode\eBaySDK\Trading\Types\ShippingCategoryDetailsType[] $ShippingCategoryDetails
 * @property \PWCode\eBaySDK\Trading\Types\ProductDetailsType $ProductDetails
 */
class GeteBayDetailsResponseType extends \PWCode\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'CountryDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\CountryDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'CountryDetails'
        ],
        'CurrencyDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\CurrencyDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'CurrencyDetails'
        ],
        'DispatchTimeMaxDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\DispatchTimeMaxDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'DispatchTimeMaxDetails'
        ],
        'PaymentOptionDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\PaymentOptionDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PaymentOptionDetails'
        ],
        'RegionDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\RegionDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'RegionDetails'
        ],
        'ShippingLocationDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\ShippingLocationDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingLocationDetails'
        ],
        'ShippingServiceDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\ShippingServiceDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingServiceDetails'
        ],
        'SiteDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\SiteDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'SiteDetails'
        ],
        'TaxJurisdiction' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\TaxJurisdictionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'TaxJurisdiction'
        ],
        'URLDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\URLDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'URLDetails'
        ],
        'TimeZoneDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\TimeZoneDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'TimeZoneDetails'
        ],
        'ItemSpecificDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\ItemSpecificDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ItemSpecificDetails'
        ],
        'RegionOfOriginDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\RegionOfOriginDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'RegionOfOriginDetails'
        ],
        'ShippingPackageDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\ShippingPackageDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingPackageDetails'
        ],
        'ShippingCarrierDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\ShippingCarrierDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingCarrierDetails'
        ],
        'ReturnPolicyDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\ReturnPolicyDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicyDetails'
        ],
        'ListingStartPriceDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\ListingStartPriceDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ListingStartPriceDetails'
        ],
        'BuyerRequirementDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\SiteBuyerRequirementDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'BuyerRequirementDetails'
        ],
        'ListingFeatureDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\ListingFeatureDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ListingFeatureDetails'
        ],
        'VariationDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\VariationDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VariationDetails'
        ],
        'ExcludeShippingLocationDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\ExcludeShippingLocationDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ExcludeShippingLocationDetails'
        ],
        'UpdateTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UpdateTime'
        ],
        'RecoupmentPolicyDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\RecoupmentPolicyDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'RecoupmentPolicyDetails'
        ],
        'ShippingCategoryDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\ShippingCategoryDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingCategoryDetails'
        ],
        'ProductDetails' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\ProductDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ProductDetails'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
