<?php
/**
 * ItemOutputDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * eInvoice Api
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1_8_1_16
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ItemOutputDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemOutputDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemOutputDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gtin' => 'string',
        'buyer_item_identification' => 'string',
        'seller_item_identification' => 'string',
        'manufacturer_item_identification' => 'string',
        'description' => 'string',
        'brand_name' => 'string',
        'model_name' => 'string',
        'pack_quantity' => 'string',
        'pack_unit_of_measure' => 'string',
        'units_per_package' => 'string',
        'gas_and_oil_properties' => '\Swagger\Client\Model\GasAndOilOutputDto[]',
        'height' => 'string',
        'height_unit_of_measure' => 'string',
        'width' => 'string',
        'width_unit_of_measure' => 'string',
        'depth' => 'string',
        'depth_unit_of_measure' => 'string',
        'volume' => 'string',
        'volume_unit_of_measure' => 'string',
        'lot_number' => 'string',
        'expiry_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'gtin' => null,
        'buyer_item_identification' => null,
        'seller_item_identification' => null,
        'manufacturer_item_identification' => null,
        'description' => null,
        'brand_name' => null,
        'model_name' => null,
        'pack_quantity' => null,
        'pack_unit_of_measure' => null,
        'units_per_package' => null,
        'gas_and_oil_properties' => null,
        'height' => null,
        'height_unit_of_measure' => null,
        'width' => null,
        'width_unit_of_measure' => null,
        'depth' => null,
        'depth_unit_of_measure' => null,
        'volume' => null,
        'volume_unit_of_measure' => null,
        'lot_number' => null,
        'expiry_date' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'gtin' => 'Gtin',
        'buyer_item_identification' => 'BuyerItemIdentification',
        'seller_item_identification' => 'SellerItemIdentification',
        'manufacturer_item_identification' => 'ManufacturerItemIdentification',
        'description' => 'Description',
        'brand_name' => 'BrandName',
        'model_name' => 'ModelName',
        'pack_quantity' => 'PackQuantity',
        'pack_unit_of_measure' => 'PackUnitOfMeasure',
        'units_per_package' => 'UnitsPerPackage',
        'gas_and_oil_properties' => 'GasAndOilProperties',
        'height' => 'Height',
        'height_unit_of_measure' => 'HeightUnitOfMeasure',
        'width' => 'Width',
        'width_unit_of_measure' => 'WidthUnitOfMeasure',
        'depth' => 'Depth',
        'depth_unit_of_measure' => 'DepthUnitOfMeasure',
        'volume' => 'Volume',
        'volume_unit_of_measure' => 'VolumeUnitOfMeasure',
        'lot_number' => 'LotNumber',
        'expiry_date' => 'ExpiryDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gtin' => 'setGtin',
        'buyer_item_identification' => 'setBuyerItemIdentification',
        'seller_item_identification' => 'setSellerItemIdentification',
        'manufacturer_item_identification' => 'setManufacturerItemIdentification',
        'description' => 'setDescription',
        'brand_name' => 'setBrandName',
        'model_name' => 'setModelName',
        'pack_quantity' => 'setPackQuantity',
        'pack_unit_of_measure' => 'setPackUnitOfMeasure',
        'units_per_package' => 'setUnitsPerPackage',
        'gas_and_oil_properties' => 'setGasAndOilProperties',
        'height' => 'setHeight',
        'height_unit_of_measure' => 'setHeightUnitOfMeasure',
        'width' => 'setWidth',
        'width_unit_of_measure' => 'setWidthUnitOfMeasure',
        'depth' => 'setDepth',
        'depth_unit_of_measure' => 'setDepthUnitOfMeasure',
        'volume' => 'setVolume',
        'volume_unit_of_measure' => 'setVolumeUnitOfMeasure',
        'lot_number' => 'setLotNumber',
        'expiry_date' => 'setExpiryDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gtin' => 'getGtin',
        'buyer_item_identification' => 'getBuyerItemIdentification',
        'seller_item_identification' => 'getSellerItemIdentification',
        'manufacturer_item_identification' => 'getManufacturerItemIdentification',
        'description' => 'getDescription',
        'brand_name' => 'getBrandName',
        'model_name' => 'getModelName',
        'pack_quantity' => 'getPackQuantity',
        'pack_unit_of_measure' => 'getPackUnitOfMeasure',
        'units_per_package' => 'getUnitsPerPackage',
        'gas_and_oil_properties' => 'getGasAndOilProperties',
        'height' => 'getHeight',
        'height_unit_of_measure' => 'getHeightUnitOfMeasure',
        'width' => 'getWidth',
        'width_unit_of_measure' => 'getWidthUnitOfMeasure',
        'depth' => 'getDepth',
        'depth_unit_of_measure' => 'getDepthUnitOfMeasure',
        'volume' => 'getVolume',
        'volume_unit_of_measure' => 'getVolumeUnitOfMeasure',
        'lot_number' => 'getLotNumber',
        'expiry_date' => 'getExpiryDate'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['gtin'] = isset($data['gtin']) ? $data['gtin'] : null;
        $this->container['buyer_item_identification'] = isset($data['buyer_item_identification']) ? $data['buyer_item_identification'] : null;
        $this->container['seller_item_identification'] = isset($data['seller_item_identification']) ? $data['seller_item_identification'] : null;
        $this->container['manufacturer_item_identification'] = isset($data['manufacturer_item_identification']) ? $data['manufacturer_item_identification'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['brand_name'] = isset($data['brand_name']) ? $data['brand_name'] : null;
        $this->container['model_name'] = isset($data['model_name']) ? $data['model_name'] : null;
        $this->container['pack_quantity'] = isset($data['pack_quantity']) ? $data['pack_quantity'] : null;
        $this->container['pack_unit_of_measure'] = isset($data['pack_unit_of_measure']) ? $data['pack_unit_of_measure'] : null;
        $this->container['units_per_package'] = isset($data['units_per_package']) ? $data['units_per_package'] : null;
        $this->container['gas_and_oil_properties'] = isset($data['gas_and_oil_properties']) ? $data['gas_and_oil_properties'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['height_unit_of_measure'] = isset($data['height_unit_of_measure']) ? $data['height_unit_of_measure'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['width_unit_of_measure'] = isset($data['width_unit_of_measure']) ? $data['width_unit_of_measure'] : null;
        $this->container['depth'] = isset($data['depth']) ? $data['depth'] : null;
        $this->container['depth_unit_of_measure'] = isset($data['depth_unit_of_measure']) ? $data['depth_unit_of_measure'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['volume_unit_of_measure'] = isset($data['volume_unit_of_measure']) ? $data['volume_unit_of_measure'] : null;
        $this->container['lot_number'] = isset($data['lot_number']) ? $data['lot_number'] : null;
        $this->container['expiry_date'] = isset($data['expiry_date']) ? $data['expiry_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets gtin
     *
     * @return string
     */
    public function getGtin()
    {
        return $this->container['gtin'];
    }

    /**
     * Sets gtin
     *
     * @param string $gtin Item identification GTIN
     *
     * @return $this
     */
    public function setGtin($gtin)
    {
        $this->container['gtin'] = $gtin;

        return $this;
    }

    /**
     * Gets buyer_item_identification
     *
     * @return string
     */
    public function getBuyerItemIdentification()
    {
        return $this->container['buyer_item_identification'];
    }

    /**
     * Sets buyer_item_identification
     *
     * @param string $buyer_item_identification Item code assigned by buyer
     *
     * @return $this
     */
    public function setBuyerItemIdentification($buyer_item_identification)
    {
        $this->container['buyer_item_identification'] = $buyer_item_identification;

        return $this;
    }

    /**
     * Gets seller_item_identification
     *
     * @return string
     */
    public function getSellerItemIdentification()
    {
        return $this->container['seller_item_identification'];
    }

    /**
     * Sets seller_item_identification
     *
     * @param string $seller_item_identification Item code assigned by seller = SKU
     *
     * @return $this
     */
    public function setSellerItemIdentification($seller_item_identification)
    {
        $this->container['seller_item_identification'] = $seller_item_identification;

        return $this;
    }

    /**
     * Gets manufacturer_item_identification
     *
     * @return string
     */
    public function getManufacturerItemIdentification()
    {
        return $this->container['manufacturer_item_identification'];
    }

    /**
     * Sets manufacturer_item_identification
     *
     * @param string $manufacturer_item_identification Item code assigned by the manufacturer. The default value is PD
     *
     * @return $this
     */
    public function setManufacturerItemIdentification($manufacturer_item_identification)
    {
        $this->container['manufacturer_item_identification'] = $manufacturer_item_identification;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Item description belonging to the invoice line
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets brand_name
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->container['brand_name'];
    }

    /**
     * Sets brand_name
     *
     * @param string $brand_name brand_name
     *
     * @return $this
     */
    public function setBrandName($brand_name)
    {
        $this->container['brand_name'] = $brand_name;

        return $this;
    }

    /**
     * Gets model_name
     *
     * @return string
     */
    public function getModelName()
    {
        return $this->container['model_name'];
    }

    /**
     * Sets model_name
     *
     * @param string $model_name model_name
     *
     * @return $this
     */
    public function setModelName($model_name)
    {
        $this->container['model_name'] = $model_name;

        return $this;
    }

    /**
     * Gets pack_quantity
     *
     * @return string
     */
    public function getPackQuantity()
    {
        return $this->container['pack_quantity'];
    }

    /**
     * Sets pack_quantity
     *
     * @param string $pack_quantity Number of packages
     *
     * @return $this
     */
    public function setPackQuantity($pack_quantity)
    {
        $this->container['pack_quantity'] = $pack_quantity;

        return $this;
    }

    /**
     * Gets pack_unit_of_measure
     *
     * @return string
     */
    public function getPackUnitOfMeasure()
    {
        return $this->container['pack_unit_of_measure'];
    }

    /**
     * Sets pack_unit_of_measure
     *
     * @param string $pack_unit_of_measure Unit of measure
     *
     * @return $this
     */
    public function setPackUnitOfMeasure($pack_unit_of_measure)
    {
        $this->container['pack_unit_of_measure'] = $pack_unit_of_measure;

        return $this;
    }

    /**
     * Gets units_per_package
     *
     * @return string
     */
    public function getUnitsPerPackage()
    {
        return $this->container['units_per_package'];
    }

    /**
     * Sets units_per_package
     *
     * @param string $units_per_package Number of items per package
     *
     * @return $this
     */
    public function setUnitsPerPackage($units_per_package)
    {
        $this->container['units_per_package'] = $units_per_package;

        return $this;
    }

    /**
     * Gets gas_and_oil_properties
     *
     * @return \Swagger\Client\Model\GasAndOilOutputDto[]
     */
    public function getGasAndOilProperties()
    {
        return $this->container['gas_and_oil_properties'];
    }

    /**
     * Sets gas_and_oil_properties
     *
     * @param \Swagger\Client\Model\GasAndOilOutputDto[] $gas_and_oil_properties gas_and_oil_properties
     *
     * @return $this
     */
    public function setGasAndOilProperties($gas_and_oil_properties)
    {
        $this->container['gas_and_oil_properties'] = $gas_and_oil_properties;

        return $this;
    }

    /**
     * Gets height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param string $height Height of item
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets height_unit_of_measure
     *
     * @return string
     */
    public function getHeightUnitOfMeasure()
    {
        return $this->container['height_unit_of_measure'];
    }

    /**
     * Sets height_unit_of_measure
     *
     * @param string $height_unit_of_measure Unit of measure used.  http://www.datypic.com/sc/ubl20/a-unitCode-4.html
     *
     * @return $this
     */
    public function setHeightUnitOfMeasure($height_unit_of_measure)
    {
        $this->container['height_unit_of_measure'] = $height_unit_of_measure;

        return $this;
    }

    /**
     * Gets width
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param string $width Width of item
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets width_unit_of_measure
     *
     * @return string
     */
    public function getWidthUnitOfMeasure()
    {
        return $this->container['width_unit_of_measure'];
    }

    /**
     * Sets width_unit_of_measure
     *
     * @param string $width_unit_of_measure Unit of measure used.  http://www.datypic.com/sc/ubl20/a-unitCode-4.html
     *
     * @return $this
     */
    public function setWidthUnitOfMeasure($width_unit_of_measure)
    {
        $this->container['width_unit_of_measure'] = $width_unit_of_measure;

        return $this;
    }

    /**
     * Gets depth
     *
     * @return string
     */
    public function getDepth()
    {
        return $this->container['depth'];
    }

    /**
     * Sets depth
     *
     * @param string $depth Depth of item
     *
     * @return $this
     */
    public function setDepth($depth)
    {
        $this->container['depth'] = $depth;

        return $this;
    }

    /**
     * Gets depth_unit_of_measure
     *
     * @return string
     */
    public function getDepthUnitOfMeasure()
    {
        return $this->container['depth_unit_of_measure'];
    }

    /**
     * Sets depth_unit_of_measure
     *
     * @param string $depth_unit_of_measure Unit of measure used.  http://www.datypic.com/sc/ubl20/a-unitCode-4.html
     *
     * @return $this
     */
    public function setDepthUnitOfMeasure($depth_unit_of_measure)
    {
        $this->container['depth_unit_of_measure'] = $depth_unit_of_measure;

        return $this;
    }

    /**
     * Gets volume
     *
     * @return string
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     *
     * @param string $volume Volume of item
     *
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

        return $this;
    }

    /**
     * Gets volume_unit_of_measure
     *
     * @return string
     */
    public function getVolumeUnitOfMeasure()
    {
        return $this->container['volume_unit_of_measure'];
    }

    /**
     * Sets volume_unit_of_measure
     *
     * @param string $volume_unit_of_measure Unit of measure used.  http://www.datypic.com/sc/ubl20/a-unitCode-4.html
     *
     * @return $this
     */
    public function setVolumeUnitOfMeasure($volume_unit_of_measure)
    {
        $this->container['volume_unit_of_measure'] = $volume_unit_of_measure;

        return $this;
    }

    /**
     * Gets lot_number
     *
     * @return string
     */
    public function getLotNumber()
    {
        return $this->container['lot_number'];
    }

    /**
     * Sets lot_number
     *
     * @param string $lot_number lot_number
     *
     * @return $this
     */
    public function setLotNumber($lot_number)
    {
        $this->container['lot_number'] = $lot_number;

        return $this;
    }

    /**
     * Gets expiry_date
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param \DateTime $expiry_date expiry_date
     *
     * @return $this
     */
    public function setExpiryDate($expiry_date)
    {
        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


