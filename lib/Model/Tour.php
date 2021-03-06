<?php
/**
 * Tour
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * fareharbor API
 *
 * This is a simple API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: you@your-company.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.21
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
 * Tour Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Tour implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Tour';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'image_cdn_url' => 'string',
'description' => 'string',
'cancellation_policy' => 'string',
'images' => '\Swagger\Client\Model\TourImage[]',
'description_bullets' => 'string[]',
'locations' => '\Swagger\Client\Model\Location[]',
'is_pickup_ever_available' => 'bool',
'headline' => 'string',
'description_safe_html' => 'string',
'location' => 'string',
'booking_notes' => 'string',
'pk' => 'int',
'description_text' => 'string',
'customer_prototypes' => '\Swagger\Client\Model\CustomerPrototype[]',
'tax_percentage' => 'float',
'name' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'image_cdn_url' => null,
'description' => null,
'cancellation_policy' => null,
'images' => null,
'description_bullets' => null,
'locations' => null,
'is_pickup_ever_available' => null,
'headline' => null,
'description_safe_html' => null,
'location' => null,
'booking_notes' => null,
'pk' => null,
'description_text' => null,
'customer_prototypes' => null,
'tax_percentage' => 'float',
'name' => null    ];

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
        'image_cdn_url' => 'image_cdn_url',
'description' => 'description',
'cancellation_policy' => 'cancellation_policy',
'images' => 'images',
'description_bullets' => 'description_bullets',
'locations' => 'locations',
'is_pickup_ever_available' => 'is_pickup_ever_available',
'headline' => 'headline',
'description_safe_html' => 'description_safe_html',
'location' => 'location',
'booking_notes' => 'booking_notes',
'pk' => 'pk',
'description_text' => 'description_text',
'customer_prototypes' => 'customer_prototypes',
'tax_percentage' => 'tax_percentage',
'name' => 'name'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'image_cdn_url' => 'setImageCdnUrl',
'description' => 'setDescription',
'cancellation_policy' => 'setCancellationPolicy',
'images' => 'setImages',
'description_bullets' => 'setDescriptionBullets',
'locations' => 'setLocations',
'is_pickup_ever_available' => 'setIsPickupEverAvailable',
'headline' => 'setHeadline',
'description_safe_html' => 'setDescriptionSafeHtml',
'location' => 'setLocation',
'booking_notes' => 'setBookingNotes',
'pk' => 'setPk',
'description_text' => 'setDescriptionText',
'customer_prototypes' => 'setCustomerPrototypes',
'tax_percentage' => 'setTaxPercentage',
'name' => 'setName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'image_cdn_url' => 'getImageCdnUrl',
'description' => 'getDescription',
'cancellation_policy' => 'getCancellationPolicy',
'images' => 'getImages',
'description_bullets' => 'getDescriptionBullets',
'locations' => 'getLocations',
'is_pickup_ever_available' => 'getIsPickupEverAvailable',
'headline' => 'getHeadline',
'description_safe_html' => 'getDescriptionSafeHtml',
'location' => 'getLocation',
'booking_notes' => 'getBookingNotes',
'pk' => 'getPk',
'description_text' => 'getDescriptionText',
'customer_prototypes' => 'getCustomerPrototypes',
'tax_percentage' => 'getTaxPercentage',
'name' => 'getName'    ];

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
        $this->container['image_cdn_url'] = isset($data['image_cdn_url']) ? $data['image_cdn_url'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['cancellation_policy'] = isset($data['cancellation_policy']) ? $data['cancellation_policy'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['description_bullets'] = isset($data['description_bullets']) ? $data['description_bullets'] : null;
        $this->container['locations'] = isset($data['locations']) ? $data['locations'] : null;
        $this->container['is_pickup_ever_available'] = isset($data['is_pickup_ever_available']) ? $data['is_pickup_ever_available'] : null;
        $this->container['headline'] = isset($data['headline']) ? $data['headline'] : null;
        $this->container['description_safe_html'] = isset($data['description_safe_html']) ? $data['description_safe_html'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['booking_notes'] = isset($data['booking_notes']) ? $data['booking_notes'] : null;
        $this->container['pk'] = isset($data['pk']) ? $data['pk'] : null;
        $this->container['description_text'] = isset($data['description_text']) ? $data['description_text'] : null;
        $this->container['customer_prototypes'] = isset($data['customer_prototypes']) ? $data['customer_prototypes'] : null;
        $this->container['tax_percentage'] = isset($data['tax_percentage']) ? $data['tax_percentage'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets image_cdn_url
     *
     * @return string
     */
    public function getImageCdnUrl()
    {
        return $this->container['image_cdn_url'];
    }

    /**
     * Sets image_cdn_url
     *
     * @param string $image_cdn_url image_cdn_url
     *
     * @return $this
     */
    public function setImageCdnUrl($image_cdn_url)
    {
        $this->container['image_cdn_url'] = $image_cdn_url;

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
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets cancellation_policy
     *
     * @return string
     */
    public function getCancellationPolicy()
    {
        return $this->container['cancellation_policy'];
    }

    /**
     * Sets cancellation_policy
     *
     * @param string $cancellation_policy cancellation_policy
     *
     * @return $this
     */
    public function setCancellationPolicy($cancellation_policy)
    {
        $this->container['cancellation_policy'] = $cancellation_policy;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \Swagger\Client\Model\TourImage[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \Swagger\Client\Model\TourImage[] $images images
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets description_bullets
     *
     * @return string[]
     */
    public function getDescriptionBullets()
    {
        return $this->container['description_bullets'];
    }

    /**
     * Sets description_bullets
     *
     * @param string[] $description_bullets description_bullets
     *
     * @return $this
     */
    public function setDescriptionBullets($description_bullets)
    {
        $this->container['description_bullets'] = $description_bullets;

        return $this;
    }

    /**
     * Gets locations
     *
     * @return \Swagger\Client\Model\Location[]
     */
    public function getLocations()
    {
        return $this->container['locations'];
    }

    /**
     * Sets locations
     *
     * @param \Swagger\Client\Model\Location[] $locations locations
     *
     * @return $this
     */
    public function setLocations($locations)
    {
        $this->container['locations'] = $locations;

        return $this;
    }

    /**
     * Gets is_pickup_ever_available
     *
     * @return bool
     */
    public function getIsPickupEverAvailable()
    {
        return $this->container['is_pickup_ever_available'];
    }

    /**
     * Sets is_pickup_ever_available
     *
     * @param bool $is_pickup_ever_available is_pickup_ever_available
     *
     * @return $this
     */
    public function setIsPickupEverAvailable($is_pickup_ever_available)
    {
        $this->container['is_pickup_ever_available'] = $is_pickup_ever_available;

        return $this;
    }

    /**
     * Gets headline
     *
     * @return string
     */
    public function getHeadline()
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline
     *
     * @param string $headline headline
     *
     * @return $this
     */
    public function setHeadline($headline)
    {
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets description_safe_html
     *
     * @return string
     */
    public function getDescriptionSafeHtml()
    {
        return $this->container['description_safe_html'];
    }

    /**
     * Sets description_safe_html
     *
     * @param string $description_safe_html description_safe_html
     *
     * @return $this
     */
    public function setDescriptionSafeHtml($description_safe_html)
    {
        $this->container['description_safe_html'] = $description_safe_html;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets booking_notes
     *
     * @return string
     */
    public function getBookingNotes()
    {
        return $this->container['booking_notes'];
    }

    /**
     * Sets booking_notes
     *
     * @param string $booking_notes booking_notes
     *
     * @return $this
     */
    public function setBookingNotes($booking_notes)
    {
        $this->container['booking_notes'] = $booking_notes;

        return $this;
    }

    /**
     * Gets pk
     *
     * @return int
     */
    public function getPk()
    {
        return $this->container['pk'];
    }

    /**
     * Sets pk
     *
     * @param int $pk pk
     *
     * @return $this
     */
    public function setPk($pk)
    {
        $this->container['pk'] = $pk;

        return $this;
    }

    /**
     * Gets description_text
     *
     * @return string
     */
    public function getDescriptionText()
    {
        return $this->container['description_text'];
    }

    /**
     * Sets description_text
     *
     * @param string $description_text description_text
     *
     * @return $this
     */
    public function setDescriptionText($description_text)
    {
        $this->container['description_text'] = $description_text;

        return $this;
    }

    /**
     * Gets customer_prototypes
     *
     * @return \Swagger\Client\Model\CustomerPrototype[]
     */
    public function getCustomerPrototypes()
    {
        return $this->container['customer_prototypes'];
    }

    /**
     * Sets customer_prototypes
     *
     * @param \Swagger\Client\Model\CustomerPrototype[] $customer_prototypes customer_prototypes
     *
     * @return $this
     */
    public function setCustomerPrototypes($customer_prototypes)
    {
        $this->container['customer_prototypes'] = $customer_prototypes;

        return $this;
    }

    /**
     * Gets tax_percentage
     *
     * @return float
     */
    public function getTaxPercentage()
    {
        return $this->container['tax_percentage'];
    }

    /**
     * Sets tax_percentage
     *
     * @param float $tax_percentage tax_percentage
     *
     * @return $this
     */
    public function setTaxPercentage($tax_percentage)
    {
        $this->container['tax_percentage'] = $tax_percentage;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
