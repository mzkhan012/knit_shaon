<?php
/**
 * RollFixture
 *
 */
class RollFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'barcode' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'weight' => array('type' => 'float', 'null' => false, 'default' => null),
		'createdby' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modifiedby' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'islabeled' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
		'greystorestatus_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'dyingstatus_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'finishingstatus_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'greystatus_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'orderstatus_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'mainstorestatus_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'jobcard_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'barcode' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-10-03 03:29:08',
			'modified' => '2013-10-03 03:29:08',
			'weight' => 1,
			'createdby' => 'Lorem ipsum dolor sit amet',
			'modifiedby' => 'Lorem ipsum dolor sit amet',
			'islabeled' => 1,
			'greystorestatus_id' => 1,
			'dyingstatus_id' => 1,
			'finishingstatus_id' => 1,
			'greystatus_id' => 1,
			'orderstatus_id' => 1,
			'mainstorestatus_id' => 1,
			'jobcard_id' => 1
		),
	);

}
