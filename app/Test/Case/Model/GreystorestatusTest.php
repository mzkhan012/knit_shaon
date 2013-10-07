<?php
App::uses('Greystorestatus', 'Model');

/**
 * Greystorestatus Test Case
 *
 */
class GreystorestatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.greystorestatus',
		'app.roll',
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
		$this->Greystorestatus = ClassRegistry::init('Greystorestatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Greystorestatus);

		parent::tearDown();
	}

}
