<?php
/**
 * Appointment Fixture
 */
class AppointmentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'primary'),
		'doctor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 100, 'unsigned' => false, 'key' => 'index'),
		'patient_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 100, 'unsigned' => false, 'key' => 'index'),
		'appoint_date' => array('type' => 'datetime', 'null' => false, 'default' => null, 'length' => 6),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'length' => 6),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'length' => 6),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'doctor_id' => array('column' => 'doctor_id', 'unique' => 0),
			'patient_id' => array('column' => 'patient_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'doctor_id' => 1,
			'patient_id' => 1,
			'appoint_date' => '2018-01-15 21:16:33',
			'created' => '2018-01-15 21:16:33',
			'modified' => '2018-01-15 21:16:33'
		),
	);

}
