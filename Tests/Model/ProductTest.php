<?php
/**
 * ProductTest
 *
 * PHP version 8.1.1
 *
 * @category Class
 * @package  OpenAPI\Server\Tests\Model
 * @author   openapi-generator contributors
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
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Server\Model;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * ProductTest Class Doc Comment
 *
 * @category    Class
 * @description Product
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\Product
 */
class ProductTest extends TestCase
{
    protected Product|MockObject $object;

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
         $this->object = $this->getMockBuilder(Product::class)->getMockForAbstractClass();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * @group integration
     * @small
     */
    public function testTestClassExists(): void
    {
        $this->assertTrue(class_exists(Product::class));
        $this->assertInstanceOf(Product::class, $this->object);
    }

    /**
     * Test attribute "name"
     *
     * @group unit
     * @small
     */
    public function testPropertyName(): void
    {
        $this->markTestSkipped('Test for property name not implemented');
    }

    /**
     * Test attribute "extras"
     *
     * @group unit
     * @small
     */
    public function testPropertyExtras(): void
    {
        $this->markTestSkipped('Test for property extras not implemented');
    }
}
