<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		https://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
  /**
	 * Components loaded for this controller.
	 *
	 * @var array
	 */
	 //-=======================================================//
	public $components = array(
		'Flash',
		'RequestHandler',
		'Auth' => array(
					'authenticate' => array(
						'Form' => array(
							'fields' => array(
								'username' => 'email',
								'password' => 'password'
							),
							'passwordHasher' => 'Blowfish',
						),
					),
				'loginRedirect' => '/',
				'logoutRedirect' => '/',
				'authorize' => 'Controller',
		),

	);
//-=======================================================// */
	public $var = array();
	/**
	 * Helpers loaded for this controller.
	 *
	 * @var array
	 */
	public $helpers = array(
		'Form',
		'Html',
		'Flash',
	);

	/**
	 * Models loaded for this controller.
	 *
	 * @var array
	 */
	public $uses = array();

	public function isAuthorized($user){
		return false;
	}
	/**
	 * This function is executed before every action in the controller. It’s a
	 * handy place to check for an active session or inspect user permissions.
	 *
	 * @return void
	 */
	public function beforeFilter() {
		parent::beforeFilter();

	}

	/**
	 * Called after controller action logic, but before the view is rendered.
	 *
	 * @return void
	 */
	public function beforeRender() {
		parent::beforeRender();

	}

	/**
	 * Called after every controller action, and after rendering is complete.
	 * This is the last controller method to run.
	 *
	 * @return void
	 */
	public function afterFilter() {
		parent::afterFilter();

	}
}
