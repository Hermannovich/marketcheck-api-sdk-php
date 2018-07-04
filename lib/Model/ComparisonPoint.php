<?php
/**
 * ComparisonPoint
 *
 * PHP version 5
 *
 * @category Class
 * @package  marketcheck\api\sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketcheck Cars API
 *
 * <b>Access the New, Used and Certified cars inventories for all Car Dealers in US.</b> <br/>The data is sourced from online listings by over 44,000 Car dealers in US. At any time, there are about 6.2M searchable listings (about 1.9M unique VINs) for Used & Certified cars and about 6.6M (about 3.9M unique VINs) New Car listings from all over US. We use this API at the back for our website <a href='https://www.marketcheck.com' target='_blank'>www.marketcheck.com</a> and our Android and iOS mobile apps too.<br/><h5> Few useful links : </h5><ul><li>A quick view of the API and the use cases is depicated <a href='https://portals.marketcheck.com/mcapi/' target='_blank'>here</a></li><li>The Postman collection with various usages of the API is shared here https://www.getpostman.com/collections/2752684ff636cdd7bac2</li></ul>
 *
 * OpenAPI spec version: 1.0.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace marketcheck\api\sdk\Model;

use \ArrayAccess;
use \marketcheck\api\sdk\ObjectSerializer;

/**
 * ComparisonPoint Class Doc Comment
 *
 * @category Class
 * @package  marketcheck\api\sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ComparisonPoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ComparisonPoint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'similar_vehicles_count' => 'float',
        'dealer_indicator' => 'string',
        'vin_price' => 'float',
        'fair_deal_price' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'similar_vehicles_count' => null,
        'dealer_indicator' => null,
        'vin_price' => null,
        'fair_deal_price' => null
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
        'similar_vehicles_count' => 'similar_vehicles_count',
        'dealer_indicator' => 'dealer_indicator',
        'vin_price' => 'vin_price',
        'fair_deal_price' => 'fair_deal_price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'similar_vehicles_count' => 'setSimilarVehiclesCount',
        'dealer_indicator' => 'setDealerIndicator',
        'vin_price' => 'setVinPrice',
        'fair_deal_price' => 'setFairDealPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'similar_vehicles_count' => 'getSimilarVehiclesCount',
        'dealer_indicator' => 'getDealerIndicator',
        'vin_price' => 'getVinPrice',
        'fair_deal_price' => 'getFairDealPrice'
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
        $this->container['similar_vehicles_count'] = isset($data['similar_vehicles_count']) ? $data['similar_vehicles_count'] : null;
        $this->container['dealer_indicator'] = isset($data['dealer_indicator']) ? $data['dealer_indicator'] : null;
        $this->container['vin_price'] = isset($data['vin_price']) ? $data['vin_price'] : null;
        $this->container['fair_deal_price'] = isset($data['fair_deal_price']) ? $data['fair_deal_price'] : null;
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
     * Gets similar_vehicles_count
     *
     * @return float
     */
    public function getSimilarVehiclesCount()
    {
        return $this->container['similar_vehicles_count'];
    }

    /**
     * Sets similar_vehicles_count
     *
     * @param float $similar_vehicles_count Similar Vehicles Count
     *
     * @return $this
     */
    public function setSimilarVehiclesCount($similar_vehicles_count)
    {
        $this->container['similar_vehicles_count'] = $similar_vehicles_count;

        return $this;
    }

    /**
     * Gets dealer_indicator
     *
     * @return string
     */
    public function getDealerIndicator()
    {
        return $this->container['dealer_indicator'];
    }

    /**
     * Sets dealer_indicator
     *
     * @param string $dealer_indicator Deal Indicator
     *
     * @return $this
     */
    public function setDealerIndicator($dealer_indicator)
    {
        $this->container['dealer_indicator'] = $dealer_indicator;

        return $this;
    }

    /**
     * Gets vin_price
     *
     * @return float
     */
    public function getVinPrice()
    {
        return $this->container['vin_price'];
    }

    /**
     * Sets vin_price
     *
     * @param float $vin_price Price for Vin
     *
     * @return $this
     */
    public function setVinPrice($vin_price)
    {
        $this->container['vin_price'] = $vin_price;

        return $this;
    }

    /**
     * Gets fair_deal_price
     *
     * @return float
     */
    public function getFairDealPrice()
    {
        return $this->container['fair_deal_price'];
    }

    /**
     * Sets fair_deal_price
     *
     * @param float $fair_deal_price Fair Deal Price
     *
     * @return $this
     */
    public function setFairDealPrice($fair_deal_price)
    {
        $this->container['fair_deal_price'] = $fair_deal_price;

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


