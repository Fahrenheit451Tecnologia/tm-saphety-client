<?php
/**
 * LineInputDto
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
 * LineInputDto Class Doc Comment
 *
 * @category Class
 * @description Document line
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LineInputDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LineInputDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'number' => 'string',
        'free_of_charge' => 'string',
        'accounting_cost_code' => 'string',
        'quantity' => 'string',
        'quantity_unit_of_measure' => 'string',
        'taxable_amount' => 'string',
        'tax_category' => 'string',
        'tax_percentage' => 'string',
        'tax_amount' => 'string',
        'exclude_vat' => 'string',
        'unit_price' => 'string',
        'gross_amount' => 'string',
        'net_amount' => 'string',
        'allowance_charges' => '\Swagger\Client\Model\AllowanceChargeInputDto[]',
        'document_references' => '\Swagger\Client\Model\DocumentReferenceInputDto[]',
        'document_line_references' => '\Swagger\Client\Model\DocumentLineReferenceInputDto[]',
        'item' => '\Swagger\Client\Model\ItemInputDto'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'number' => null,
        'free_of_charge' => null,
        'accounting_cost_code' => null,
        'quantity' => null,
        'quantity_unit_of_measure' => null,
        'taxable_amount' => null,
        'tax_category' => null,
        'tax_percentage' => null,
        'tax_amount' => null,
        'exclude_vat' => null,
        'unit_price' => null,
        'gross_amount' => null,
        'net_amount' => null,
        'allowance_charges' => null,
        'document_references' => null,
        'document_line_references' => null,
        'item' => null
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
        'number' => 'Number',
        'free_of_charge' => 'FreeOfCharge',
        'accounting_cost_code' => 'AccountingCostCode',
        'quantity' => 'Quantity',
        'quantity_unit_of_measure' => 'QuantityUnitOfMeasure',
        'taxable_amount' => 'TaxableAmount',
        'tax_category' => 'TaxCategory',
        'tax_percentage' => 'TaxPercentage',
        'tax_amount' => 'TaxAmount',
        'exclude_vat' => 'ExcludeVat',
        'unit_price' => 'UnitPrice',
        'gross_amount' => 'GrossAmount',
        'net_amount' => 'NetAmount',
        'allowance_charges' => 'AllowanceCharges',
        'document_references' => 'DocumentReferences',
        'document_line_references' => 'DocumentLineReferences',
        'item' => 'Item'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
        'free_of_charge' => 'setFreeOfCharge',
        'accounting_cost_code' => 'setAccountingCostCode',
        'quantity' => 'setQuantity',
        'quantity_unit_of_measure' => 'setQuantityUnitOfMeasure',
        'taxable_amount' => 'setTaxableAmount',
        'tax_category' => 'setTaxCategory',
        'tax_percentage' => 'setTaxPercentage',
        'tax_amount' => 'setTaxAmount',
        'exclude_vat' => 'setExcludeVat',
        'unit_price' => 'setUnitPrice',
        'gross_amount' => 'setGrossAmount',
        'net_amount' => 'setNetAmount',
        'allowance_charges' => 'setAllowanceCharges',
        'document_references' => 'setDocumentReferences',
        'document_line_references' => 'setDocumentLineReferences',
        'item' => 'setItem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
        'free_of_charge' => 'getFreeOfCharge',
        'accounting_cost_code' => 'getAccountingCostCode',
        'quantity' => 'getQuantity',
        'quantity_unit_of_measure' => 'getQuantityUnitOfMeasure',
        'taxable_amount' => 'getTaxableAmount',
        'tax_category' => 'getTaxCategory',
        'tax_percentage' => 'getTaxPercentage',
        'tax_amount' => 'getTaxAmount',
        'exclude_vat' => 'getExcludeVat',
        'unit_price' => 'getUnitPrice',
        'gross_amount' => 'getGrossAmount',
        'net_amount' => 'getNetAmount',
        'allowance_charges' => 'getAllowanceCharges',
        'document_references' => 'getDocumentReferences',
        'document_line_references' => 'getDocumentLineReferences',
        'item' => 'getItem'
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['free_of_charge'] = isset($data['free_of_charge']) ? $data['free_of_charge'] : null;
        $this->container['accounting_cost_code'] = isset($data['accounting_cost_code']) ? $data['accounting_cost_code'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['quantity_unit_of_measure'] = isset($data['quantity_unit_of_measure']) ? $data['quantity_unit_of_measure'] : null;
        $this->container['taxable_amount'] = isset($data['taxable_amount']) ? $data['taxable_amount'] : null;
        $this->container['tax_category'] = isset($data['tax_category']) ? $data['tax_category'] : null;
        $this->container['tax_percentage'] = isset($data['tax_percentage']) ? $data['tax_percentage'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['exclude_vat'] = isset($data['exclude_vat']) ? $data['exclude_vat'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['gross_amount'] = isset($data['gross_amount']) ? $data['gross_amount'] : null;
        $this->container['net_amount'] = isset($data['net_amount']) ? $data['net_amount'] : null;
        $this->container['allowance_charges'] = isset($data['allowance_charges']) ? $data['allowance_charges'] : null;
        $this->container['document_references'] = isset($data['document_references']) ? $data['document_references'] : null;
        $this->container['document_line_references'] = isset($data['document_line_references']) ? $data['document_line_references'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if (!is_null($this->container['accounting_cost_code']) && (strlen($this->container['accounting_cost_code']) > 20)) {
            $invalidProperties[] = "invalid value for 'accounting_cost_code', the character length must be smaller than or equal to 20.";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['quantity_unit_of_measure'] === null) {
            $invalidProperties[] = "'quantity_unit_of_measure' can't be null";
        }
        if ($this->container['taxable_amount'] === null) {
            $invalidProperties[] = "'taxable_amount' can't be null";
        }
        if ($this->container['tax_category'] === null) {
            $invalidProperties[] = "'tax_category' can't be null";
        }
        if ($this->container['tax_percentage'] === null) {
            $invalidProperties[] = "'tax_percentage' can't be null";
        }
        if ($this->container['tax_amount'] === null) {
            $invalidProperties[] = "'tax_amount' can't be null";
        }
        if ($this->container['unit_price'] === null) {
            $invalidProperties[] = "'unit_price' can't be null";
        }
        if ($this->container['gross_amount'] === null) {
            $invalidProperties[] = "'gross_amount' can't be null";
        }
        if ($this->container['net_amount'] === null) {
            $invalidProperties[] = "'net_amount' can't be null";
        }
        if ($this->container['item'] === null) {
            $invalidProperties[] = "'item' can't be null";
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

        if ($this->container['number'] === null) {
            return false;
        }
        if (strlen($this->container['accounting_cost_code']) > 20) {
            return false;
        }
        if ($this->container['quantity'] === null) {
            return false;
        }
        if ($this->container['quantity_unit_of_measure'] === null) {
            return false;
        }
        if ($this->container['taxable_amount'] === null) {
            return false;
        }
        if ($this->container['tax_category'] === null) {
            return false;
        }
        if ($this->container['tax_percentage'] === null) {
            return false;
        }
        if ($this->container['tax_amount'] === null) {
            return false;
        }
        if ($this->container['unit_price'] === null) {
            return false;
        }
        if ($this->container['gross_amount'] === null) {
            return false;
        }
        if ($this->container['net_amount'] === null) {
            return false;
        }
        if ($this->container['item'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number Line number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets free_of_charge
     *
     * @return string
     */
    public function getFreeOfCharge()
    {
        return $this->container['free_of_charge'];
    }

    /**
     * Sets free_of_charge
     *
     * @param string $free_of_charge True if item is free of charge. Otherwise false.
     *
     * @return $this
     */
    public function setFreeOfCharge($free_of_charge)
    {
        $this->container['free_of_charge'] = $free_of_charge;

        return $this;
    }

    /**
     * Gets accounting_cost_code
     *
     * @return string
     */
    public function getAccountingCostCode()
    {
        return $this->container['accounting_cost_code'];
    }

    /**
     * Sets accounting_cost_code
     *
     * @param string $accounting_cost_code The Buyer's accounting code applied to the Invoice Line; MaxLength: 20
     *
     * @return $this
     */
    public function setAccountingCostCode($accounting_cost_code)
    {
        if (!is_null($accounting_cost_code) && (strlen($accounting_cost_code) > 20)) {
            throw new \InvalidArgumentException('invalid length for $accounting_cost_code when calling LineInputDto., must be smaller than or equal to 20.');
        }

        $this->container['accounting_cost_code'] = $accounting_cost_code;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param string $quantity Item quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets quantity_unit_of_measure
     *
     * @return string
     */
    public function getQuantityUnitOfMeasure()
    {
        return $this->container['quantity_unit_of_measure'];
    }

    /**
     * Sets quantity_unit_of_measure
     *
     * @param string $quantity_unit_of_measure Unit of measure of the bill item
     *
     * @return $this
     */
    public function setQuantityUnitOfMeasure($quantity_unit_of_measure)
    {
        $this->container['quantity_unit_of_measure'] = $quantity_unit_of_measure;

        return $this;
    }

    /**
     * Gets taxable_amount
     *
     * @return string
     */
    public function getTaxableAmount()
    {
        return $this->container['taxable_amount'];
    }

    /**
     * Sets taxable_amount
     *
     * @param string $taxable_amount Taxable amount
     *
     * @return $this
     */
    public function setTaxableAmount($taxable_amount)
    {
        $this->container['taxable_amount'] = $taxable_amount;

        return $this;
    }

    /**
     * Gets tax_category
     *
     * @return string
     */
    public function getTaxCategory()
    {
        return $this->container['tax_category'];
    }

    /**
     * Sets tax_category
     *
     * @param string $tax_category Tax type or class. See DataElements.TaxCategories
     *
     * @return $this
     */
    public function setTaxCategory($tax_category)
    {
        $this->container['tax_category'] = $tax_category;

        return $this;
    }

    /**
     * Gets tax_percentage
     *
     * @return string
     */
    public function getTaxPercentage()
    {
        return $this->container['tax_percentage'];
    }

    /**
     * Sets tax_percentage
     *
     * @param string $tax_percentage Tax Percentage
     *
     * @return $this
     */
    public function setTaxPercentage($tax_percentage)
    {
        $this->container['tax_percentage'] = $tax_percentage;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return string
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param string $tax_amount Amount of tax withheld
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets exclude_vat
     *
     * @return string
     */
    public function getExcludeVat()
    {
        return $this->container['exclude_vat'];
    }

    /**
     * Sets exclude_vat
     *
     * @param string $exclude_vat True if a line is tax exempted. Otherwise False.
     *
     * @return $this
     */
    public function setExcludeVat($exclude_vat)
    {
        $this->container['exclude_vat'] = $exclude_vat;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return string
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param string $unit_price Unit price of item
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets gross_amount
     *
     * @return string
     */
    public function getGrossAmount()
    {
        return $this->container['gross_amount'];
    }

    /**
     * Sets gross_amount
     *
     * @param string $gross_amount Gross amount. Quantity x unit price. Exclude allowances and charges
     *
     * @return $this
     */
    public function setGrossAmount($gross_amount)
    {
        $this->container['gross_amount'] = $gross_amount;

        return $this;
    }

    /**
     * Gets net_amount
     *
     * @return string
     */
    public function getNetAmount()
    {
        return $this->container['net_amount'];
    }

    /**
     * Sets net_amount
     *
     * @param string $net_amount Net amount. Quantity x unit price. Include allowances and charges
     *
     * @return $this
     */
    public function setNetAmount($net_amount)
    {
        $this->container['net_amount'] = $net_amount;

        return $this;
    }

    /**
     * Gets allowance_charges
     *
     * @return \Swagger\Client\Model\AllowanceChargeInputDto[]
     */
    public function getAllowanceCharges()
    {
        return $this->container['allowance_charges'];
    }

    /**
     * Sets allowance_charges
     *
     * @param \Swagger\Client\Model\AllowanceChargeInputDto[] $allowance_charges allowance_charges
     *
     * @return $this
     */
    public function setAllowanceCharges($allowance_charges)
    {
        $this->container['allowance_charges'] = $allowance_charges;

        return $this;
    }

    /**
     * Gets document_references
     *
     * @return \Swagger\Client\Model\DocumentReferenceInputDto[]
     */
    public function getDocumentReferences()
    {
        return $this->container['document_references'];
    }

    /**
     * Sets document_references
     *
     * @param \Swagger\Client\Model\DocumentReferenceInputDto[] $document_references document_references
     *
     * @return $this
     */
    public function setDocumentReferences($document_references)
    {
        $this->container['document_references'] = $document_references;

        return $this;
    }

    /**
     * Gets document_line_references
     *
     * @return \Swagger\Client\Model\DocumentLineReferenceInputDto[]
     */
    public function getDocumentLineReferences()
    {
        return $this->container['document_line_references'];
    }

    /**
     * Sets document_line_references
     *
     * @param \Swagger\Client\Model\DocumentLineReferenceInputDto[] $document_line_references document_line_references
     *
     * @return $this
     */
    public function setDocumentLineReferences($document_line_references)
    {
        $this->container['document_line_references'] = $document_line_references;

        return $this;
    }

    /**
     * Gets item
     *
     * @return \Swagger\Client\Model\ItemInputDto
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \Swagger\Client\Model\ItemInputDto $item item
     *
     * @return $this
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

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


