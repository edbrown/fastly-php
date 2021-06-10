<?php
/**
 * ModelEntryTest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Origin insights
 *
 * Origin insights is a real-time JSON-formatted data stream providing visibility into responses delivered from your origin servers to Fastly. The API offers a standardized set of data to report in real-time every origin response, byte, and status code received by a specified service in one-second periods up to the last complete second.
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Client\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * ModelEntryTest Class Doc Comment
 *
 * @category    Class
 * @description Each reporting period is represented by an entry in the &#x60;Data&#x60; property of the top level response and provides access to [measurement data](#measurements-data-model) for that time period, grouped in various ways: by origin name, origin IP address, and optionally by data center. The &#x60;datacenter&#x60; property organizes the measurements by Fastly data center, while the &#x60;aggregated&#x60; property combines the measurements of all data centers (but still splits by backend name and IP).
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ModelEntryTest extends TestCase
{

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
     * Test "ModelEntry"
     */
    public function testModelEntry()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "recorded"
     */
    public function testPropertyRecorded()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "aggregated"
     */
    public function testPropertyAggregated()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "datacenter"
     */
    public function testPropertyDatacenter()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
