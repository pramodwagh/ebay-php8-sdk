<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\ReturnManagement\Types;

/**
 *
 * @property \DateTime $fromDate
 * @property \DateTime $toDate
 */
class DateRangeFilterType extends \PWCode\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'fromDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fromDate'
        ],
        'toDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'toDate'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/returns/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}