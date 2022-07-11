<?php
/**
 * Yacht
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
 * Class representing the Yacht model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class Yacht 
{
        /**
     * unique resource id
     *
     * @var int|null
     * @SerializedName("id")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $id = null;

    /**
     * the name of the individual yacht
     *
     * @var string|null
     * @SerializedName("name")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $name = null;

    /**
     * the name of the individual yacht
     *
     * @var string|null
     * @SerializedName("model")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $model = null;

    /**
     * the name of the model
     *
     * @var int|null
     * @SerializedName("modelId")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $modelId = null;

    /**
     * id of the shipyard (boat manufacturer)
     *
     * @var int|null
     * @SerializedName("shipyardId")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $shipyardId = null;

    /**
     * the build year of the boat
     *
     * @var int|null
     * @SerializedName("year")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $year = null;

    /**
     * The kind of a vessel. Kind can be -  Sail boat , Motor boat, Catamaran, Power Catamaran, Gulet, Motorsailer, Motoryacht, Trimaran, Other
     *
     * @var string|null
     * @SerializedName("kind")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $kind = null;

    /**
     * the unique id of the home base
     *
     * @var int|null
     * @SerializedName("homeBaseId")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $homeBaseId = null;

    /**
     * Home base name
     *
     * @var string|null
     * @SerializedName("homeBase")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $homeBase = null;

    /**
     * ID of the charter company
     *
     * @var int|null
     * @SerializedName("companyId")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $companyId = null;

    /**
     * Charter company name
     *
     * @var string|null
     * @SerializedName("company")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $company = null;

    /**
     * draught (m)
     *
     * @var float|null
     * @SerializedName("draught")
     * @Assert\Type("float")
     * @Type("float")
     */
    protected ?float $draught = null;

    /**
     * beam (m)
     *
     * @var float|null
     * @SerializedName("beam")
     * @Assert\Type("float")
     * @Type("float")
     */
    protected ?float $beam = null;

    /**
     * length at waterline (m)
     *
     * @var float|null
     * @SerializedName("length")
     * @Assert\Type("float")
     * @Type("float")
     */
    protected ?float $length = null;

    /**
     * capacity of the water tank (l)
     *
     * @var float|null
     * @SerializedName("waterCapacity")
     * @Assert\Type("float")
     * @Type("float")
     */
    protected ?float $waterCapacity = null;

    /**
     * capacity of the fuel tank (l)
     *
     * @var float|null
     * @SerializedName("fuelCapacity")
     * @Assert\Type("float")
     * @Type("float")
     */
    protected ?float $fuelCapacity = null;

    /**
     * @var string|null
     * @SerializedName("engine")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $engine = null;

    /**
     * @var float|null
     * @SerializedName("deposit")
     * @Assert\Type("float")
     * @Type("float")
     */
    protected ?float $deposit = null;

    /**
     * @var float|null
     * @SerializedName("commissionPercentage")
     * @Assert\Type("float")
     * @Type("float")
     */
    protected ?float $commissionPercentage = null;

    /**
     * @var int|null
     * @SerializedName("wc")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $wc = null;

    /**
     * @var int|null
     * @SerializedName("berths")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $berths = null;

    /**
     * @var int|null
     * @SerializedName("cabins")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $cabins = null;

    /**
     * @var float|null
     * @SerializedName("mainsailArea")
     * @Assert\Type("float")
     * @Type("float")
     */
    protected ?float $mainsailArea = null;

    /**
     * @var float|null
     * @SerializedName("genoaArea")
     * @Assert\Type("float")
     * @Type("float")
     */
    protected ?float $genoaArea = null;

    /**
     * types - Full Batten or Furling
     *
     * @var string|null
     * @SerializedName("mainsailType")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $mainsailType = null;

    /**
     * types - Furling or Self Tacking Jib
     *
     * @var string|null
     * @SerializedName("genoaType")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $genoaType = null;

    /**
     * -1 Any, 1 Sunday, 2 Monday, 3 Tuesday, 4 Wednesday, 5 Thursday, 6 Friday, 7 Saturday
     *
     * @var int|null
     * @SerializedName("defaultCheckInDay")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $defaultCheckInDay = null;

    /**
     * Each boat has minimum of 3 pictures - Main, Interior and Plan Image. Additionally, each boat can have more pictures than 3 minimum ones, and if available, they will be visible along will all other pictures.
     *
     * @var array|null
     * @SerializedName("images")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\Image")
     * })
     * @Type("array<OpenAPI\Server\Model\Image>")
     */
    protected ?array $images = null;

    /**
     * @var array|null
     * @SerializedName("equipmentIds")
     * @Assert\All({
     *   @Assert\Type("int")
     * })
     * @Type("array<int>")
     */
    protected ?array $equipmentIds = null;

    /**
     * Boat can have one or multiple products assigned on it. It means that it can be offered at the same time as one or more products ( e.g. Bareboat and Crewed). Values can be Bareboat, Crewed, Cabin, Flotilla, Regatta and Allinclusive.
     *
     * @var array|null
     * @SerializedName("products")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\Product")
     * })
     * @Type("array<OpenAPI\Server\Model\Product>")
     */
    protected ?array $products = null;

    /**
     * @var array|null
     * @SerializedName("cabinsLayout")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\Layout")
     * })
     * @Type("array<OpenAPI\Server\Model\Layout>")
     */
    protected ?array $cabinsLayout = null;

    /**
     * @var array|null
     * @SerializedName("berthsLayout")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\Layout")
     * })
     * @Type("array<OpenAPI\Server\Model\Layout>")
     */
    protected ?array $berthsLayout = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->model = $data['model'] ?? null;
        $this->modelId = $data['modelId'] ?? null;
        $this->shipyardId = $data['shipyardId'] ?? null;
        $this->year = $data['year'] ?? null;
        $this->kind = $data['kind'] ?? null;
        $this->homeBaseId = $data['homeBaseId'] ?? null;
        $this->homeBase = $data['homeBase'] ?? null;
        $this->companyId = $data['companyId'] ?? null;
        $this->company = $data['company'] ?? null;
        $this->draught = $data['draught'] ?? null;
        $this->beam = $data['beam'] ?? null;
        $this->length = $data['length'] ?? null;
        $this->waterCapacity = $data['waterCapacity'] ?? null;
        $this->fuelCapacity = $data['fuelCapacity'] ?? null;
        $this->engine = $data['engine'] ?? null;
        $this->deposit = $data['deposit'] ?? null;
        $this->commissionPercentage = $data['commissionPercentage'] ?? null;
        $this->wc = $data['wc'] ?? null;
        $this->berths = $data['berths'] ?? null;
        $this->cabins = $data['cabins'] ?? null;
        $this->mainsailArea = $data['mainsailArea'] ?? null;
        $this->genoaArea = $data['genoaArea'] ?? null;
        $this->mainsailType = $data['mainsailType'] ?? null;
        $this->genoaType = $data['genoaType'] ?? null;
        $this->defaultCheckInDay = $data['defaultCheckInDay'] ?? null;
        $this->images = $data['images'] ?? null;
        $this->equipmentIds = $data['equipmentIds'] ?? null;
        $this->products = $data['products'] ?? null;
        $this->cabinsLayout = $data['cabinsLayout'] ?? null;
        $this->berthsLayout = $data['berthsLayout'] ?? null;
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
     * @param int|null $id  unique resource id
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
     * @param string|null $name  the name of the individual yacht
     *
     * @return $this
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets model.
     *
     * @return string|null
     */
    public function getModel(): ?string
    {
        return $this->model;
    }

    /**
     * Sets model.
     *
     * @param string|null $model  the name of the individual yacht
     *
     * @return $this
     */
    public function setModel(?string $model): self
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Gets modelId.
     *
     * @return int|null
     */
    public function getModelId(): ?int
    {
        return $this->modelId;
    }

    /**
     * Sets modelId.
     *
     * @param int|null $modelId  the name of the model
     *
     * @return $this
     */
    public function setModelId(?int $modelId): self
    {
        $this->modelId = $modelId;

        return $this;
    }

    /**
     * Gets shipyardId.
     *
     * @return int|null
     */
    public function getShipyardId(): ?int
    {
        return $this->shipyardId;
    }

    /**
     * Sets shipyardId.
     *
     * @param int|null $shipyardId  id of the shipyard (boat manufacturer)
     *
     * @return $this
     */
    public function setShipyardId(?int $shipyardId = null): self
    {
        $this->shipyardId = $shipyardId;

        return $this;
    }

    /**
     * Gets year.
     *
     * @return int|null
     */
    public function getYear(): ?int
    {
        return $this->year;
    }

    /**
     * Sets year.
     *
     * @param int|null $year  the build year of the boat
     *
     * @return $this
     */
    public function setYear(?int $year = null): self
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Gets kind.
     *
     * @return string|null
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Sets kind.
     *
     * @param string|null $kind  The kind of a vessel. Kind can be -  Sail boat , Motor boat, Catamaran, Power Catamaran, Gulet, Motorsailer, Motoryacht, Trimaran, Other
     *
     * @return $this
     */
    public function setKind(?string $kind): self
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Gets homeBaseId.
     *
     * @return int|null
     */
    public function getHomeBaseId(): ?int
    {
        return $this->homeBaseId;
    }

    /**
     * Sets homeBaseId.
     *
     * @param int|null $homeBaseId  the unique id of the home base
     *
     * @return $this
     */
    public function setHomeBaseId(?int $homeBaseId): self
    {
        $this->homeBaseId = $homeBaseId;

        return $this;
    }

    /**
     * Gets homeBase.
     *
     * @return string|null
     */
    public function getHomeBase(): ?string
    {
        return $this->homeBase;
    }

    /**
     * Sets homeBase.
     *
     * @param string|null $homeBase  Home base name
     *
     * @return $this
     */
    public function setHomeBase(?string $homeBase = null): self
    {
        $this->homeBase = $homeBase;

        return $this;
    }

    /**
     * Gets companyId.
     *
     * @return int|null
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * Sets companyId.
     *
     * @param int|null $companyId  ID of the charter company
     *
     * @return $this
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * Gets company.
     *
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    /**
     * Sets company.
     *
     * @param string|null $company  Charter company name
     *
     * @return $this
     */
    public function setCompany(?string $company = null): self
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Gets draught.
     *
     * @return float|null
     */
    public function getDraught(): ?float
    {
        return $this->draught;
    }

    /**
     * Sets draught.
     *
     * @param float|null $draught  draught (m)
     *
     * @return $this
     */
    public function setDraught(?float $draught = null): self
    {
        $this->draught = $draught;

        return $this;
    }

    /**
     * Gets beam.
     *
     * @return float|null
     */
    public function getBeam(): ?float
    {
        return $this->beam;
    }

    /**
     * Sets beam.
     *
     * @param float|null $beam  beam (m)
     *
     * @return $this
     */
    public function setBeam(?float $beam = null): self
    {
        $this->beam = $beam;

        return $this;
    }

    /**
     * Gets length.
     *
     * @return float|null
     */
    public function getLength(): ?float
    {
        return $this->length;
    }

    /**
     * Sets length.
     *
     * @param float|null $length  length at waterline (m)
     *
     * @return $this
     */
    public function setLength(?float $length = null): self
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Gets waterCapacity.
     *
     * @return float|null
     */
    public function getWaterCapacity(): ?float
    {
        return $this->waterCapacity;
    }

    /**
     * Sets waterCapacity.
     *
     * @param float|null $waterCapacity  capacity of the water tank (l)
     *
     * @return $this
     */
    public function setWaterCapacity(?float $waterCapacity = null): self
    {
        $this->waterCapacity = $waterCapacity;

        return $this;
    }

    /**
     * Gets fuelCapacity.
     *
     * @return float|null
     */
    public function getFuelCapacity(): ?float
    {
        return $this->fuelCapacity;
    }

    /**
     * Sets fuelCapacity.
     *
     * @param float|null $fuelCapacity  capacity of the fuel tank (l)
     *
     * @return $this
     */
    public function setFuelCapacity(?float $fuelCapacity = null): self
    {
        $this->fuelCapacity = $fuelCapacity;

        return $this;
    }

    /**
     * Gets engine.
     *
     * @return string|null
     */
    public function getEngine(): ?string
    {
        return $this->engine;
    }

    /**
     * Sets engine.
     *
     * @param string|null $engine
     *
     * @return $this
     */
    public function setEngine(?string $engine = null): self
    {
        $this->engine = $engine;

        return $this;
    }

    /**
     * Gets deposit.
     *
     * @return float|null
     */
    public function getDeposit(): ?float
    {
        return $this->deposit;
    }

    /**
     * Sets deposit.
     *
     * @param float|null $deposit
     *
     * @return $this
     */
    public function setDeposit(?float $deposit = null): self
    {
        $this->deposit = $deposit;

        return $this;
    }

    /**
     * Gets commissionPercentage.
     *
     * @return float|null
     */
    public function getCommissionPercentage(): ?float
    {
        return $this->commissionPercentage;
    }

    /**
     * Sets commissionPercentage.
     *
     * @param float|null $commissionPercentage
     *
     * @return $this
     */
    public function setCommissionPercentage(?float $commissionPercentage = null): self
    {
        $this->commissionPercentage = $commissionPercentage;

        return $this;
    }

    /**
     * Gets wc.
     *
     * @return int|null
     */
    public function getWc(): ?int
    {
        return $this->wc;
    }

    /**
     * Sets wc.
     *
     * @param int|null $wc
     *
     * @return $this
     */
    public function setWc(?int $wc = null): self
    {
        $this->wc = $wc;

        return $this;
    }

    /**
     * Gets berths.
     *
     * @return int|null
     */
    public function getBerths(): ?int
    {
        return $this->berths;
    }

    /**
     * Sets berths.
     *
     * @param int|null $berths
     *
     * @return $this
     */
    public function setBerths(?int $berths = null): self
    {
        $this->berths = $berths;

        return $this;
    }

    /**
     * Gets cabins.
     *
     * @return int|null
     */
    public function getCabins(): ?int
    {
        return $this->cabins;
    }

    /**
     * Sets cabins.
     *
     * @param int|null $cabins
     *
     * @return $this
     */
    public function setCabins(?int $cabins = null): self
    {
        $this->cabins = $cabins;

        return $this;
    }

    /**
     * Gets mainsailArea.
     *
     * @return float|null
     */
    public function getMainsailArea(): ?float
    {
        return $this->mainsailArea;
    }

    /**
     * Sets mainsailArea.
     *
     * @param float|null $mainsailArea
     *
     * @return $this
     */
    public function setMainsailArea(?float $mainsailArea = null): self
    {
        $this->mainsailArea = $mainsailArea;

        return $this;
    }

    /**
     * Gets genoaArea.
     *
     * @return float|null
     */
    public function getGenoaArea(): ?float
    {
        return $this->genoaArea;
    }

    /**
     * Sets genoaArea.
     *
     * @param float|null $genoaArea
     *
     * @return $this
     */
    public function setGenoaArea(?float $genoaArea = null): self
    {
        $this->genoaArea = $genoaArea;

        return $this;
    }

    /**
     * Gets mainsailType.
     *
     * @return string|null
     */
    public function getMainsailType(): ?string
    {
        return $this->mainsailType;
    }

    /**
     * Sets mainsailType.
     *
     * @param string|null $mainsailType  types - Full Batten or Furling
     *
     * @return $this
     */
    public function setMainsailType(?string $mainsailType = null): self
    {
        $this->mainsailType = $mainsailType;

        return $this;
    }

    /**
     * Gets genoaType.
     *
     * @return string|null
     */
    public function getGenoaType(): ?string
    {
        return $this->genoaType;
    }

    /**
     * Sets genoaType.
     *
     * @param string|null $genoaType  types - Furling or Self Tacking Jib
     *
     * @return $this
     */
    public function setGenoaType(?string $genoaType = null): self
    {
        $this->genoaType = $genoaType;

        return $this;
    }

    /**
     * Gets defaultCheckInDay.
     *
     * @return int|null
     */
    public function getDefaultCheckInDay(): ?int
    {
        return $this->defaultCheckInDay;
    }

    /**
     * Sets defaultCheckInDay.
     *
     * @param int|null $defaultCheckInDay  -1 Any, 1 Sunday, 2 Monday, 3 Tuesday, 4 Wednesday, 5 Thursday, 6 Friday, 7 Saturday
     *
     * @return $this
     */
    public function setDefaultCheckInDay(?int $defaultCheckInDay = null): self
    {
        $this->defaultCheckInDay = $defaultCheckInDay;

        return $this;
    }

    /**
     * Gets images.
     *
     * @return array|null
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * Sets images.
     *
     * @param array|null $images  Each boat has minimum of 3 pictures - Main, Interior and Plan Image. Additionally, each boat can have more pictures than 3 minimum ones, and if available, they will be visible along will all other pictures.
     *
     * @return $this
     */
    public function setImages(?array $images = null): self
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Gets equipmentIds.
     *
     * @return array|null
     */
    public function getEquipmentIds(): ?array
    {
        return $this->equipmentIds;
    }

    /**
     * Sets equipmentIds.
     *
     * @param array|null $equipmentIds
     *
     * @return $this
     */
    public function setEquipmentIds(?array $equipmentIds = null): self
    {
        $this->equipmentIds = $equipmentIds;

        return $this;
    }

    /**
     * Gets products.
     *
     * @return array|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * Sets products.
     *
     * @param array|null $products  Boat can have one or multiple products assigned on it. It means that it can be offered at the same time as one or more products ( e.g. Bareboat and Crewed). Values can be Bareboat, Crewed, Cabin, Flotilla, Regatta and Allinclusive.
     *
     * @return $this
     */
    public function setProducts(?array $products = null): self
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Gets cabinsLayout.
     *
     * @return array|null
     */
    public function getCabinsLayout(): ?array
    {
        return $this->cabinsLayout;
    }

    /**
     * Sets cabinsLayout.
     *
     * @param array|null $cabinsLayout
     *
     * @return $this
     */
    public function setCabinsLayout(?array $cabinsLayout = null): self
    {
        $this->cabinsLayout = $cabinsLayout;

        return $this;
    }

    /**
     * Gets berthsLayout.
     *
     * @return array|null
     */
    public function getBerthsLayout(): ?array
    {
        return $this->berthsLayout;
    }

    /**
     * Sets berthsLayout.
     *
     * @param array|null $berthsLayout
     *
     * @return $this
     */
    public function setBerthsLayout(?array $berthsLayout = null): self
    {
        $this->berthsLayout = $berthsLayout;

        return $this;
    }
}


