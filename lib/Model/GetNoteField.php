<?php
/**
 * GetNoteField
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
 * GetNoteField Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetNoteField implements ModelInterface, ArrayAccess, JsonSerializable
{
    use RawData;

    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetNoteField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string>
      * @phpsalm-var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'key' => 'string',
        'name' => 'string',
        'field_type' => '\Pipedrive\Model\InternalFieldType',
        'active_flag' => 'bool',
        'edit_flag' => 'bool',
        'bulk_edit_allowed' => 'bool',
        'mandatory_flag' => 'bool',
        'options' => '\Pipedrive\Model\NoteFieldOptions[]'
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
        'key' => null,
        'name' => null,
        'field_type' => null,
        'active_flag' => null,
        'edit_flag' => null,
        'bulk_edit_allowed' => null,
        'mandatory_flag' => null,
        'options' => null
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
        'key' => 'key',
        'name' => 'name',
        'field_type' => 'field_type',
        'active_flag' => 'active_flag',
        'edit_flag' => 'edit_flag',
        'bulk_edit_allowed' => 'bulk_edit_allowed',
        'mandatory_flag' => 'mandatory_flag',
        'options' => 'options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'key' => 'setKey',
        'name' => 'setName',
        'field_type' => 'setFieldType',
        'active_flag' => 'setActiveFlag',
        'edit_flag' => 'setEditFlag',
        'bulk_edit_allowed' => 'setBulkEditAllowed',
        'mandatory_flag' => 'setMandatoryFlag',
        'options' => 'setOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'key' => 'getKey',
        'name' => 'getName',
        'field_type' => 'getFieldType',
        'active_flag' => 'getActiveFlag',
        'edit_flag' => 'getEditFlag',
        'bulk_edit_allowed' => 'getBulkEditAllowed',
        'mandatory_flag' => 'getMandatoryFlag',
        'options' => 'getOptions'
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
        $this->container['key'] = $data['key'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['field_type'] = $data['field_type'] ?? null;
        $this->container['active_flag'] = $data['active_flag'] ?? null;
        $this->container['edit_flag'] = $data['edit_flag'] ?? null;
        $this->container['bulk_edit_allowed'] = $data['bulk_edit_allowed'] ?? null;
        $this->container['mandatory_flag'] = $data['mandatory_flag'] ?? null;
        $this->container['options'] = $data['options'] ?? null;
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
     * @param int|null $id The ID of the field
     *
     * @return self
     */
    public function setId($id): self
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string|null $key The key of the field
     *
     * @return self
     */
    public function setKey($key): self
    {
        $this->container['key'] = $key;

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
     * @param string|null $name The name of the field
     *
     * @return self
     */
    public function setName($name): self
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets field_type
     *
     * @return \Pipedrive\Model\InternalFieldType|null
     */
    public function getFieldType()
    {
        return $this->container['field_type'];
    }

    /**
     * Sets field_type
     *
     * @param \Pipedrive\Model\InternalFieldType|null $field_type field_type
     *
     * @return self
     */
    public function setFieldType($field_type): self
    {
        $this->container['field_type'] = $field_type;

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
     * @param bool|null $active_flag The active flag of the field
     *
     * @return self
     */
    public function setActiveFlag($active_flag): self
    {
        $this->container['active_flag'] = $active_flag;

        return $this;
    }

    /**
     * Gets edit_flag
     *
     * @return bool|null
     */
    public function getEditFlag()
    {
        return $this->container['edit_flag'];
    }

    /**
     * Sets edit_flag
     *
     * @param bool|null $edit_flag The edit flag of the field
     *
     * @return self
     */
    public function setEditFlag($edit_flag): self
    {
        $this->container['edit_flag'] = $edit_flag;

        return $this;
    }

    /**
     * Gets bulk_edit_allowed
     *
     * @return bool|null
     */
    public function getBulkEditAllowed()
    {
        return $this->container['bulk_edit_allowed'];
    }

    /**
     * Sets bulk_edit_allowed
     *
     * @param bool|null $bulk_edit_allowed Not used
     *
     * @return self
     */
    public function setBulkEditAllowed($bulk_edit_allowed): self
    {
        $this->container['bulk_edit_allowed'] = $bulk_edit_allowed;

        return $this;
    }

    /**
     * Gets mandatory_flag
     *
     * @return bool|null
     */
    public function getMandatoryFlag()
    {
        return $this->container['mandatory_flag'];
    }

    /**
     * Sets mandatory_flag
     *
     * @param bool|null $mandatory_flag Whether or not the field is mandatory
     *
     * @return self
     */
    public function setMandatoryFlag($mandatory_flag): self
    {
        $this->container['mandatory_flag'] = $mandatory_flag;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \Pipedrive\Model\NoteFieldOptions[]|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \Pipedrive\Model\NoteFieldOptions[]|null $options The options of the field. When there are no options, `null` is returned.
     *
     * @return self
     */
    public function setOptions($options): self
    {
        $this->container['options'] = $options;

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

