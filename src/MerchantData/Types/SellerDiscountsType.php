<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\MerchantData\Types;

/**
 *
 * @property \PWCode\eBaySDK\MerchantData\Types\AmountType $OriginalItemPrice
 * @property \PWCode\eBaySDK\MerchantData\Types\AmountType $OriginalItemShippingCost
 * @property string $OriginalShippingService
 * @property \PWCode\eBaySDK\MerchantData\Types\SellerDiscountType[] $SellerDiscount
 */
class SellerDiscountsType extends \PWCode\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'OriginalItemPrice' => [
            'type' => 'PWCode\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OriginalItemPrice'
        ],
        'OriginalItemShippingCost' => [
            'type' => 'PWCode\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OriginalItemShippingCost'
        ],
        'OriginalShippingService' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OriginalShippingService'
        ],
        'SellerDiscount' => [
            'type' => 'PWCode\eBaySDK\MerchantData\Types\SellerDiscountType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'SellerDiscount'
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