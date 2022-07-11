<?php
/**
 * Company
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
 * Class representing the Company model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class Company 
{
        /**
     * @var int|null
     * @SerializedName("id")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $id = null;

    /**
     * @var string|null
     * @SerializedName("name")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $name = null;

    /**
     * @var string|null
     * @SerializedName("address")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $address = null;

    /**
     * @var string|null
     * @SerializedName("city")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $city = null;

    /**
     * @var string|null
     * @SerializedName("zip")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $zip = null;

    /**
     * @var string|null
     * @SerializedName("country")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $country = null;

    /**
     * @var string|null
     * @SerializedName("telephone")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $telephone = null;

    /**
     * @var string|null
     * @SerializedName("telephone2")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $telephone2 = null;

    /**
     * @var string|null
     * @SerializedName("mobile")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $mobile = null;

    /**
     * @var string|null
     * @SerializedName("vatCode")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $vatCode = null;

    /**
     * @var string|null
     * @SerializedName("email")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $email = null;

    /**
     * @var string|null
     * @SerializedName("web")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $web = null;

    /**
     * @var string|null
     * @SerializedName("bankAccountNumber")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $bankAccountNumber = null;

    /**
     * @var string|null
     * @SerializedName("termsAndConditions")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $termsAndConditions = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->address = $data['address'] ?? null;
        $this->city = $data['city'] ?? null;
        $this->zip = $data['zip'] ?? null;
        $this->country = $data['country'] ?? null;
        $this->telephone = $data['telephone'] ?? null;
        $this->telephone2 = $data['telephone2'] ?? null;
        $this->mobile = $data['mobile'] ?? null;
        $this->vatCode = $data['vatCode'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->web = $data['web'] ?? null;
        $this->bankAccountNumber = $data['bankAccountNumber'] ?? null;
        $this->termsAndConditions = $data['termsAndConditions'] ?? null;
    }

    /**
     * Gets id.
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets id.
     *
     * @param int|null $id
     *
     * @return $this
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
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
     * Gets address.
     *
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * Sets address.
     *
     * @param string|null $address
     *
     * @return $this
     */
    public function setAddress(?string $address = null): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Gets city.
     *
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Sets city.
     *
     * @param string|null $city
     *
     * @return $this
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Gets zip.
     *
     * @return string|null
     */
    public function getZip(): ?string
    {
        return $this->zip;
    }

    /**
     * Sets zip.
     *
     * @param string|null $zip
     *
     * @return $this
     */
    public function setZip(?string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Gets country.
     *
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Sets country.
     *
     * @param string|null $country
     *
     * @return $this
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Gets telephone.
     *
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * Sets telephone.
     *
     * @param string|null $telephone
     *
     * @return $this
     */
    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Gets telephone2.
     *
     * @return string|null
     */
    public function getTelephone2(): ?string
    {
        return $this->telephone2;
    }

    /**
     * Sets telephone2.
     *
     * @param string|null $telephone2
     *
     * @return $this
     */
    public function setTelephone2(?string $telephone2 = null): self
    {
        $this->telephone2 = $telephone2;

        return $this;
    }

    /**
     * Gets mobile.
     *
     * @return string|null
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    /**
     * Sets mobile.
     *
     * @param string|null $mobile
     *
     * @return $this
     */
    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Gets vatCode.
     *
     * @return string|null
     */
    public function getVatCode(): ?string
    {
        return $this->vatCode;
    }

    /**
     * Sets vatCode.
     *
     * @param string|null $vatCode
     *
     * @return $this
     */
    public function setVatCode(?string $vatCode): self
    {
        $this->vatCode = $vatCode;

        return $this;
    }

    /**
     * Gets email.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Sets email.
     *
     * @param string|null $email
     *
     * @return $this
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets web.
     *
     * @return string|null
     */
    public function getWeb(): ?string
    {
        return $this->web;
    }

    /**
     * Sets web.
     *
     * @param string|null $web
     *
     * @return $this
     */
    public function setWeb(?string $web): self
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Gets bankAccountNumber.
     *
     * @return string|null
     */
    public function getBankAccountNumber(): ?string
    {
        return $this->bankAccountNumber;
    }

    /**
     * Sets bankAccountNumber.
     *
     * @param string|null $bankAccountNumber
     *
     * @return $this
     */
    public function setBankAccountNumber(?string $bankAccountNumber): self
    {
        $this->bankAccountNumber = $bankAccountNumber;

        return $this;
    }

    /**
     * Gets termsAndConditions.
     *
     * @return string|null
     */
    public function getTermsAndConditions(): ?string
    {
        return $this->termsAndConditions;
    }

    /**
     * Sets termsAndConditions.
     *
     * @param string|null $termsAndConditions
     *
     * @return $this
     */
    public function setTermsAndConditions(?string $termsAndConditions): self
    {
        $this->termsAndConditions = $termsAndConditions;

        return $this;
    }
}


