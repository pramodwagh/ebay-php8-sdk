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
 * @property string $carrierEnum
 * @property string $carrierName
 * @property \PWCode\eBaySDK\PostOrder\Types\Text $comments
 * @property string $fileId
 * @property boolean $forwardShippingLabelProvided
 * @property \PWCode\eBaySDK\PostOrder\Enums\LabelActionEnum $labelAction
 * @property string $labelId
 * @property \PWCode\eBaySDK\PostOrder\Types\DateTime $labelSentDate
 * @property \PWCode\eBaySDK\PostOrder\Enums\NoSellerUploadLabelReasonEnum $noLabelReason
 * @property \PWCode\eBaySDK\PostOrder\Types\B:Amount $returnLabelCost
 * @property string $trackingNumber
 */
class ProvideLabelRequest extends \PWCode\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'carrierEnum' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'carrierEnum'
        ],
        'carrierName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'carrierName'
        ],
        'comments' => [
            'type' => 'PWCode\eBaySDK\PostOrder\Types\Text',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'comments'
        ],
        'fileId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fileId'
        ],
        'forwardShippingLabelProvided' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'forwardShippingLabelProvided'
        ],
        'labelAction' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'labelAction'
        ],
        'labelId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'labelId'
        ],
        'labelSentDate' => [
            'type' => 'PWCode\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'labelSentDate'
        ],
        'noLabelReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'noLabelReason'
        ],
        'returnLabelCost' => [
            'type' => 'PWCode\eBaySDK\PostOrder\Types\B:Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnLabelCost'
        ],
        'trackingNumber' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'trackingNumber'
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
