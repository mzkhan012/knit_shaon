<?php
App::uses('Orderstatus', 'Model');

/**
 * Orderstatus Test Case
 *
 */
class OrderstatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.orderstatus',
		'app.roll',
		'app.greystorestatus',
		'app.dyingstatus',
		'app.finishingstatus',
		'app.greystatus',
		'app.mainstorestatus',
		'app.jobcard',
		'app.knitingplan',
		'app.orderitem',
		'app.internalorder'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Orderstatus = ClassRegistry::init('Orderstatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Orderstatus);

		parent::tearDown();
	}

}
