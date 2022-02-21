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
 * @property \PWCode\eBaySDK\Analytics\Types\Cycle $cycle
 * @property boolean $defaultProgram
 * @property string $evaluationReason
 * @property \PWCode\eBaySDK\Analytics\Types\Metric[] $metrics
 * @property \PWCode\eBaySDK\Analytics\Enums\ProgramEnum $program
 * @property \PWCode\eBaySDK\Analytics\Enums\StandardsLevelEnum $standardsLevel
 */
class StandardsProfile extends \PWCode\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'cycle' => [
            'type' => 'PWCode\eBaySDK\Analytics\Types\Cycle',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cycle'
        ],
        'defaultProgram' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'defaultProgram'
        ],
        'evaluationReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'evaluationReason'
        ],
        'metrics' => [
            'type' => 'PWCode\eBaySDK\Analytics\Types\Metric',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'metrics'
        ],
        'program' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'program'
        ],
        'standardsLevel' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'standardsLevel'
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
