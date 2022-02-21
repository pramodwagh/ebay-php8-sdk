<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\PostOrder\Types;

/**
 *
 * @property string $dataType
 * @property boolean $isArray
 * @property \PWCode\eBaySDK\PostOrder\Enums\ReturnMetadataKeyEnum $siteMetadataKey
 * @property string[] $values
 */
class ReturnMetadataType extends \PWCode\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'dataType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'dataType'
        ],
        'isArray' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'isArray'
        ],
        'siteMetadataKey' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'siteMetadataKey'
        ],
        'values' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'values'
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
