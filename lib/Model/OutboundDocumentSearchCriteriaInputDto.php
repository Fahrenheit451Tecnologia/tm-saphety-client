<?php
/**
 * OutboundDocumentSearchCriteriaInputDto
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
 * OutboundDocumentSearchCriteriaInputDto Class Doc Comment
 *
 * @category Class
 * @description Criteria to search created documents
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OutboundDocumentSearchCriteriaInputDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OutboundDocumentSearchCriteriaInputDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'document_number' => 'string',
        'currency' => 'string',
        'company_ids' => 'string[]',
        'issuers' => 'string[]',
        'customers' => 'string[]',
        'include_files' => 'bool',
        'include_attachments' => 'bool',
        'document_types' => 'string[]',
        'document_sub_types' => 'string[]',
        'business_status' => 'string[]',
        'communication_status' => 'string[]',
        'main_notification_email_status' => 'string',
        'creation_date_start' => '\DateTime',
        'creation_date_end' => '\DateTime',
        'document_date_start' => '\DateTime',
        'document_date_end' => '\DateTime',
        'offset' => 'int',
        'number_of_records' => 'int',
        'sort_field' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'document_number' => null,
        'currency' => null,
        'company_ids' => 'uuid',
        'issuers' => 'uuid',
        'customers' => 'uuid',
        'include_files' => null,
        'include_attachments' => null,
        'document_types' => null,
        'document_sub_types' => null,
        'business_status' => null,
        'communication_status' => null,
        'main_notification_email_status' => null,
        'creation_date_start' => 'date-time',
        'creation_date_end' => 'date-time',
        'document_date_start' => 'date-time',
        'document_date_end' => 'date-time',
        'offset' => 'int32',
        'number_of_records' => 'int32',
        'sort_field' => null
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
        'id' => 'Id',
        'document_number' => 'DocumentNumber',
        'currency' => 'Currency',
        'company_ids' => 'CompanyIds',
        'issuers' => 'Issuers',
        'customers' => 'Customers',
        'include_files' => 'IncludeFiles',
        'include_attachments' => 'IncludeAttachments',
        'document_types' => 'DocumentTypes',
        'document_sub_types' => 'DocumentSubTypes',
        'business_status' => 'BusinessStatus',
        'communication_status' => 'CommunicationStatus',
        'main_notification_email_status' => 'MainNotificationEmailStatus',
        'creation_date_start' => 'CreationDateStart',
        'creation_date_end' => 'CreationDateEnd',
        'document_date_start' => 'DocumentDateStart',
        'document_date_end' => 'DocumentDateEnd',
        'offset' => 'Offset',
        'number_of_records' => 'NumberOfRecords',
        'sort_field' => 'SortField'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'document_number' => 'setDocumentNumber',
        'currency' => 'setCurrency',
        'company_ids' => 'setCompanyIds',
        'issuers' => 'setIssuers',
        'customers' => 'setCustomers',
        'include_files' => 'setIncludeFiles',
        'include_attachments' => 'setIncludeAttachments',
        'document_types' => 'setDocumentTypes',
        'document_sub_types' => 'setDocumentSubTypes',
        'business_status' => 'setBusinessStatus',
        'communication_status' => 'setCommunicationStatus',
        'main_notification_email_status' => 'setMainNotificationEmailStatus',
        'creation_date_start' => 'setCreationDateStart',
        'creation_date_end' => 'setCreationDateEnd',
        'document_date_start' => 'setDocumentDateStart',
        'document_date_end' => 'setDocumentDateEnd',
        'offset' => 'setOffset',
        'number_of_records' => 'setNumberOfRecords',
        'sort_field' => 'setSortField'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'document_number' => 'getDocumentNumber',
        'currency' => 'getCurrency',
        'company_ids' => 'getCompanyIds',
        'issuers' => 'getIssuers',
        'customers' => 'getCustomers',
        'include_files' => 'getIncludeFiles',
        'include_attachments' => 'getIncludeAttachments',
        'document_types' => 'getDocumentTypes',
        'document_sub_types' => 'getDocumentSubTypes',
        'business_status' => 'getBusinessStatus',
        'communication_status' => 'getCommunicationStatus',
        'main_notification_email_status' => 'getMainNotificationEmailStatus',
        'creation_date_start' => 'getCreationDateStart',
        'creation_date_end' => 'getCreationDateEnd',
        'document_date_start' => 'getDocumentDateStart',
        'document_date_end' => 'getDocumentDateEnd',
        'offset' => 'getOffset',
        'number_of_records' => 'getNumberOfRecords',
        'sort_field' => 'getSortField'
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

    const DOCUMENT_TYPES_SALES_INVOICE = 'SalesInvoice';
    const DOCUMENT_TYPES_CREDIT_NOTE = 'CreditNote';
    const DOCUMENT_TYPES_DEBIT_NOTE = 'DebitNote';
    const BUSINESS_STATUS_CERTIFIED = 'Certified';
    const BUSINESS_STATUS_RECEIVED = 'Received';
    const BUSINESS_STATUS_ACCEPTED = 'Accepted';
    const BUSINESS_STATUS_REJECTED = 'Rejected';
    const BUSINESS_STATUS_ERROR = 'Error';
    const BUSINESS_STATUS_TACITLY_ACCEPTED = 'TacitlyAccepted';
    const BUSINESS_STATUS_DELIVERED = 'Delivered';
    const BUSINESS_STATUS_REGISTERED = 'Registered';
    const COMMUNICATION_STATUS_NOT_COMMUNICATED = 'NotCommunicated';
    const COMMUNICATION_STATUS_DELIVER_OK = 'DeliverOk';
    const COMMUNICATION_STATUS_WITH_ERRORS = 'WithErrors';
    const COMMUNICATION_STATUS_COMMUNICATION_ERROR = 'CommunicationError';
    const COMMUNICATION_STATUS_UNABLE_TO_DELIVER = 'UnableToDeliver';
    const COMMUNICATION_STATUS_RETRY_SEND = 'RetrySend';
    const MAIN_NOTIFICATION_EMAIL_STATUS_NOT_SENT = 'NotSent';
    const MAIN_NOTIFICATION_EMAIL_STATUS_SENT = 'Sent';
    const MAIN_NOTIFICATION_EMAIL_STATUS_DELIVERED = 'Delivered';
    const MAIN_NOTIFICATION_EMAIL_STATUS_BOUNCE = 'Bounce';
    const MAIN_NOTIFICATION_EMAIL_STATUS_DEFERRED = 'Deferred';
    const MAIN_NOTIFICATION_EMAIL_STATUS_DROPPED = 'Dropped';
    const MAIN_NOTIFICATION_EMAIL_STATUS_OPEN = 'Open';
    const MAIN_NOTIFICATION_EMAIL_STATUS_UNKNOWN = 'Unknown';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDocumentTypesAllowableValues()
    {
        return [
            self::DOCUMENT_TYPES_SALES_INVOICE,
            self::DOCUMENT_TYPES_CREDIT_NOTE,
            self::DOCUMENT_TYPES_DEBIT_NOTE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBusinessStatusAllowableValues()
    {
        return [
            self::BUSINESS_STATUS_CERTIFIED,
            self::BUSINESS_STATUS_RECEIVED,
            self::BUSINESS_STATUS_ACCEPTED,
            self::BUSINESS_STATUS_REJECTED,
            self::BUSINESS_STATUS_ERROR,
            self::BUSINESS_STATUS_TACITLY_ACCEPTED,
            self::BUSINESS_STATUS_DELIVERED,
            self::BUSINESS_STATUS_REGISTERED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCommunicationStatusAllowableValues()
    {
        return [
            self::COMMUNICATION_STATUS_NOT_COMMUNICATED,
            self::COMMUNICATION_STATUS_DELIVER_OK,
            self::COMMUNICATION_STATUS_WITH_ERRORS,
            self::COMMUNICATION_STATUS_COMMUNICATION_ERROR,
            self::COMMUNICATION_STATUS_UNABLE_TO_DELIVER,
            self::COMMUNICATION_STATUS_RETRY_SEND,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMainNotificationEmailStatusAllowableValues()
    {
        return [
            self::MAIN_NOTIFICATION_EMAIL_STATUS_NOT_SENT,
            self::MAIN_NOTIFICATION_EMAIL_STATUS_SENT,
            self::MAIN_NOTIFICATION_EMAIL_STATUS_DELIVERED,
            self::MAIN_NOTIFICATION_EMAIL_STATUS_BOUNCE,
            self::MAIN_NOTIFICATION_EMAIL_STATUS_DEFERRED,
            self::MAIN_NOTIFICATION_EMAIL_STATUS_DROPPED,
            self::MAIN_NOTIFICATION_EMAIL_STATUS_OPEN,
            self::MAIN_NOTIFICATION_EMAIL_STATUS_UNKNOWN,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['document_number'] = isset($data['document_number']) ? $data['document_number'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['company_ids'] = isset($data['company_ids']) ? $data['company_ids'] : null;
        $this->container['issuers'] = isset($data['issuers']) ? $data['issuers'] : null;
        $this->container['customers'] = isset($data['customers']) ? $data['customers'] : null;
        $this->container['include_files'] = isset($data['include_files']) ? $data['include_files'] : null;
        $this->container['include_attachments'] = isset($data['include_attachments']) ? $data['include_attachments'] : null;
        $this->container['document_types'] = isset($data['document_types']) ? $data['document_types'] : null;
        $this->container['document_sub_types'] = isset($data['document_sub_types']) ? $data['document_sub_types'] : null;
        $this->container['business_status'] = isset($data['business_status']) ? $data['business_status'] : null;
        $this->container['communication_status'] = isset($data['communication_status']) ? $data['communication_status'] : null;
        $this->container['main_notification_email_status'] = isset($data['main_notification_email_status']) ? $data['main_notification_email_status'] : null;
        $this->container['creation_date_start'] = isset($data['creation_date_start']) ? $data['creation_date_start'] : null;
        $this->container['creation_date_end'] = isset($data['creation_date_end']) ? $data['creation_date_end'] : null;
        $this->container['document_date_start'] = isset($data['document_date_start']) ? $data['document_date_start'] : null;
        $this->container['document_date_end'] = isset($data['document_date_end']) ? $data['document_date_end'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['number_of_records'] = isset($data['number_of_records']) ? $data['number_of_records'] : null;
        $this->container['sort_field'] = isset($data['sort_field']) ? $data['sort_field'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['document_number']) && (strlen($this->container['document_number']) > 20)) {
            $invalidProperties[] = "invalid value for 'document_number', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['currency']) && (strlen($this->container['currency']) > 50)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 50.";
        }

        $allowedValues = $this->getMainNotificationEmailStatusAllowableValues();
        if (!in_array($this->container['main_notification_email_status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'main_notification_email_status', must be one of '%s'",
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

        if (strlen($this->container['document_number']) > 20) {
            return false;
        }
        if (strlen($this->container['currency']) > 50) {
            return false;
        }
        $allowedValues = $this->getMainNotificationEmailStatusAllowableValues();
        if (!in_array($this->container['main_notification_email_status'], $allowedValues)) {
            return false;
        }
        return true;
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
     * @param string $id Get by Id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets document_number
     *
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->container['document_number'];
    }

    /**
     * Sets document_number
     *
     * @param string $document_number Get by document number; MaxLength: 20
     *
     * @return $this
     */
    public function setDocumentNumber($document_number)
    {
        if (!is_null($document_number) && (strlen($document_number) > 20)) {
            throw new \InvalidArgumentException('invalid length for $document_number when calling OutboundDocumentSearchCriteriaInputDto., must be smaller than or equal to 20.');
        }

        $this->container['document_number'] = $document_number;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Get by currency; MaxLength: 50
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        if (!is_null($currency) && (strlen($currency) > 50)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling OutboundDocumentSearchCriteriaInputDto., must be smaller than or equal to 50.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets company_ids
     *
     * @return string[]
     */
    public function getCompanyIds()
    {
        return $this->container['company_ids'];
    }

    /**
     * Sets company_ids
     *
     * @param string[] $company_ids Get by Issuer
     *
     * @return $this
     */
    public function setCompanyIds($company_ids)
    {
        $this->container['company_ids'] = $company_ids;

        return $this;
    }

    /**
     * Gets issuers
     *
     * @return string[]
     */
    public function getIssuers()
    {
        return $this->container['issuers'];
    }

    /**
     * Sets issuers
     *
     * @param string[] $issuers Get by Issuer
     *
     * @return $this
     */
    public function setIssuers($issuers)
    {
        $this->container['issuers'] = $issuers;

        return $this;
    }

    /**
     * Gets customers
     *
     * @return string[]
     */
    public function getCustomers()
    {
        return $this->container['customers'];
    }

    /**
     * Sets customers
     *
     * @param string[] $customers Get by Customer
     *
     * @return $this
     */
    public function setCustomers($customers)
    {
        $this->container['customers'] = $customers;

        return $this;
    }

    /**
     * Gets include_files
     *
     * @return bool
     */
    public function getIncludeFiles()
    {
        return $this->container['include_files'];
    }

    /**
     * Sets include_files
     *
     * @param bool $include_files Include Pdf and UBL
     *
     * @return $this
     */
    public function setIncludeFiles($include_files)
    {
        $this->container['include_files'] = $include_files;

        return $this;
    }

    /**
     * Gets include_attachments
     *
     * @return bool
     */
    public function getIncludeAttachments()
    {
        return $this->container['include_attachments'];
    }

    /**
     * Sets include_attachments
     *
     * @param bool $include_attachments Include attachments
     *
     * @return $this
     */
    public function setIncludeAttachments($include_attachments)
    {
        $this->container['include_attachments'] = $include_attachments;

        return $this;
    }

    /**
     * Gets document_types
     *
     * @return string[]
     */
    public function getDocumentTypes()
    {
        return $this->container['document_types'];
    }

    /**
     * Sets document_types
     *
     * @param string[] $document_types List of document types to search
     *
     * @return $this
     */
    public function setDocumentTypes($document_types)
    {
        $allowedValues = $this->getDocumentTypesAllowableValues();
        if (!is_null($document_types) && array_diff($document_types, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'document_types', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['document_types'] = $document_types;

        return $this;
    }

    /**
     * Gets document_sub_types
     *
     * @return string[]
     */
    public function getDocumentSubTypes()
    {
        return $this->container['document_sub_types'];
    }

    /**
     * Sets document_sub_types
     *
     * @param string[] $document_sub_types List of document sub types to search
     *
     * @return $this
     */
    public function setDocumentSubTypes($document_sub_types)
    {
        $this->container['document_sub_types'] = $document_sub_types;

        return $this;
    }

    /**
     * Gets business_status
     *
     * @return string[]
     */
    public function getBusinessStatus()
    {
        return $this->container['business_status'];
    }

    /**
     * Sets business_status
     *
     * @param string[] $business_status List of business status to search
     *
     * @return $this
     */
    public function setBusinessStatus($business_status)
    {
        $allowedValues = $this->getBusinessStatusAllowableValues();
        if (!is_null($business_status) && array_diff($business_status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'business_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['business_status'] = $business_status;

        return $this;
    }

    /**
     * Gets communication_status
     *
     * @return string[]
     */
    public function getCommunicationStatus()
    {
        return $this->container['communication_status'];
    }

    /**
     * Sets communication_status
     *
     * @param string[] $communication_status List of communication status to search
     *
     * @return $this
     */
    public function setCommunicationStatus($communication_status)
    {
        $allowedValues = $this->getCommunicationStatusAllowableValues();
        if (!is_null($communication_status) && array_diff($communication_status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'communication_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['communication_status'] = $communication_status;

        return $this;
    }

    /**
     * Gets main_notification_email_status
     *
     * @return string
     */
    public function getMainNotificationEmailStatus()
    {
        return $this->container['main_notification_email_status'];
    }

    /**
     * Sets main_notification_email_status
     *
     * @param string $main_notification_email_status Status of mais email
     *
     * @return $this
     */
    public function setMainNotificationEmailStatus($main_notification_email_status)
    {
        $allowedValues = $this->getMainNotificationEmailStatusAllowableValues();
        if (!is_null($main_notification_email_status) && !in_array($main_notification_email_status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'main_notification_email_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['main_notification_email_status'] = $main_notification_email_status;

        return $this;
    }

    /**
     * Gets creation_date_start
     *
     * @return \DateTime
     */
    public function getCreationDateStart()
    {
        return $this->container['creation_date_start'];
    }

    /**
     * Sets creation_date_start
     *
     * @param \DateTime $creation_date_start Document Creation from
     *
     * @return $this
     */
    public function setCreationDateStart($creation_date_start)
    {
        $this->container['creation_date_start'] = $creation_date_start;

        return $this;
    }

    /**
     * Gets creation_date_end
     *
     * @return \DateTime
     */
    public function getCreationDateEnd()
    {
        return $this->container['creation_date_end'];
    }

    /**
     * Sets creation_date_end
     *
     * @param \DateTime $creation_date_end Document creation to
     *
     * @return $this
     */
    public function setCreationDateEnd($creation_date_end)
    {
        $this->container['creation_date_end'] = $creation_date_end;

        return $this;
    }

    /**
     * Gets document_date_start
     *
     * @return \DateTime
     */
    public function getDocumentDateStart()
    {
        return $this->container['document_date_start'];
    }

    /**
     * Sets document_date_start
     *
     * @param \DateTime $document_date_start Document issue date from
     *
     * @return $this
     */
    public function setDocumentDateStart($document_date_start)
    {
        $this->container['document_date_start'] = $document_date_start;

        return $this;
    }

    /**
     * Gets document_date_end
     *
     * @return \DateTime
     */
    public function getDocumentDateEnd()
    {
        return $this->container['document_date_end'];
    }

    /**
     * Sets document_date_end
     *
     * @param \DateTime $document_date_end Document issue date to
     *
     * @return $this
     */
    public function setDocumentDateEnd($document_date_end)
    {
        $this->container['document_date_end'] = $document_date_end;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int $offset offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets number_of_records
     *
     * @return int
     */
    public function getNumberOfRecords()
    {
        return $this->container['number_of_records'];
    }

    /**
     * Sets number_of_records
     *
     * @param int $number_of_records number_of_records
     *
     * @return $this
     */
    public function setNumberOfRecords($number_of_records)
    {
        $this->container['number_of_records'] = $number_of_records;

        return $this;
    }

    /**
     * Gets sort_field
     *
     * @return string
     */
    public function getSortField()
    {
        return $this->container['sort_field'];
    }

    /**
     * Sets sort_field
     *
     * @param string $sort_field sort_field
     *
     * @return $this
     */
    public function setSortField($sort_field)
    {
        $this->container['sort_field'] = $sort_field;

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


