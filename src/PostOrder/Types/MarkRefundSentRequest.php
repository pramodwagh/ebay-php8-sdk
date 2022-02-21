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
 * @property string $comments
 * @property \PWCode\eBaySDK\PostOrder\Types\Amount $partialRefundAmount
 * @property \PWCode\eBaySDK\PostOrder\Types\RefundDetailType $refundDetail
 */
class MarkRefundSentRequest extends \PWCode\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'comments' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'comments'
        ],
        'partialRefundAmount' => [
            'type' => 'PWCode\eBaySDK\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'partialRefundAmount'
        ],
        'refundDetail' => [
            'type' => 'PWCode\eBaySDK\PostOrder\Types\RefundDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundDetail'
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
