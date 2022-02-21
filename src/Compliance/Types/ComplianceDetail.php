<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Compliance\Types;

/**
 *
 * @property string $reasonCode
 * @property string $message
 * @property \PWCode\eBaySDK\Compliance\Types\VariationDetails $variation
 * @property \PWCode\eBaySDK\Compliance\Types\NameValueList[] $violationData
 * @property \PWCode\eBaySDK\Compliance\Types\CorrectiveRecommendations $correctiveRecommendations
 */
class ComplianceDetail extends \PWCode\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'reasonCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'reasonCode'
        ],
        'message' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'message'
        ],
        'variation' => [
            'type' => 'PWCode\eBaySDK\Compliance\Types\VariationDetails',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'variation'
        ],
        'violationData' => [
            'type' => 'PWCode\eBaySDK\Compliance\Types\NameValueList',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'violationData'
        ],
        'correctiveRecommendations' => [
            'type' => 'PWCode\eBaySDK\Compliance\Types\CorrectiveRecommendations',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'correctiveRecommendations'
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
