<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Analytics\Types;

/**
 *
 * @property string $dimension
 * @property string $filter
 * @property string $metric
 */
class GetTrafficReportRestRequest extends \PWCode\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'dimension' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'dimension'
        ],
        'filter' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'filter'
        ],
        'metric' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'metric'
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
