<?php
namespace RandomLetter\Test\TestCase\Controller\Component;

use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;
use RandomLetter\Controller\Component\RandLetterComponent;

/**
 * RandomLetter\Controller\Component\RandLetterComponent Test Case
 */
class RandLetterComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \RandomLetter\Controller\Component\RandLetterComponent
     */
    public $RandLetter;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->RandLetter = new RandLetterComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RandLetter);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
