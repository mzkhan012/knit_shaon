<?php
App::uses('Internalorder', 'Model');

/**
 * Internalorder Test Case
 *
 */
class InternalorderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.internalorder',
		'app.orderitem'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Internalorder = ClassRegistry::init('Internalorder');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Internalorder);

		parent::tearDown();
	}

}
