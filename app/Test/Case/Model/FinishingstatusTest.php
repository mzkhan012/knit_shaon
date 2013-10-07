<?php
App::uses('Finishingstatus', 'Model');

/**
 * Finishingstatus Test Case
 *
 */
class FinishingstatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.finishingstatus',
		'app.roll',
		'app.greystorestatus',
		'app.dyingstatus',
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
		$this->Finishingstatus = ClassRegistry::init('Finishingstatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Finishingstatus);

		parent::tearDown();
	}

}
