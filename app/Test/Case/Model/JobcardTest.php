<?php
App::uses('Jobcard', 'Model');

/**
 * Jobcard Test Case
 *
 */
class JobcardTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jobcard',
		'app.knitingplan',
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
		$this->Jobcard = ClassRegistry::init('Jobcard');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Jobcard);

		parent::tearDown();
	}

}
