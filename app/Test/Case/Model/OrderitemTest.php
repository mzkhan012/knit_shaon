<?php
App::uses('Orderitem', 'Model');

/**
 * Orderitem Test Case
 *
 */
class OrderitemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.orderitem',
		'app.internalorder',
		'app.knitingplan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Orderitem = ClassRegistry::init('Orderitem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Orderitem);

		parent::tearDown();
	}

}
