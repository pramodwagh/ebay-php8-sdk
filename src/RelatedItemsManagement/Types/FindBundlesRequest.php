<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\RelatedItemsManagement\Types;

/**
 *
 * @property \PWCode\eBaySDK\RelatedItemsManagement\Enums\BundleDetailEnum $bundleDetailSelector
 * @property \PWCode\eBaySDK\RelatedItemsManagement\Enums\BundleStatusEnum $findAllByStatus
 * @property \PWCode\eBaySDK\RelatedItemsManagement\Types\BundleFilter[] $bundleFilter
 */
class FindBundlesRequest extends \PWCode\eBaySDK\RelatedItemsManagement\Types\BaseRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'bundleDetailSelector' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'bundleDetailSelector'
        ],
        'findAllByStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'findAllByStatus'
        ],
        'bundleFilter' => [
            'type' => 'PWCode\eBaySDK\RelatedItemsManagement\Types\BundleFilter',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'bundleFilter'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/sellerinventory/v1/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'findBundlesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}