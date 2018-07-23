<?php
/**
 * UserAccountVirtualOperatorMembership
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
 * UserAccountVirtualOperatorMembership Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserAccountVirtualOperatorMembership implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserAccountVirtualOperatorMembership';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'virtual_operator_id' => 'string',
        'virtual_operator_alias' => 'string',
        'virtual_operator_name' => 'string',
        'roles' => '\Swagger\Client\Model\UserAccountRole[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'virtual_operator_id' => 'uuid',
        'virtual_operator_alias' => null,
        'virtual_operator_name' => null,
        'roles' => null
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
        'virtual_operator_id' => 'VirtualOperatorId',
        'virtual_operator_alias' => 'VirtualOperatorAlias',
        'virtual_operator_name' => 'VirtualOperatorName',
        'roles' => 'Roles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'virtual_operator_id' => 'setVirtualOperatorId',
        'virtual_operator_alias' => 'setVirtualOperatorAlias',
        'virtual_operator_name' => 'setVirtualOperatorName',
        'roles' => 'setRoles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'virtual_operator_id' => 'getVirtualOperatorId',
        'virtual_operator_alias' => 'getVirtualOperatorAlias',
        'virtual_operator_name' => 'getVirtualOperatorName',
        'roles' => 'getRoles'
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
        $this->container['virtual_operator_id'] = isset($data['virtual_operator_id']) ? $data['virtual_operator_id'] : null;
        $this->container['virtual_operator_alias'] = isset($data['virtual_operator_alias']) ? $data['virtual_operator_alias'] : null;
        $this->container['virtual_operator_name'] = isset($data['virtual_operator_name']) ? $data['virtual_operator_name'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
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
     * Gets virtual_operator_id
     *
     * @return string
     */
    public function getVirtualOperatorId()
    {
        return $this->container['virtual_operator_id'];
    }

    /**
     * Sets virtual_operator_id
     *
     * @param string $virtual_operator_id virtual_operator_id
     *
     * @return $this
     */
    public function setVirtualOperatorId($virtual_operator_id)
    {
        $this->container['virtual_operator_id'] = $virtual_operator_id;

        return $this;
    }

    /**
     * Gets virtual_operator_alias
     *
     * @return string
     */
    public function getVirtualOperatorAlias()
    {
        return $this->container['virtual_operator_alias'];
    }

    /**
     * Sets virtual_operator_alias
     *
     * @param string $virtual_operator_alias virtual_operator_alias
     *
     * @return $this
     */
    public function setVirtualOperatorAlias($virtual_operator_alias)
    {
        $this->container['virtual_operator_alias'] = $virtual_operator_alias;

        return $this;
    }

    /**
     * Gets virtual_operator_name
     *
     * @return string
     */
    public function getVirtualOperatorName()
    {
        return $this->container['virtual_operator_name'];
    }

    /**
     * Sets virtual_operator_name
     *
     * @param string $virtual_operator_name virtual_operator_name
     *
     * @return $this
     */
    public function setVirtualOperatorName($virtual_operator_name)
    {
        $this->container['virtual_operator_name'] = $virtual_operator_name;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return \Swagger\Client\Model\UserAccountRole[]
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param \Swagger\Client\Model\UserAccountRole[] $roles roles
     *
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;

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

