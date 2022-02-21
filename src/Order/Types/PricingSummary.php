<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Order\Types;

/**
 *
 * @property \PWCode\eBaySDK\Order\Types\Adjustment $adjustment
 * @property \PWCode\eBaySDK\Order\Types\Amount $deliveryCost
 * @property \PWCode\eBaySDK\Order\Types\Amount $deliveryDiscount
 * @property \PWCode\eBaySDK\Order\Types\Amount $fee
 * @property \PWCode\eBaySDK\Order\Types\Amount $priceDiscount
 * @property \PWCode\eBaySDK\Order\Types\Amount $priceSubtotal
 * @property \PWCode\eBaySDK\Order\Types\Amount $tax
 * @property \PWCode\eBaySDK\Order\Types\Amount $total
 */
class PricingSummary extends \PWCode\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'adjustment' => [
            'type' => 'PWCode\eBaySDK\Order\Types\Adjustment',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'adjustment'
        ],
        'deliveryCost' => [
            'type' => 'PWCode\eBaySDK\Order\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'deliveryCost'
        ],
        'deliveryDiscount' => [
            'type' => 'PWCode\eBaySDK\Order\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'deliveryDiscount'
        ],
        'fee' => [
            'type' => 'PWCode\eBaySDK\Order\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fee'
        ],
        'priceDiscount' => [
            'type' => 'PWCode\eBaySDK\Order\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priceDiscount'
        ],
        'priceSubtotal' => [
            'type' => 'PWCode\eBaySDK\Order\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priceSubtotal'
        ],
        'tax' => [
            'type' => 'PWCode\eBaySDK\Order\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'tax'
        ],
        'total' => [
            'type' => 'PWCode\eBaySDK\Order\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'total'
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

        $this->setValues(__CLASS__, $childValues);
    }
}