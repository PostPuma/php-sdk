<?php
/**
 * VersionOptions
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PostPuma - OpenAPI 3.0
 *
 * PostPuma API specifications
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@postpuma.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * VersionOptions Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VersionOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Version_options';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tiktok' => '\OpenAPI\Client\Model\VersionOptionsTiktok',
        'youtube' => '\OpenAPI\Client\Model\VersionOptionsYoutube',
        'linkedin' => '\OpenAPI\Client\Model\VersionOptionsLinkedin',
        'mastodon' => '\OpenAPI\Client\Model\VersionOptionsMastodon',
        'instagram' => '\OpenAPI\Client\Model\VersionOptionsInstagram',
        'pinterest' => '\OpenAPI\Client\Model\VersionOptionsPinterest',
        'facebook_page' => '\OpenAPI\Client\Model\VersionOptionsInstagram'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tiktok' => null,
        'youtube' => null,
        'linkedin' => null,
        'mastodon' => null,
        'instagram' => null,
        'pinterest' => null,
        'facebook_page' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tiktok' => false,
        'youtube' => false,
        'linkedin' => false,
        'mastodon' => false,
        'instagram' => false,
        'pinterest' => false,
        'facebook_page' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'tiktok' => 'tiktok',
        'youtube' => 'youtube',
        'linkedin' => 'linkedin',
        'mastodon' => 'mastodon',
        'instagram' => 'instagram',
        'pinterest' => 'pinterest',
        'facebook_page' => 'facebook_page'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tiktok' => 'setTiktok',
        'youtube' => 'setYoutube',
        'linkedin' => 'setLinkedin',
        'mastodon' => 'setMastodon',
        'instagram' => 'setInstagram',
        'pinterest' => 'setPinterest',
        'facebook_page' => 'setFacebookPage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tiktok' => 'getTiktok',
        'youtube' => 'getYoutube',
        'linkedin' => 'getLinkedin',
        'mastodon' => 'getMastodon',
        'instagram' => 'getInstagram',
        'pinterest' => 'getPinterest',
        'facebook_page' => 'getFacebookPage'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('tiktok', $data ?? [], null);
        $this->setIfExists('youtube', $data ?? [], null);
        $this->setIfExists('linkedin', $data ?? [], null);
        $this->setIfExists('mastodon', $data ?? [], null);
        $this->setIfExists('instagram', $data ?? [], null);
        $this->setIfExists('pinterest', $data ?? [], null);
        $this->setIfExists('facebook_page', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets tiktok
     *
     * @return \OpenAPI\Client\Model\VersionOptionsTiktok|null
     */
    public function getTiktok()
    {
        return $this->container['tiktok'];
    }

    /**
     * Sets tiktok
     *
     * @param \OpenAPI\Client\Model\VersionOptionsTiktok|null $tiktok tiktok
     *
     * @return self
     */
    public function setTiktok($tiktok)
    {
        if (is_null($tiktok)) {
            throw new \InvalidArgumentException('non-nullable tiktok cannot be null');
        }
        $this->container['tiktok'] = $tiktok;

        return $this;
    }

    /**
     * Gets youtube
     *
     * @return \OpenAPI\Client\Model\VersionOptionsYoutube|null
     */
    public function getYoutube()
    {
        return $this->container['youtube'];
    }

    /**
     * Sets youtube
     *
     * @param \OpenAPI\Client\Model\VersionOptionsYoutube|null $youtube youtube
     *
     * @return self
     */
    public function setYoutube($youtube)
    {
        if (is_null($youtube)) {
            throw new \InvalidArgumentException('non-nullable youtube cannot be null');
        }
        $this->container['youtube'] = $youtube;

        return $this;
    }

    /**
     * Gets linkedin
     *
     * @return \OpenAPI\Client\Model\VersionOptionsLinkedin|null
     */
    public function getLinkedin()
    {
        return $this->container['linkedin'];
    }

    /**
     * Sets linkedin
     *
     * @param \OpenAPI\Client\Model\VersionOptionsLinkedin|null $linkedin linkedin
     *
     * @return self
     */
    public function setLinkedin($linkedin)
    {
        if (is_null($linkedin)) {
            throw new \InvalidArgumentException('non-nullable linkedin cannot be null');
        }
        $this->container['linkedin'] = $linkedin;

        return $this;
    }

    /**
     * Gets mastodon
     *
     * @return \OpenAPI\Client\Model\VersionOptionsMastodon|null
     */
    public function getMastodon()
    {
        return $this->container['mastodon'];
    }

    /**
     * Sets mastodon
     *
     * @param \OpenAPI\Client\Model\VersionOptionsMastodon|null $mastodon mastodon
     *
     * @return self
     */
    public function setMastodon($mastodon)
    {
        if (is_null($mastodon)) {
            throw new \InvalidArgumentException('non-nullable mastodon cannot be null');
        }
        $this->container['mastodon'] = $mastodon;

        return $this;
    }

    /**
     * Gets instagram
     *
     * @return \OpenAPI\Client\Model\VersionOptionsInstagram|null
     */
    public function getInstagram()
    {
        return $this->container['instagram'];
    }

    /**
     * Sets instagram
     *
     * @param \OpenAPI\Client\Model\VersionOptionsInstagram|null $instagram instagram
     *
     * @return self
     */
    public function setInstagram($instagram)
    {
        if (is_null($instagram)) {
            throw new \InvalidArgumentException('non-nullable instagram cannot be null');
        }
        $this->container['instagram'] = $instagram;

        return $this;
    }

    /**
     * Gets pinterest
     *
     * @return \OpenAPI\Client\Model\VersionOptionsPinterest|null
     */
    public function getPinterest()
    {
        return $this->container['pinterest'];
    }

    /**
     * Sets pinterest
     *
     * @param \OpenAPI\Client\Model\VersionOptionsPinterest|null $pinterest pinterest
     *
     * @return self
     */
    public function setPinterest($pinterest)
    {
        if (is_null($pinterest)) {
            throw new \InvalidArgumentException('non-nullable pinterest cannot be null');
        }
        $this->container['pinterest'] = $pinterest;

        return $this;
    }

    /**
     * Gets facebook_page
     *
     * @return \OpenAPI\Client\Model\VersionOptionsInstagram|null
     */
    public function getFacebookPage()
    {
        return $this->container['facebook_page'];
    }

    /**
     * Sets facebook_page
     *
     * @param \OpenAPI\Client\Model\VersionOptionsInstagram|null $facebook_page facebook_page
     *
     * @return self
     */
    public function setFacebookPage($facebook_page)
    {
        if (is_null($facebook_page)) {
            throw new \InvalidArgumentException('non-nullable facebook_page cannot be null');
        }
        $this->container['facebook_page'] = $facebook_page;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


