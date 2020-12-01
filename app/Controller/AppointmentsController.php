<?php
App::uses('AppController', 'Controller');
/**
 * Appointments Controller
 *
 * @property Appointment $Appointment
 * @property PaginatorComponent $Paginator
 */
class AppointmentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function beforeFilter(){

		$id = $this->Auth->User('id');
		if($id<100000){
			$this->Auth->allow('index','view','add','edit','delete');
		} else if( $id < 300000000) {
			$this->Auth->allow('doctors_view','doctors_add','doctors_edit','delete_doc');
		} else if($id >300000000) {
			$this->Auth->allow('patients_add');
		}

	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Appointment->recursive = 0;
		$this->set('appointments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Appointment->exists($id)) {
			throw new NotFoundException(__('Invalid appointment'));
		}
		$options = array('conditions' => array('Appointment.' . $this->Appointment->primaryKey => $id));
		$this->set('appointment', $this->Appointment->find('first', $options));
	}

	public function doctors_view($id = null) {
		  $this->layout= 'defaultForDoc';
		if (!$this->Appointment->exists($id)) {
			throw new NotFoundException(__('Invalid appointment'));
		}
		$options = array('conditions' => array('Appointment.' . $this->Appointment->primaryKey => $id));
		$this->set('appointment', $this->Appointment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			//debug($this->request->data);
			//die();

			$this->Appointment->create();
			if ($this->Appointment->save($this->request->data)) {
				$this->Flash->success(__('The appointment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The appointment could not be saved. Please, try again.'));
			}
		}
		$doctors = $this->Appointment->Doctor->find('list');
		$patients = $this->Appointment->Patient->find('list');
		$this->set(compact('doctors', 'patients'));
	}

	public function doctors_add() {
		$this->layout= 'defaultForDoc'; //doctor layout
		if ($this->request->is('post')) {
			$this->Appointment->create();
			$id = $this->Auth->User('id');
			$params = $id;
			if ($this->Appointment->doctor_save($this->request->data,$params)) {
				$this->Flash->success(__('The appointment has been saved.'));
				return $this->redirect(array('controller'=>'users','action' => 'doctors'));
			} else {
				$this->Flash->error(__('The appointment could not be saved. Please, try again.'));
			}
		}
		$doctors = $this->Appointment->Doctor->find('list');
		$patients = $this->Appointment->Patient->find('list');
		$this->set(compact('doctors', 'patients'));
	}

	public function patients_add() {
		$this->layout= 'defaultForPat';
		if ($this->request->is('post')) {
			$this->Appointment->create();
			$id = $this->Auth->User('id');
			$params = $id;
			if ($this->Appointment->patient_save($this->request->data,$params)) {
				$this->Flash->success(__('The appointment has been saved.'));
				return $this->redirect(array('controller'=>'users','action' => 'patients'));
			} else {
				$this->Flash->error(__('The appointment could not be saved. Please, try again.'));
			}
		}
		$doctors = $this->Appointment->Doctor->find('list');
		$patients = $this->Appointment->Patient->find('list');
		$this->set(compact('doctors', 'patients'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Appointment->exists($id)) {
			throw new NotFoundException(__('Invalid appointment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->Appointment->id = $id;
			if ($this->Appointment->save($this->request->data)) {
				$this->Flash->success(__('The appointment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The appointment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Appointment.' . $this->Appointment->primaryKey => $id));
			$this->request->data = $this->Appointment->find('first', $options);
		}
		$doctors = $this->Appointment->Doctor->find('list');
		$patients = $this->Appointment->Patient->find('list');
		$this->set(compact('doctors', 'patients'));
	}


	public function doctors_edit($id = null) {
		  $this->layout= 'defaultForDoc';
		if (!$this->Appointment->exists($id)) {
			throw new NotFoundException(__('Invalid appointment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->Appointment->id = $id;
			$id = $this->Auth->User('id');
			$params = $id;
			if ($this->Appointment->doctor_save($this->request->data,$params)) {
				$this->Flash->success(__('The appointment has been saved.'));
				return $this->redirect(array('controller'=>'users','action' => 'doctors'));
			} else {
				$this->Flash->error(__('The appointment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Appointment.' . $this->Appointment->primaryKey => $id));
			$this->request->data = $this->Appointment->find('first', $options);
		}
		$doctors = $this->Appointment->Doctor->find('list');
		$patients = $this->Appointment->Patient->find('list');
		$this->set(compact('doctors', 'patients'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Appointment->id = $id;
		if (!$this->Appointment->exists()) {
			throw new NotFoundException(__('Invalid appointment'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Appointment->delete()) {
			$this->Flash->success(__('The appointment has been deleted.'));
		} else {
			$this->Flash->error(__('The appointment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	public function delete_doc($id = null) {
		$this->Appointment->id = $id;
		if (!$this->Appointment->exists()) {
			throw new NotFoundException(__('Invalid appointment'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Appointment->delete()) {
			$this->Flash->success(__('The appointment has been deleted.'));
		} else {
			$this->Flash->error(__('The appointment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('controller'=>'users','action' => 'doctors'));
	}
}
