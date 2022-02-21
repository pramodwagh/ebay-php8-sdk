<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace PWCode\eBaySDK\Catalog\Types;

/**
 *
 * @property \PWCode\eBaySDK\Catalog\Types\Image[] $additionalImages
 * @property \PWCode\eBaySDK\Catalog\Types\Aspect[] $aspects
 * @property string $brand
 * @property string $description
 * @property string[] $ean
 * @property string $epid
 * @property string[] $gtin
 * @property \PWCode\eBaySDK\Catalog\Types\Image $image
 * @property string[] $isbn
 * @property string[] $mpn
 * @property string[] $otherApplicableCategoryIds
 * @property string $primaryCategoryId
 * @property string $productWebUrl
 * @property string $title
 * @property string[] $upc
 * @property string $version
 */
class Product extends \PWCode\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'additionalImages' => [
            'type' => 'PWCode\eBaySDK\Catalog\Types\Image',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'additionalImages'
        ],
        'aspects' => [
            'type' => 'PWCode\eBaySDK\Catalog\Types\Aspect',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'aspects'
        ],
        'brand' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'brand'
        ],
        'description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'description'
        ],
        'ean' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ean'
        ],
        'epid' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'epid'
        ],
        'gtin' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'gtin'
        ],
        'image' => [
            'type' => 'PWCode\eBaySDK\Catalog\Types\Image',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'image'
        ],
        'isbn' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'isbn'
        ],
        'mpn' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'mpn'
        ],
        'otherApplicableCategoryIds' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'otherApplicableCategoryIds'
        ],
        'primaryCategoryId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'primaryCategoryId'
        ],
        'productWebUrl' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'productWebUrl'
        ],
        'title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'title'
        ],
        'upc' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'upc'
        ],
        'version' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'version'
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
