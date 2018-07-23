<?php
/**
 * VirtualOperatorMedia
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
 * VirtualOperatorMedia Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VirtualOperatorMedia implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VirtualOperatorMedia';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'virtual_operator_id' => 'string',
        'virtual_operator' => '\Swagger\Client\Model\VirtualOperator',
        'content' => 'string',
        'content_type' => 'string',
        'media_type' => 'string',
        'creation_date' => '\DateTime',
        'last_update_date' => '\DateTime',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'virtual_operator_id' => 'uuid',
        'virtual_operator' => null,
        'content' => 'byte',
        'content_type' => null,
        'media_type' => null,
        'creation_date' => 'date-time',
        'last_update_date' => 'date-time',
        'id' => 'uuid'
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
        'virtual_operator' => 'VirtualOperator',
        'content' => 'Content',
        'content_type' => 'ContentType',
        'media_type' => 'MediaType',
        'creation_date' => 'CreationDate',
        'last_update_date' => 'LastUpdateDate',
        'id' => 'Id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'virtual_operator_id' => 'setVirtualOperatorId',
        'virtual_operator' => 'setVirtualOperator',
        'content' => 'setContent',
        'content_type' => 'setContentType',
        'media_type' => 'setMediaType',
        'creation_date' => 'setCreationDate',
        'last_update_date' => 'setLastUpdateDate',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'virtual_operator_id' => 'getVirtualOperatorId',
        'virtual_operator' => 'getVirtualOperator',
        'content' => 'getContent',
        'content_type' => 'getContentType',
        'media_type' => 'getMediaType',
        'creation_date' => 'getCreationDate',
        'last_update_date' => 'getLastUpdateDate',
        'id' => 'getId'
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

    const MEDIA_TYPE_LOGO = 'Logo';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMediaTypeAllowableValues()
    {
        return [
            self::MEDIA_TYPE_LOGO,
        ];
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
        $this->container['virtual_operator'] = isset($data['virtual_operator']) ? $data['virtual_operator'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['media_type'] = isset($data['media_type']) ? $data['media_type'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['last_update_date'] = isset($data['last_update_date']) ? $data['last_update_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['content']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['content'])) {
            $invalidProperties[] = "invalid value for 'content', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        $allowedValues = $this->getMediaTypeAllowableValues();
        if (!in_array($this->container['media_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'media_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['content'])) {
            return false;
        }
        $allowedValues = $this->getMediaTypeAllowableValues();
        if (!in_array($this->container['media_type'], $allowedValues)) {
            return false;
        }
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
     * Gets virtual_operator
     *
     * @return \Swagger\Client\Model\VirtualOperator
     */
    public function getVirtualOperator()
    {
        return $this->container['virtual_operator'];
    }

    /**
     * Sets virtual_operator
     *
     * @param \Swagger\Client\Model\VirtualOperator $virtual_operator virtual_operator
     *
     * @return $this
     */
    public function setVirtualOperator($virtual_operator)
    {
        $this->container['virtual_operator'] = $virtual_operator;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content content
     *
     * @return $this
     */
    public function setContent($content)
    {

        if (!is_null($content) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $content))) {
            throw new \InvalidArgumentException("invalid value for $content when calling VirtualOperatorMedia., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param string $content_type content_type
     *
     * @return $this
     */
    public function setContentType($content_type)
    {
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets media_type
     *
     * @return string
     */
    public function getMediaType()
    {
        return $this->container['media_type'];
    }

    /**
     * Sets media_type
     *
     * @param string $media_type media_type
     *
     * @return $this
     */
    public function setMediaType($media_type)
    {
        $allowedValues = $this->getMediaTypeAllowableValues();
        if (!is_null($media_type) && !in_array($media_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'media_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['media_type'] = $media_type;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param \DateTime $creation_date creation_date
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets last_update_date
     *
     * @return \DateTime
     */
    public function getLastUpdateDate()
    {
        return $this->container['last_update_date'];
    }

    /**
     * Sets last_update_date
     *
     * @param \DateTime $last_update_date last_update_date
     *
     * @return $this
     */
    public function setLastUpdateDate($last_update_date)
    {
        $this->container['last_update_date'] = $last_update_date;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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

