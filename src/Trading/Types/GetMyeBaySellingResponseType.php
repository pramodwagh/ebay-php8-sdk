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
 * @property \PWCode\eBaySDK\Trading\Types\SellingSummaryType $SellingSummary
 * @property \PWCode\eBaySDK\Trading\Types\PaginatedItemArrayType $ScheduledList
 * @property \PWCode\eBaySDK\Trading\Types\PaginatedItemArrayType $ActiveList
 * @property \PWCode\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType $SoldList
 * @property \PWCode\eBaySDK\Trading\Types\PaginatedItemArrayType $UnsoldList
 * @property \PWCode\eBaySDK\Trading\Types\MyeBaySellingSummaryType $Summary
 * @property \PWCode\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType $DeletedFromSoldList
 * @property \PWCode\eBaySDK\Trading\Types\PaginatedItemArrayType $DeletedFromUnsoldList
 */
class GetMyeBaySellingResponseType extends \PWCode\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SellingSummary' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\SellingSummaryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingSummary'
        ],
        'ScheduledList' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ScheduledList'
        ],
        'ActiveList' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ActiveList'
        ],
        'SoldList' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SoldList'
        ],
        'UnsoldList' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UnsoldList'
        ],
        'Summary' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\MyeBaySellingSummaryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Summary'
        ],
        'DeletedFromSoldList' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromSoldList'
        ],
        'DeletedFromUnsoldList' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromUnsoldList'
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
