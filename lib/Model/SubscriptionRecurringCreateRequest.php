<?php
/**
 * SubscriptionRecurringCreateRequest
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
use Pipedrive\ObjectSerializer;

/**
 * SubscriptionRecurringCreateRequest Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SubscriptionRecurringCreateRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SubscriptionRecurringCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string>
      * @phpsalm-var array<string, string>
      */
    protected static array $openAPITypes = [
        'deal_id' => 'int',
        'currency' => 'string',
        'description' => 'string',
        'cadence_type' => 'string',
        'cycles_count' => 'int',
        'cycle_amount' => 'int',
        'start_date' => '\DateTime',
        'infinite' => 'bool',
        'payments' => 'object[]',
        'update_deal_value' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'deal_id' => null,
        'currency' => null,
        'description' => null,
        'cadence_type' => null,
        'cycles_count' => null,
        'cycle_amount' => null,
        'start_date' => 'date',
        'infinite' => null,
        'payments' => null,
        'update_deal_value' => null
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
        'deal_id' => 'deal_id',
        'currency' => 'currency',
        'description' => 'description',
        'cadence_type' => 'cadence_type',
        'cycles_count' => 'cycles_count',
        'cycle_amount' => 'cycle_amount',
        'start_date' => 'start_date',
        'infinite' => 'infinite',
        'payments' => 'payments',
        'update_deal_value' => 'update_deal_value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deal_id' => 'setDealId',
        'currency' => 'setCurrency',
        'description' => 'setDescription',
        'cadence_type' => 'setCadenceType',
        'cycles_count' => 'setCyclesCount',
        'cycle_amount' => 'setCycleAmount',
        'start_date' => 'setStartDate',
        'infinite' => 'setInfinite',
        'payments' => 'setPayments',
        'update_deal_value' => 'setUpdateDealValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deal_id' => 'getDealId',
        'currency' => 'getCurrency',
        'description' => 'getDescription',
        'cadence_type' => 'getCadenceType',
        'cycles_count' => 'getCyclesCount',
        'cycle_amount' => 'getCycleAmount',
        'start_date' => 'getStartDate',
        'infinite' => 'getInfinite',
        'payments' => 'getPayments',
        'update_deal_value' => 'getUpdateDealValue'
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

    const CADENCE_TYPE_WEEKLY = 'weekly';
    const CADENCE_TYPE_MONTHLY = 'monthly';
    const CADENCE_TYPE_QUARTERLY = 'quarterly';
    const CADENCE_TYPE_YEARLY = 'yearly';

    /**
     * Gets allowable values of the enum
     *
     * @phpstan-return  array<string|int>
     * @phpsalm-return  array<string|int>
     * @return (string|int)[]
     */
    public function getCadenceTypeAllowableValues(): array
    {
        return [
            self::CADENCE_TYPE_WEEKLY,
            self::CADENCE_TYPE_MONTHLY,
            self::CADENCE_TYPE_QUARTERLY,
            self::CADENCE_TYPE_YEARLY,
        ];
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
        $this->container['deal_id'] = $data['deal_id'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['cadence_type'] = $data['cadence_type'] ?? null;
        $this->container['cycles_count'] = $data['cycles_count'] ?? null;
        $this->container['cycle_amount'] = $data['cycle_amount'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['infinite'] = $data['infinite'] ?? null;
        $this->container['payments'] = $data['payments'] ?? null;
        $this->container['update_deal_value'] = $data['update_deal_value'] ?? null;
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

        if ($this->container['deal_id'] === null) {
            $invalidProperties[] = "'deal_id' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['cadence_type'] === null) {
            $invalidProperties[] = "'cadence_type' can't be null";
        }
        $allowedValues = $this->getCadenceTypeAllowableValues();
        if (!is_null($this->container['cadence_type']) && !in_array($this->container['cadence_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'cadence_type', must be one of '%s'",
                $this->container['cadence_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['cycle_amount'] === null) {
            $invalidProperties[] = "'cycle_amount' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
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
     * Gets deal_id
     *
     * @return int
     */
    public function getDealId()
    {
        return $this->container['deal_id'];
    }

    /**
     * Sets deal_id
     *
     * @param int $deal_id The ID of the deal this recurring subscription is associated with
     *
     * @return self
     */
    public function setDealId($deal_id): self
    {
        $this->container['deal_id'] = $deal_id;

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
     * @param string $currency The currency of the recurring subscription. Accepts a 3-character currency code.
     *
     * @return self
     */
    public function setCurrency($currency): self
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The description of the recurring subscription
     *
     * @return self
     */
    public function setDescription($description): self
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets cadence_type
     *
     * @return string
     */
    public function getCadenceType()
    {
        return $this->container['cadence_type'];
    }

    /**
     * Sets cadence_type
     *
     * @param string $cadence_type The interval between payments
     *
     * @return self
     */
    public function setCadenceType($cadence_type): self
    {
        $allowedValues = $this->getCadenceTypeAllowableValues();
        if (!in_array($cadence_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'cadence_type', must be one of '%s'",
                    $cadence_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cadence_type'] = $cadence_type;

        return $this;
    }

    /**
     * Gets cycles_count
     *
     * @return int|null
     */
    public function getCyclesCount()
    {
        return $this->container['cycles_count'];
    }

    /**
     * Sets cycles_count
     *
     * @param int|null $cycles_count Shows how many payments the subscription has. Note that one field must be set: `cycles_count` or `infinite`. If `cycles_count` is set, then `cycle_amount` and `start_date` are also required.
     *
     * @return self
     */
    public function setCyclesCount($cycles_count): self
    {
        $this->container['cycles_count'] = $cycles_count;

        return $this;
    }

    /**
     * Gets cycle_amount
     *
     * @return int
     */
    public function getCycleAmount()
    {
        return $this->container['cycle_amount'];
    }

    /**
     * Sets cycle_amount
     *
     * @param int $cycle_amount The amount of each payment
     *
     * @return self
     */
    public function setCycleAmount($cycle_amount): self
    {
        $this->container['cycle_amount'] = $cycle_amount;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date The start date of the recurring subscription. Format: YYYY-MM-DD
     *
     * @return self
     */
    public function setStartDate($start_date): self
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets infinite
     *
     * @return bool|null
     */
    public function getInfinite()
    {
        return $this->container['infinite'];
    }

    /**
     * Sets infinite
     *
     * @param bool|null $infinite This indicates that the recurring subscription will last until it's manually canceled or deleted. Note that only one field must be set: `cycles_count` or `infinite`.
     *
     * @return self
     */
    public function setInfinite($infinite): self
    {
        $this->container['infinite'] = $infinite;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return object[]|null
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param object[]|null $payments Array of additional payments. It requires a minimum structure as follows: [{ amount:SUM, description:DESCRIPTION, due_at:PAYMENT_DATE }]. Replace SUM with a payment amount, DESCRIPTION with an explanation string, PAYMENT_DATE with a date (format YYYY-MM-DD).
     *
     * @return self
     */
    public function setPayments($payments): self
    {
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets update_deal_value
     *
     * @return bool|null
     */
    public function getUpdateDealValue()
    {
        return $this->container['update_deal_value'];
    }

    /**
     * Sets update_deal_value
     *
     * @param bool|null $update_deal_value Indicates that the deal value must be set to recurring subscription's MRR value
     *
     * @return self
     */
    public function setUpdateDealValue($update_deal_value): self
    {
        $this->container['update_deal_value'] = $update_deal_value;

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

