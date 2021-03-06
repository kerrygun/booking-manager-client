<?php
/**
 * Extras
 *
 * PHP version 8.1.1
 *
 * @category Class
 * @package  OpenAPI\Server\Model
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Booking Manager API
 *
 * # Booking Manager API for Agencies and Charter Fleets  Booking Manager API is a standard Web service that enables clients to connect their data with external systems and services and to extend the automation benefits of the Booking Manager System. - It is used by charter agencies to publish availabilities of Charter Operators and automate booking processes by connecting Booking Manager to their own web sites to allow for seamless online booking experience for end users or integrating it with their CRM solutions in order to automate office procedures. - Charter operators use the web service to connect Booking Manager with their book keeping softwares and save time and effort in accounting department. - Third Party Software tools also use Booking Manager API to display richer information, for example boat tracking systems are able to visualise client contact information directly on the map showing the boat location in real time. ## Document Changes ### 29.05.2020 - `/companies` more information added in response - address, additional telephone and additional mobile number - `/offers` added `kind` parameter in the request - `/yachts` added `validForBases from/to` parameter to the response ### 10.04.2020   - `/yachts` added `shipyardId` parameter to the response - POST `/addDocument` - function to add document on specific item - `/offers` added `sailingAreaId` as additional parameter in request - PUT `/reservation` added `expirationDate` for options      ### 12.03.2020. - Extras valid for certain yacht in `/yachts` - `/yachts` function with extras duration parameter - `validDaysFrom`/`validDaysTo` - `/yachts` function with year of build `year`, default yacht deposit `deposit`, commision percentage `commissionPercentage` and default check in day `defaultCheckInDay` - `/yacht` field `lenghtAtWaterline` corrected to length
 *
 * The version of the OpenAPI document: 2.0.2
 * 
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the Extras model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class Extras 
{
        /**
     * @var string|null
     * @SerializedName("name")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $name = null;

    /**
     * @var bool|null
     * @SerializedName("obligatory")
     * @Assert\NotNull()
     * @Assert\Type("bool")
     * @Type("bool")
     */
    protected ?bool $obligatory = null;

    /**
     * @var float|null
     * @SerializedName("price")
     * @Assert\NotNull()
     * @Assert\Type("float")
     * @Type("float")
     */
    protected ?float $price = null;

    /**
     * @var string|null
     * @SerializedName("unit")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $unit = null;

    /**
     * @var bool|null
     * @SerializedName("payableInBase")
     * @Assert\NotNull()
     * @Assert\Type("bool")
     * @Type("bool")
     */
    protected ?bool $payableInBase = null;

    /**
     * @var bool|null
     * @SerializedName("includedDepositWaiver")
     * @Assert\Type("bool")
     * @Type("bool")
     */
    protected ?bool $includedDepositWaiver = null;

    /**
     * @var int|null
     * @SerializedName("validDaysFrom")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $validDaysFrom = null;

    /**
     * @var int|null
     * @SerializedName("validDaysTo")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $validDaysTo = null;

    /**
     * only if &gt; 0
     *
     * @var int|null
     * @SerializedName("minNumberOfPersons")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $minNumberOfPersons = null;

    /**
     * only if &gt; 0
     *
     * @var int|null
     * @SerializedName("maxNumberOfPersons")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $maxNumberOfPersons = null;

    /**
     * @var array|null
     * @SerializedName("validForBases")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\ValidForBases")
     * })
     * @Type("array<OpenAPI\Server\Model\ValidForBases>")
     */
    protected ?array $validForBases = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->name = $data['name'] ?? null;
        $this->obligatory = $data['obligatory'] ?? null;
        $this->price = $data['price'] ?? null;
        $this->unit = $data['unit'] ?? null;
        $this->payableInBase = $data['payableInBase'] ?? null;
        $this->includedDepositWaiver = $data['includedDepositWaiver'] ?? null;
        $this->validDaysFrom = $data['validDaysFrom'] ?? null;
        $this->validDaysTo = $data['validDaysTo'] ?? null;
        $this->minNumberOfPersons = $data['minNumberOfPersons'] ?? null;
        $this->maxNumberOfPersons = $data['maxNumberOfPersons'] ?? null;
        $this->validForBases = $data['validForBases'] ?? null;
    }

    /**
     * Gets name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets name.
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets obligatory.
     *
     * @return bool|null
     */
    public function isObligatory(): ?bool
    {
        return $this->obligatory;
    }

    /**
     * Sets obligatory.
     *
     * @param bool|null $obligatory
     *
     * @return $this
     */
    public function setObligatory(?bool $obligatory): self
    {
        $this->obligatory = $obligatory;

        return $this;
    }

    /**
     * Gets price.
     *
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * Sets price.
     *
     * @param float|null $price
     *
     * @return $this
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Gets unit.
     *
     * @return string|null
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * Sets unit.
     *
     * @param string|null $unit
     *
     * @return $this
     */
    public function setUnit(?string $unit): self
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Gets payableInBase.
     *
     * @return bool|null
     */
    public function isPayableInBase(): ?bool
    {
        return $this->payableInBase;
    }

    /**
     * Sets payableInBase.
     *
     * @param bool|null $payableInBase
     *
     * @return $this
     */
    public function setPayableInBase(?bool $payableInBase): self
    {
        $this->payableInBase = $payableInBase;

        return $this;
    }

    /**
     * Gets includedDepositWaiver.
     *
     * @return bool|null
     */
    public function isIncludedDepositWaiver(): ?bool
    {
        return $this->includedDepositWaiver;
    }

    /**
     * Sets includedDepositWaiver.
     *
     * @param bool|null $includedDepositWaiver
     *
     * @return $this
     */
    public function setIncludedDepositWaiver(?bool $includedDepositWaiver = null): self
    {
        $this->includedDepositWaiver = $includedDepositWaiver;

        return $this;
    }

    /**
     * Gets validDaysFrom.
     *
     * @return int|null
     */
    public function getValidDaysFrom(): ?int
    {
        return $this->validDaysFrom;
    }

    /**
     * Sets validDaysFrom.
     *
     * @param int|null $validDaysFrom
     *
     * @return $this
     */
    public function setValidDaysFrom(?int $validDaysFrom): self
    {
        $this->validDaysFrom = $validDaysFrom;

        return $this;
    }

    /**
     * Gets validDaysTo.
     *
     * @return int|null
     */
    public function getValidDaysTo(): ?int
    {
        return $this->validDaysTo;
    }

    /**
     * Sets validDaysTo.
     *
     * @param int|null $validDaysTo
     *
     * @return $this
     */
    public function setValidDaysTo(?int $validDaysTo): self
    {
        $this->validDaysTo = $validDaysTo;

        return $this;
    }

    /**
     * Gets minNumberOfPersons.
     *
     * @return int|null
     */
    public function getMinNumberOfPersons(): ?int
    {
        return $this->minNumberOfPersons;
    }

    /**
     * Sets minNumberOfPersons.
     *
     * @param int|null $minNumberOfPersons  only if > 0
     *
     * @return $this
     */
    public function setMinNumberOfPersons(?int $minNumberOfPersons = null): self
    {
        $this->minNumberOfPersons = $minNumberOfPersons;

        return $this;
    }

    /**
     * Gets maxNumberOfPersons.
     *
     * @return int|null
     */
    public function getMaxNumberOfPersons(): ?int
    {
        return $this->maxNumberOfPersons;
    }

    /**
     * Sets maxNumberOfPersons.
     *
     * @param int|null $maxNumberOfPersons  only if > 0
     *
     * @return $this
     */
    public function setMaxNumberOfPersons(?int $maxNumberOfPersons = null): self
    {
        $this->maxNumberOfPersons = $maxNumberOfPersons;

        return $this;
    }

    /**
     * Gets validForBases.
     *
     * @return array|null
     */
    public function getValidForBases(): ?array
    {
        return $this->validForBases;
    }

    /**
     * Sets validForBases.
     *
     * @param array|null $validForBases
     *
     * @return $this
     */
    public function setValidForBases(?array $validForBases = null): self
    {
        $this->validForBases = $validForBases;

        return $this;
    }
}


