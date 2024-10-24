<?php
/**
 * VersionOptionsTiktok
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  PostPuma
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

namespace PostPuma\Model;

use \ArrayAccess;
use \PostPuma\ObjectSerializer;

/**
 * VersionOptionsTiktok Class Doc Comment
 *
 * @category Class
 * @package  PostPuma
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VersionOptionsTiktok implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Version_options_tiktok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'privacy_level' => '\PostPuma\Model\VersionOptionsTiktokPrivacyLevel',
        'allow_comments' => '\PostPuma\Model\VersionOptionsTiktokPrivacyLevel',
        'allow_duet' => '\PostPuma\Model\VersionOptionsTiktokPrivacyLevel',
        'allow_stitch' => '\PostPuma\Model\VersionOptionsTiktokPrivacyLevel',
        'content_disclosure' => '\PostPuma\Model\VersionOptionsTiktokPrivacyLevel',
        'brand_organic_toggle' => '\PostPuma\Model\VersionOptionsTiktokPrivacyLevel',
        'brand_content_toggle' => '\PostPuma\Model\VersionOptionsTiktokPrivacyLevel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'privacy_level' => null,
        'allow_comments' => null,
        'allow_duet' => null,
        'allow_stitch' => null,
        'content_disclosure' => null,
        'brand_organic_toggle' => null,
        'brand_content_toggle' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'privacy_level' => false,
        'allow_comments' => false,
        'allow_duet' => false,
        'allow_stitch' => false,
        'content_disclosure' => false,
        'brand_organic_toggle' => false,
        'brand_content_toggle' => false
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
        'privacy_level' => 'privacy_level',
        'allow_comments' => 'allow_comments',
        'allow_duet' => 'allow_duet',
        'allow_stitch' => 'allow_stitch',
        'content_disclosure' => 'content_disclosure',
        'brand_organic_toggle' => 'brand_organic_toggle',
        'brand_content_toggle' => 'brand_content_toggle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'privacy_level' => 'setPrivacyLevel',
        'allow_comments' => 'setAllowComments',
        'allow_duet' => 'setAllowDuet',
        'allow_stitch' => 'setAllowStitch',
        'content_disclosure' => 'setContentDisclosure',
        'brand_organic_toggle' => 'setBrandOrganicToggle',
        'brand_content_toggle' => 'setBrandContentToggle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'privacy_level' => 'getPrivacyLevel',
        'allow_comments' => 'getAllowComments',
        'allow_duet' => 'getAllowDuet',
        'allow_stitch' => 'getAllowStitch',
        'content_disclosure' => 'getContentDisclosure',
        'brand_organic_toggle' => 'getBrandOrganicToggle',
        'brand_content_toggle' => 'getBrandContentToggle'
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
        $this->setIfExists('privacy_level', $data ?? [], null);
        $this->setIfExists('allow_comments', $data ?? [], null);
        $this->setIfExists('allow_duet', $data ?? [], null);
        $this->setIfExists('allow_stitch', $data ?? [], null);
        $this->setIfExists('content_disclosure', $data ?? [], null);
        $this->setIfExists('brand_organic_toggle', $data ?? [], null);
        $this->setIfExists('brand_content_toggle', $data ?? [], null);
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
     * Gets privacy_level
     *
     * @return \PostPuma\Model\VersionOptionsTiktokPrivacyLevel|null
     */
    public function getPrivacyLevel()
    {
        return $this->container['privacy_level'];
    }

    /**
     * Sets privacy_level
     *
     * @param \PostPuma\Model\VersionOptionsTiktokPrivacyLevel|null $privacy_level privacy_level
     *
     * @return self
     */
    public function setPrivacyLevel($privacy_level)
    {
        if (is_null($privacy_level)) {
            throw new \InvalidArgumentException('non-nullable privacy_level cannot be null');
        }
        $this->container['privacy_level'] = $privacy_level;

        return $this;
    }

    /**
     * Gets allow_comments
     *
     * @return \PostPuma\Model\VersionOptionsTiktokPrivacyLevel|null
     */
    public function getAllowComments()
    {
        return $this->container['allow_comments'];
    }

    /**
     * Sets allow_comments
     *
     * @param \PostPuma\Model\VersionOptionsTiktokPrivacyLevel|null $allow_comments allow_comments
     *
     * @return self
     */
    public function setAllowComments($allow_comments)
    {
        if (is_null($allow_comments)) {
            throw new \InvalidArgumentException('non-nullable allow_comments cannot be null');
        }
        $this->container['allow_comments'] = $allow_comments;

        return $this;
    }

    /**
     * Gets allow_duet
     *
     * @return \PostPuma\Model\VersionOptionsTiktokPrivacyLevel|null
     */
    public function getAllowDuet()
    {
        return $this->container['allow_duet'];
    }

    /**
     * Sets allow_duet
     *
     * @param \PostPuma\Model\VersionOptionsTiktokPrivacyLevel|null $allow_duet allow_duet
     *
     * @return self
     */
    public function setAllowDuet($allow_duet)
    {
        if (is_null($allow_duet)) {
            throw new \InvalidArgumentException('non-nullable allow_duet cannot be null');
        }
        $this->container['allow_duet'] = $allow_duet;

        return $this;
    }

    /**
     * Gets allow_stitch
     *
     * @return \PostPuma\Model\VersionOptionsTiktokPrivacyLevel|null
     */
    public function getAllowStitch()
    {
        return $this->container['allow_stitch'];
    }

    /**
     * Sets allow_stitch
     *
     * @param \PostPuma\Model\VersionOptionsTiktokPrivacyLevel|null $allow_stitch allow_stitch
     *
     * @return self
     */
    public function setAllowStitch($allow_stitch)
    {
        if (is_null($allow_stitch)) {
            throw new \InvalidArgumentException('non-nullable allow_stitch cannot be null');
        }
        $this->container['allow_stitch'] = $allow_stitch;

        return $this;
    }

    /**
     * Gets content_disclosure
     *
     * @return \PostPuma\Model\VersionOptionsTiktokPrivacyLevel|null
     */
    public function getContentDisclosure()
    {
        return $this->container['content_disclosure'];
    }

    /**
     * Sets content_disclosure
     *
     * @param \PostPuma\Model\VersionOptionsTiktokPrivacyLevel|null $content_disclosure content_disclosure
     *
     * @return self
     */
    public function setContentDisclosure($content_disclosure)
    {
        if (is_null($content_disclosure)) {
            throw new \InvalidArgumentException('non-nullable content_disclosure cannot be null');
        }
        $this->container['content_disclosure'] = $content_disclosure;

        return $this;
    }

    /**
     * Gets brand_organic_toggle
     *
     * @return \PostPuma\Model\VersionOptionsTiktokPrivacyLevel|null
     */
    public function getBrandOrganicToggle()
    {
        return $this->container['brand_organic_toggle'];
    }

    /**
     * Sets brand_organic_toggle
     *
     * @param \PostPuma\Model\VersionOptionsTiktokPrivacyLevel|null $brand_organic_toggle brand_organic_toggle
     *
     * @return self
     */
    public function setBrandOrganicToggle($brand_organic_toggle)
    {
        if (is_null($brand_organic_toggle)) {
            throw new \InvalidArgumentException('non-nullable brand_organic_toggle cannot be null');
        }
        $this->container['brand_organic_toggle'] = $brand_organic_toggle;

        return $this;
    }

    /**
     * Gets brand_content_toggle
     *
     * @return \PostPuma\Model\VersionOptionsTiktokPrivacyLevel|null
     */
    public function getBrandContentToggle()
    {
        return $this->container['brand_content_toggle'];
    }

    /**
     * Sets brand_content_toggle
     *
     * @param \PostPuma\Model\VersionOptionsTiktokPrivacyLevel|null $brand_content_toggle brand_content_toggle
     *
     * @return self
     */
    public function setBrandContentToggle($brand_content_toggle)
    {
        if (is_null($brand_content_toggle)) {
            throw new \InvalidArgumentException('non-nullable brand_content_toggle cannot be null');
        }
        $this->container['brand_content_toggle'] = $brand_content_toggle;

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


