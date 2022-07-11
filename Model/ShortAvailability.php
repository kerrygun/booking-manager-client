<?php
/**
 * ShortAvailability
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
 * Class representing the ShortAvailability model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class ShortAvailability 
{
        /**
     * @var int|null
     * @SerializedName("y")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $y = null;

    /**
     * @var string|null
     * @SerializedName("bs")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $bs = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->y = $data['y'] ?? null;
        $this->bs = $data['bs'] ?? null;
    }

    /**
     * Gets y.
     *
     * @return int|null
     */
    public function getY(): ?int
    {
        return $this->y;
    }

    /**
     * Sets y.
     *
     * @param int|null $y
     *
     * @return $this
     */
    public function setY(?int $y): self
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Gets bs.
     *
     * @return string|null
     */
    public function getBs(): ?string
    {
        return $this->bs;
    }

    /**
     * Sets bs.
     *
     * @param string|null $bs
     *
     * @return $this
     */
    public function setBs(?string $bs): self
    {
        $this->bs = $bs;

        return $this;
    }
}


