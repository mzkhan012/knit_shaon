<?php
App::uses('Dyingstatus', 'Model');

/**
 * Dyingstatus Test Case
 *
 */
class DyingstatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dyingstatus',
		'app.roll',
		'app.greystorestatus',
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
		$this->Dyingstatus = ClassRegistry::init('Dyingstatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dyingstatus);

		parent::tearDown();
	}

}
