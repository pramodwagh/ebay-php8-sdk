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
 * @property \PWCode\eBaySDK\Trading\Enums\AccountDetailEntryCodeType $AccountDetailsEntryType
 * @property string $Description
 * @property \PWCode\eBaySDK\Trading\Types\AmountType $Balance
 * @property \DateTime $Date
 * @property \PWCode\eBaySDK\Trading\Types\AmountType $GrossDetailAmount
 * @property string $ItemID
 * @property string $Memo
 * @property \PWCode\eBaySDK\Trading\Types\AmountType $ConversionRate
 * @property \PWCode\eBaySDK\Trading\Types\AmountType $NetDetailAmount
 * @property string $RefNumber
 * @property integer $VATPercent
 * @property string $Title
 * @property string $OrderLineItemID
 * @property string $TransactionID
 * @property boolean $ReceivedTopRatedDiscount
 */
class AccountEntryType extends \PWCode\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AccountDetailsEntryType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AccountDetailsEntryType'
        ],
        'Description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ],
        'Balance' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Balance'
        ],
        'Date' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Date'
        ],
        'GrossDetailAmount' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GrossDetailAmount'
        ],
        'ItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ],
        'Memo' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Memo'
        ],
        'ConversionRate' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConversionRate'
        ],
        'NetDetailAmount' => [
            'type' => 'PWCode\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NetDetailAmount'
        ],
        'RefNumber' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefNumber'
        ],
        'VATPercent' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VATPercent'
        ],
        'Title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Title'
        ],
        'OrderLineItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderLineItemID'
        ],
        'TransactionID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TransactionID'
        ],
        'ReceivedTopRatedDiscount' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReceivedTopRatedDiscount'
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
