<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Order\Types;

/**
 *
 * @property \PWCode\eBaySDK\Order\Types\Image $image
 * @property string $itemId
 * @property string $lineItemId
 * @property \PWCode\eBaySDK\Order\Enums\LineItemPaymentStatusEnum $lineItemPaymentStatus
 * @property \PWCode\eBaySDK\Order\Enums\LineItemStatusEnum $lineItemStatus
 * @property \PWCode\eBaySDK\Order\Types\Amount $netPrice
 * @property integer $quantity
 * @property \PWCode\eBaySDK\Order\Types\Seller $seller
 * @property \PWCode\eBaySDK\Order\Types\ShippingDetail $shippingDetail
 * @property string $title
 */
class LineItem extends \PWCode\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'image' => [
            'type' => 'PWCode\eBaySDK\Order\Types\Image',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'image'
        ],
        'itemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemId'
        ],
        'lineItemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lineItemId'
        ],
        'lineItemPaymentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lineItemPaymentStatus'
        ],
        'lineItemStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lineItemStatus'
        ],
        'netPrice' => [
            'type' => 'PWCode\eBaySDK\Order\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'netPrice'
        ],
        'quantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'quantity'
        ],
        'seller' => [
            'type' => 'PWCode\eBaySDK\Order\Types\Seller',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'seller'
        ],
        'shippingDetail' => [
            'type' => 'PWCode\eBaySDK\Order\Types\ShippingDetail',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingDetail'
        ],
        'title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'title'
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