<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
/**
 * Doctor Model
 *
 * @property Appointment $Appointment
 */
class Doctor extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Name Field Cannot Be Empty',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Need A valid Email',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Password Cannot Be Empty',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cell' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Phone Number Cannot Be Empty',
			),
			'rule' => array('lengthBetween', 10, 12),
      'message' => 'Phone Number must be between 10 to 12 Digits long.'
		),
		
		'daysInWeek' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Days Cannot Be Empty',
			),
			'rule' => array('lengthBetween', 1, 7),
      'message' => 'Visiting Days must be between 1 to 7 Days.'
		),

		'photo' => array(
        'rule' => 'isCompletedUpload',
        'message' => 'File was not successfully uploaded'
    )
	);



	// The Associations below have been created with all possible keys, those that are not needed can be removed
	public $actsAs = array(
        'Upload.Upload' => array(
            'photo' => array(
                'fields' => array(
                    'dir' => 'photo_dir'
                )
            )
        )
    );
/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Appointment' => array(
			'className' => 'Appointment',
			'foreignKey' => 'doctor_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$passwordHasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash(
				$this->data[$this->alias]['password']
			);
		}
		return true;
	}


}
