<?php

namespace DN\PerfectNumber;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2018-06-07 at 12:21:48.
 */
class ClassificationTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Classification
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Classification;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers DN\PerfectNumber\Classification::getClassification
     * @todo   Implement testGetClassification().
     */
    public function testGetClassification() {
        // Remove the following lines when you implement this test.

        $this->assertEquals(Classification::PERFECT, $this->object->getClassification(6));

        $this->assertEquals(Classification::DEFICIENT, $this->object->getClassification(8));

        $this->assertEquals(Classification::ABUNDANT, $this->object->getClassification(12));
        /* $this->markTestIncomplete(
          'This test has not been implemented yet.'
          ); */
    }

}