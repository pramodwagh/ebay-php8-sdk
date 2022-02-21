<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Marketing\Types;

/**
 *
 * @property \PWCode\eBaySDK\Marketing\Types\Amount $forEachAmount
 * @property integer $forEachQuantity
 * @property \PWCode\eBaySDK\Marketing\Types\Amount $minAmount
 * @property integer $minQuantity
 * @property integer $numberOfDiscountedItems
 */
class DiscountSpecification extends \PWCode\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'forEachAmount' => [
            'type' => 'PWCode\eBaySDK\Marketing\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'forEachAmount'
        ],
        'forEachQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'forEachQuantity'
        ],
        'minAmount' => [
            'type' => 'PWCode\eBaySDK\Marketing\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'minAmount'
        ],
        'minQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'minQuantity'
        ],
        'numberOfDiscountedItems' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'numberOfDiscountedItems'
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
