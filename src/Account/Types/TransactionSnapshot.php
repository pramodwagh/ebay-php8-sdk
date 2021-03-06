<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Account\Types;

/**
 *
 * @property \PWCode\eBaySDK\Account\Types\SoldAggregatedMetrics $calendarWindowAggregatedMetrics
 * @property \PWCode\eBaySDK\Account\Types\LookbackPeriod $lookbackPeriod
 * @property \PWCode\eBaySDK\Account\Types\SoldAggregatedMetrics $rollingWindowAggregatedMetrics
 * @property \PWCode\eBaySDK\Account\Types\Amount $soldInventoryValue
 * @property integer $soldQuantity
 */
class TransactionSnapshot extends \PWCode\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'calendarWindowAggregatedMetrics' => [
            'type' => 'PWCode\eBaySDK\Account\Types\SoldAggregatedMetrics',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'calendarWindowAggregatedMetrics'
        ],
        'lookbackPeriod' => [
            'type' => 'PWCode\eBaySDK\Account\Types\LookbackPeriod',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lookbackPeriod'
        ],
        'rollingWindowAggregatedMetrics' => [
            'type' => 'PWCode\eBaySDK\Account\Types\SoldAggregatedMetrics',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'rollingWindowAggregatedMetrics'
        ],
        'soldInventoryValue' => [
            'type' => 'PWCode\eBaySDK\Account\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'soldInventoryValue'
        ],
        'soldQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'soldQuantity'
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
