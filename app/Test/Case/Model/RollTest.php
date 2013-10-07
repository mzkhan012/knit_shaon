<?php
App::uses('Roll', 'Model');

/**
 * Roll Test Case
 *
 */
class RollTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.roll',
		'app.greystorestatus',
		'app.dyingstatus',
		'app.finishingstatus',
		'app.greystatus',
		'app.orderstatus',
		'app.mainstorestatus',
		'app.jobcard'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Roll = ClassRegistry::init('Roll');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Roll);

		parent::tearDown();
	}

}
