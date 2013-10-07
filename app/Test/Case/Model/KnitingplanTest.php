<?php
App::uses('Knitingplan', 'Model');

/**
 * Knitingplan Test Case
 *
 */
class KnitingplanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.knitingplan',
		'app.orderitem',
		'app.internalorder',
		'app.jobcard',
		'app.roll',
		'app.greystorestatus',
		'app.dyingstatus',
		'app.finishingstatus',
		'app.greystatus',
		'app.orderstatus',
		'app.mainstorestatus'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Knitingplan = ClassRegistry::init('Knitingplan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Knitingplan);

		parent::tearDown();
	}

}
