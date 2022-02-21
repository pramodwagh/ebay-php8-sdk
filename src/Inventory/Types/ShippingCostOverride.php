<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Inventory\Types;

/**
 *
 * @property \PWCode\eBaySDK\Inventory\Types\Amount $additionalShippingCost
 * @property integer $priority
 * @property \PWCode\eBaySDK\Inventory\Types\Amount $shippingCost
 * @property \PWCode\eBaySDK\Inventory\Enums\ShippingServiceTypeEnum $shippingServiceType
 * @property \PWCode\eBaySDK\Inventory\Types\Amount $surcharge
 */
class ShippingCostOverride extends \PWCode\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'additionalShippingCost' => [
            'type' => 'PWCode\eBaySDK\Inventory\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'additionalShippingCost'
        ],
        'priority' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priority'
        ],
        'shippingCost' => [
            'type' => 'PWCode\eBaySDK\Inventory\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingCost'
        ],
        'shippingServiceType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingServiceType'
        ],
        'surcharge' => [
            'type' => 'PWCode\eBaySDK\Inventory\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'surcharge'
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