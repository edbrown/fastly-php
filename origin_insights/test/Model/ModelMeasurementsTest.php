<?php
/**
 * ModelMeasurementsTest
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
 * ModelMeasurementsTest Class Doc Comment
 *
 * @category    Class
 * @description A measurements object provides a count of the total number of &#x60;responses&#x60; received by Fastly from your origin servers in the reported time period, for the relevant data center, backend name, and IP address as specified in the [entry](#entry-data-model). It also includes the number of responses for specific HTTP response status codes and for status code ranges. This dataset is sparse: only the keys with non-zero values will be included in the record. Where a specific status code does not have a field in this model (e.g., &#x60;429 Too Many Requests&#x60;), any responses with that code will be counted as part of the range count (&#x60;4xx&#x60; in this case) but will not be separately identified in the data.
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ModelMeasurementsTest extends TestCase
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
     * Test "ModelMeasurements"
     */
    public function testModelMeasurements()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "responses"
     */
    public function testPropertyResponses()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "resp_header_bytes"
     */
    public function testPropertyRespHeaderBytes()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "resp_body_bytes"
     */
    public function testPropertyRespBodyBytes()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status_1xx"
     */
    public function testPropertyStatus1xx()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status_2xx"
     */
    public function testPropertyStatus2xx()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status_3xx"
     */
    public function testPropertyStatus3xx()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status_4xx"
     */
    public function testPropertyStatus4xx()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status_5xx"
     */
    public function testPropertyStatus5xx()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status_200"
     */
    public function testPropertyStatus200()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status_204"
     */
    public function testPropertyStatus204()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status_301"
     */
    public function testPropertyStatus301()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status_302"
     */
    public function testPropertyStatus302()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status_304"
     */
    public function testPropertyStatus304()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status_400"
     */
    public function testPropertyStatus400()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status_401"
     */
    public function testPropertyStatus401()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status_403"
     */
    public function testPropertyStatus403()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status_404"
     */
    public function testPropertyStatus404()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status_416"
     */
    public function testPropertyStatus416()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status_500"
     */
    public function testPropertyStatus500()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status_501"
     */
    public function testPropertyStatus501()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status_502"
     */
    public function testPropertyStatus502()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status_503"
     */
    public function testPropertyStatus503()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status_504"
     */
    public function testPropertyStatus504()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status_505"
     */
    public function testPropertyStatus505()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
