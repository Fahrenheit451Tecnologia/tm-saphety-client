<?php
/**
 * IssuerIntegrationSettingInputDto
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
 * IssuerIntegrationSettingInputDto Class Doc Comment
 *
 * @category Class
 * @description Issuer integration setting
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IssuerIntegrationSettingInputDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IssuerIntegrationSettingInputDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'integration_type' => 'string',
        'attribute_name' => 'string',
        'attribute_value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'integration_type' => null,
        'attribute_name' => null,
        'attribute_value' => null
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
        'integration_type' => 'IntegrationType',
        'attribute_name' => 'AttributeName',
        'attribute_value' => 'AttributeValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'integration_type' => 'setIntegrationType',
        'attribute_name' => 'setAttributeName',
        'attribute_value' => 'setAttributeValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'integration_type' => 'getIntegrationType',
        'attribute_name' => 'getAttributeName',
        'attribute_value' => 'getAttributeValue'
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
        $this->container['integration_type'] = isset($data['integration_type']) ? $data['integration_type'] : null;
        $this->container['attribute_name'] = isset($data['attribute_name']) ? $data['attribute_name'] : null;
        $this->container['attribute_value'] = isset($data['attribute_value']) ? $data['attribute_value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['integration_type'] === null) {
            $invalidProperties[] = "'integration_type' can't be null";
        }
        if ((strlen($this->container['integration_type']) > 50)) {
            $invalidProperties[] = "invalid value for 'integration_type', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['attribute_name'] === null) {
            $invalidProperties[] = "'attribute_name' can't be null";
        }
        if ((strlen($this->container['attribute_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'attribute_name', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['attribute_value'] === null) {
            $invalidProperties[] = "'attribute_value' can't be null";
        }
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

        if ($this->container['integration_type'] === null) {
            return false;
        }
        if (strlen($this->container['integration_type']) > 50) {
            return false;
        }
        if ($this->container['attribute_name'] === null) {
            return false;
        }
        if (strlen($this->container['attribute_name']) > 100) {
            return false;
        }
        if ($this->container['attribute_value'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets integration_type
     *
     * @return string
     */
    public function getIntegrationType()
    {
        return $this->container['integration_type'];
    }

    /**
     * Sets integration_type
     *
     * @param string $integration_type Issuer integration setting type; MaxLength: 50
     *
     * @return $this
     */
    public function setIntegrationType($integration_type)
    {
        if ((strlen($integration_type) > 50)) {
            throw new \InvalidArgumentException('invalid length for $integration_type when calling IssuerIntegrationSettingInputDto., must be smaller than or equal to 50.');
        }

        $this->container['integration_type'] = $integration_type;

        return $this;
    }

    /**
     * Gets attribute_name
     *
     * @return string
     */
    public function getAttributeName()
    {
        return $this->container['attribute_name'];
    }

    /**
     * Sets attribute_name
     *
     * @param string $attribute_name Issuer integration setting attribute name; MaxLength: 100
     *
     * @return $this
     */
    public function setAttributeName($attribute_name)
    {
        if ((strlen($attribute_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $attribute_name when calling IssuerIntegrationSettingInputDto., must be smaller than or equal to 100.');
        }

        $this->container['attribute_name'] = $attribute_name;

        return $this;
    }

    /**
     * Gets attribute_value
     *
     * @return string
     */
    public function getAttributeValue()
    {
        return $this->container['attribute_value'];
    }

    /**
     * Sets attribute_value
     *
     * @param string $attribute_value Issuer integration setting attribute value
     *
     * @return $this
     */
    public function setAttributeValue($attribute_value)
    {
        $this->container['attribute_value'] = $attribute_value;

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

