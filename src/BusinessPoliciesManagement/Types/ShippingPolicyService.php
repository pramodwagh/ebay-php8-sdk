<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\BusinessPoliciesManagement\Types;

/**
 *
 * @property string[] $shipToLocation
 * @property string $shippingService
 * @property string $shippingType
 * @property integer $sortOrderId
 * @property boolean $freeShipping
 * @property \PWCode\eBaySDK\BusinessPoliciesManagement\Types\Amount $codFee
 * @property boolean $fastShipping
 * @property \PWCode\eBaySDK\BusinessPoliciesManagement\Types\Amount $shippingServiceAdditionalCost
 * @property \PWCode\eBaySDK\BusinessPoliciesManagement\Types\Amount $shippingServiceCost
 * @property \PWCode\eBaySDK\BusinessPoliciesManagement\Types\Amount $shippingSurcharge
 * @property \PWCode\eBaySDK\BusinessPoliciesManagement\Types\Amount $shippingOverrideFee
 * @property boolean $buyerResponsibleForShipping
 */
class ShippingPolicyService extends \PWCode\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'shipToLocation' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'shipToLocation'
        ],
        'shippingService' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingService'
        ],
        'shippingType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingType'
        ],
        'sortOrderId' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sortOrderId'
        ],
        'freeShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'freeShipping'
        ],
        'codFee' => [
            'type' => 'PWCode\eBaySDK\BusinessPoliciesManagement\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'codFee'
        ],
        'fastShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fastShipping'
        ],
        'shippingServiceAdditionalCost' => [
            'type' => 'PWCode\eBaySDK\BusinessPoliciesManagement\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingServiceAdditionalCost'
        ],
        'shippingServiceCost' => [
            'type' => 'PWCode\eBaySDK\BusinessPoliciesManagement\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingServiceCost'
        ],
        'shippingSurcharge' => [
            'type' => 'PWCode\eBaySDK\BusinessPoliciesManagement\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingSurcharge'
        ],
        'shippingOverrideFee' => [
            'type' => 'PWCode\eBaySDK\BusinessPoliciesManagement\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingOverrideFee'
        ],
        'buyerResponsibleForShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerResponsibleForShipping'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/selling/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
