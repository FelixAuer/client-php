<?php
/**
 * PersonsCollectionResponseObject
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Pipedrive API v1
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Pipedrive\Model;

use ArrayAccess;
use JsonException;
use JsonSerializable;
use Pipedrive\Traits\RawData;
use Pipedrive\ObjectSerializer;

/**
 * PersonsCollectionResponseObject Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PersonsCollectionResponseObject implements ModelInterface, ArrayAccess, JsonSerializable
{
    use RawData;

    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PersonsCollectionResponseObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string>
      * @phpsalm-var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'active_flag' => 'bool',
        'owner_id' => 'int',
        'org_id' => 'int',
        'name' => 'string',
        'email' => '\Pipedrive\Model\BasicPersonEmail[]',
        'phone' => '\Pipedrive\Model\BasePersonItemPhone[]',
        'update_time' => 'string',
        'delete_time' => 'string',
        'add_time' => 'string',
        'visible_to' => 'string',
        'picture_id' => 'int',
        'label' => 'int',
        'cc_email' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'active_flag' => null,
        'owner_id' => null,
        'org_id' => null,
        'name' => null,
        'email' => null,
        'phone' => null,
        'update_time' => null,
        'delete_time' => null,
        'add_time' => null,
        'visible_to' => null,
        'picture_id' => null,
        'label' => null,
        'cc_email' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @phpstan-return array<string, string|null>
     * @psalm-return array<string, string|null>
     * @return array
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'active_flag' => 'active_flag',
        'owner_id' => 'owner_id',
        'org_id' => 'org_id',
        'name' => 'name',
        'email' => 'email',
        'phone' => 'phone',
        'update_time' => 'update_time',
        'delete_time' => 'delete_time',
        'add_time' => 'add_time',
        'visible_to' => 'visible_to',
        'picture_id' => 'picture_id',
        'label' => 'label',
        'cc_email' => 'cc_email'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'active_flag' => 'setActiveFlag',
        'owner_id' => 'setOwnerId',
        'org_id' => 'setOrgId',
        'name' => 'setName',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'update_time' => 'setUpdateTime',
        'delete_time' => 'setDeleteTime',
        'add_time' => 'setAddTime',
        'visible_to' => 'setVisibleTo',
        'picture_id' => 'setPictureId',
        'label' => 'setLabel',
        'cc_email' => 'setCcEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'active_flag' => 'getActiveFlag',
        'owner_id' => 'getOwnerId',
        'org_id' => 'getOrgId',
        'name' => 'getName',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'update_time' => 'getUpdateTime',
        'delete_time' => 'getDeleteTime',
        'add_time' => 'getAddTime',
        'visible_to' => 'getVisibleTo',
        'picture_id' => 'getPictureId',
        'label' => 'getLabel',
        'cc_email' => 'getCcEmail'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     * @phpstan-var array<int|string, mixed>
     * @psalm-var array<int|string, mixed>
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @phpstan-param array<string, mixed>|null $data
     * @psalm-param array<string, mixed>|null $data
     * @param array|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = $data['id'] ?? null;
        $this->container['active_flag'] = $data['active_flag'] ?? null;
        $this->container['owner_id'] = $data['owner_id'] ?? null;
        $this->container['org_id'] = $data['org_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['update_time'] = $data['update_time'] ?? null;
        $this->container['delete_time'] = $data['delete_time'] ?? null;
        $this->container['add_time'] = $data['add_time'] ?? null;
        $this->container['visible_to'] = $data['visible_to'] ?? null;
        $this->container['picture_id'] = $data['picture_id'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['cc_email'] = $data['cc_email'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     * @phpstan-return array<int, string>
     * @psalm-return array<int, string>
     */
    public function listInvalidProperties(): array
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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id The ID of the person
     *
     * @return self
     */
    public function setId($id): self
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets active_flag
     *
     * @return bool|null
     */
    public function getActiveFlag()
    {
        return $this->container['active_flag'];
    }

    /**
     * Sets active_flag
     *
     * @param bool|null $active_flag Whether the person is active or not
     *
     * @return self
     */
    public function setActiveFlag($active_flag): self
    {
        $this->container['active_flag'] = $active_flag;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return int|null
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param int|null $owner_id The ID of the owner related to the person
     *
     * @return self
     */
    public function setOwnerId($owner_id): self
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets org_id
     *
     * @return int|null
     */
    public function getOrgId()
    {
        return $this->container['org_id'];
    }

    /**
     * Sets org_id
     *
     * @param int|null $org_id The ID of the organization related to the person
     *
     * @return self
     */
    public function setOrgId($org_id): self
    {
        $this->container['org_id'] = $org_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the person
     *
     * @return self
     */
    public function setName($name): self
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return \Pipedrive\Model\BasicPersonEmail[]|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param \Pipedrive\Model\BasicPersonEmail[]|null $email An email address as a string or an array of email objects related to the person. The structure of the array is as follows: `[{ \"value\": \"mail@example.com\", \"primary\": \"true\", \"label\": \"main\" }]`. Please note that only `value` is required.
     *
     * @return self
     */
    public function setEmail($email): self
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return \Pipedrive\Model\BasePersonItemPhone[]|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param \Pipedrive\Model\BasePersonItemPhone[]|null $phone A phone number supplied as a string or an array of phone objects related to the person. The structure of the array is as follows: `[{ \"value\": \"12345\", \"primary\": \"true\", \"label\": \"mobile\" }]`. Please note that only `value` is required.
     *
     * @return self
     */
    public function setPhone($phone): self
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets update_time
     *
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->container['update_time'];
    }

    /**
     * Sets update_time
     *
     * @param string|null $update_time The last updated date and time of the person. Format: YYYY-MM-DD HH:MM:SS
     *
     * @return self
     */
    public function setUpdateTime($update_time): self
    {
        $this->container['update_time'] = $update_time;

        return $this;
    }

    /**
     * Gets delete_time
     *
     * @return string|null
     */
    public function getDeleteTime()
    {
        return $this->container['delete_time'];
    }

    /**
     * Sets delete_time
     *
     * @param string|null $delete_time The date and time this person was deleted. Format: YYYY-MM-DD HH:MM:SS
     *
     * @return self
     */
    public function setDeleteTime($delete_time): self
    {
        $this->container['delete_time'] = $delete_time;

        return $this;
    }

    /**
     * Gets add_time
     *
     * @return string|null
     */
    public function getAddTime()
    {
        return $this->container['add_time'];
    }

    /**
     * Sets add_time
     *
     * @param string|null $add_time The date and time when the person was added/created. Format: YYYY-MM-DD HH:MM:SS
     *
     * @return self
     */
    public function setAddTime($add_time): self
    {
        $this->container['add_time'] = $add_time;

        return $this;
    }

    /**
     * Gets visible_to
     *
     * @return string|null
     */
    public function getVisibleTo()
    {
        return $this->container['visible_to'];
    }

    /**
     * Sets visible_to
     *
     * @param string|null $visible_to The visibility group ID of who can see the person
     *
     * @return self
     */
    public function setVisibleTo($visible_to): self
    {
        $this->container['visible_to'] = $visible_to;

        return $this;
    }

    /**
     * Gets picture_id
     *
     * @return int|null
     */
    public function getPictureId()
    {
        return $this->container['picture_id'];
    }

    /**
     * Sets picture_id
     *
     * @param int|null $picture_id The ID of the picture associated with the item
     *
     * @return self
     */
    public function setPictureId($picture_id): self
    {
        $this->container['picture_id'] = $picture_id;

        return $this;
    }

    /**
     * Gets label
     *
     * @return int|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param int|null $label The label assigned to the person
     *
     * @return self
     */
    public function setLabel($label): self
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets cc_email
     *
     * @return string|null
     */
    public function getCcEmail()
    {
        return $this->container['cc_email'];
    }

    /**
     * Sets cc_email
     *
     * @param string|null $cc_email The BCC email associated with the person
     *
     * @return self
     */
    public function setCcEmail($cc_email): self
    {
        $this->container['cc_email'] = $cc_email;

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
     * @return mixed
     */
    public function offsetGet($offset): mixed
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
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @throws JsonException
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @throws JsonException
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}


