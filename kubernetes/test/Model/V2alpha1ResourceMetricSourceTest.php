<?php
/**
 * V2alpha1ResourceMetricSourceTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  CBSi\Kubernetes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kubernetes
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1.7.9
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace CBSi\Kubernetes;

/**
 * V2alpha1ResourceMetricSourceTest Class Doc Comment
 *
 * @category    Class */
// * @description ResourceMetricSource indicates how to scale on a resource metric known to Kubernetes, as specified in requests and limits, describing each pod in the current scale target (e.g. CPU or memory).  The values will be averaged together before being compared to the target.  Such metrics are built in to Kubernetes, and have special scaling options on top of those available to normal per-pod metrics using the \&quot;pods\&quot; source.  Only one \&quot;target\&quot; type should be set.
/**
 * @package     CBSi\Kubernetes
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V2alpha1ResourceMetricSourceTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "V2alpha1ResourceMetricSource"
     */
    public function testV2alpha1ResourceMetricSource()
    {
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
    }

    /**
     * Test attribute "target_average_utilization"
     */
    public function testPropertyTargetAverageUtilization()
    {
    }

    /**
     * Test attribute "target_average_value"
     */
    public function testPropertyTargetAverageValue()
    {
    }
}
