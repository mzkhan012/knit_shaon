<?php
App::uses('Greystatus', 'Model');

/**
 * Greystatus Test Case
 *
 */
class GreystatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.greystatus',
		'app.roll',
		'app.greystorestatus',
		'app.dyingstatus',
		'app.finishingstatus',
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
		$this->Greystatus = ClassRegistry::init('Greystatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Greystatus);

		parent::tearDown();
	}

}
