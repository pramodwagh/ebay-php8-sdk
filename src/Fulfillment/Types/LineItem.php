<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Fulfillment\Types;

/**
 *
 * @property \PWCode\eBaySDK\Fulfillment\Types\AppliedPromotion[] $appliedPromotions
 * @property \PWCode\eBaySDK\Fulfillment\Types\DeliveryCost $deliveryCost
 * @property \PWCode\eBaySDK\Fulfillment\Types\Amount $discountedLineItemCost
 * @property \PWCode\eBaySDK\Fulfillment\Types\GiftDetails $giftDetails
 * @property string $legacyItemId
 * @property string $legacyVariationId
 * @property \PWCode\eBaySDK\Fulfillment\Types\Amount $lineItemCost
 * @property \PWCode\eBaySDK\Fulfillment\Types\LineItemFulfillmentInstructions $lineItemFulfillmentInstructions
 * @property \PWCode\eBaySDK\Fulfillment\Enums\LineItemFulfillmentStatusEnum $lineItemFulfillmentStatus
 * @property string $lineItemId
 * @property \PWCode\eBaySDK\Fulfillment\Enums\MarketplaceIdEnum $listingMarketplaceId
 * @property \PWCode\eBaySDK\Fulfillment\Types\LineItemProperties $properties
 * @property \PWCode\eBaySDK\Fulfillment\Enums\MarketplaceIdEnum $purchaseMarketplaceId
 * @property integer $quantity
 * @property \PWCode\eBaySDK\Fulfillment\Types\LineItemRefund[] $refunds
 * @property string $sku
 * @property \PWCode\eBaySDK\Fulfillment\Enums\SoldFormatEnum $soldFormat
 * @property \PWCode\eBaySDK\Fulfillment\Types\Tax[] $taxes
 * @property string $title
 * @property \PWCode\eBaySDK\Fulfillment\Types\Amount $total
 */
class LineItem extends \PWCode\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'appliedPromotions' => [
            'type' => 'PWCode\eBaySDK\Fulfillment\Types\AppliedPromotion',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'appliedPromotions'
        ],
        'deliveryCost' => [
            'type' => 'PWCode\eBaySDK\Fulfillment\Types\DeliveryCost',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'deliveryCost'
        ],
        'discountedLineItemCost' => [
            'type' => 'PWCode\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'discountedLineItemCost'
        ],
        'giftDetails' => [
            'type' => 'PWCode\eBaySDK\Fulfillment\Types\GiftDetails',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'giftDetails'
        ],
        'legacyItemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'legacyItemId'
        ],
        'legacyVariationId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'legacyVariationId'
        ],
        'lineItemCost' => [
            'type' => 'PWCode\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lineItemCost'
        ],
        'lineItemFulfillmentInstructions' => [
            'type' => 'PWCode\eBaySDK\Fulfillment\Types\LineItemFulfillmentInstructions',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lineItemFulfillmentInstructions'
        ],
        'lineItemFulfillmentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lineItemFulfillmentStatus'
        ],
        'lineItemId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lineItemId'
        ],
        'listingMarketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'listingMarketplaceId'
        ],
        'properties' => [
            'type' => 'PWCode\eBaySDK\Fulfillment\Types\LineItemProperties',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'properties'
        ],
        'purchaseMarketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'purchaseMarketplaceId'
        ],
        'quantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'quantity'
        ],
        'refunds' => [
            'type' => 'PWCode\eBaySDK\Fulfillment\Types\LineItemRefund',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'refunds'
        ],
        'sku' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sku'
        ],
        'soldFormat' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'soldFormat'
        ],
        'taxes' => [
            'type' => 'PWCode\eBaySDK\Fulfillment\Types\Tax',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'taxes'
        ],
        'title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'title'
        ],
        'total' => [
            'type' => 'PWCode\eBaySDK\Fulfillment\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'total'
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
