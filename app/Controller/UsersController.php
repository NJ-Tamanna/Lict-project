<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {
    public $uses = array('Appointment','Patient','Doctor');
    //public $uses = array('Doctor');
    //public $uses = array('Appointment');
    public function beforeFilter(){
      $this->Auth->allow('login','logout');

      $id = $this->Auth->User('id');
      if($id<100000){
        $this->Auth->allow('admins');
      } else if( $id < 300000000) {
        $this->Auth->allow('doctors');
      } else if($id >300000000) {
        $this->Auth->allow('patients');
      }
    }

    public function isAuthorized($user){

    }
//-=======================================================//
    public function login() {
      $this->layout= 'loginLayout'; // For the login layout :)
  		if ($this->request->is('post')) {
        //debug($this->request->data);
        //die();
  			if ($this->Auth->login()) {
          $id = $this->Auth->User('id');
          if($id<100000){
          //  $now = "admin";
            return $this->redirect(array('action' => "admins/{$id}"));
          } else if($id<300000000) {
            //$now = "doctor";
            return $this->redirect(array('action' => 'doctors'));
          } else if($id>300000000) {
            //$now = "patient";
            return $this->redirect(array('action' => 'patients'));
          } else{
            $now = "not a user";
          }
          //echo $now;
          die();

  				return $this->redirect($this->Auth->redirectUrl());
  			}
        //debug($this->Auth->login());
  			$this->Flash->error(__('Invalid username or password, try again'));
  		}
  	}
  	public function logout() {
  		return $this->redirect($this->Auth->logout());
  	}/*
*/
//-=======================================================//

    public function index(){
      return $this->redirect(array('action' => 'login'));
    }

    public function doctors($id=null){
        $this->layout= 'defaultForDoc'; //doctor layout

        $id = $this->Auth->User('id');
        $params = array('conditions' => array('Appointment.doctor_id' => $id));
        $id = $this->Appointment->find('all',$params);
        $this->set('id', $id);
      }

    public function patients($id=null){
      $this->layout= 'defaultForPat';
      $id = $this->Auth->User('id');
      $params = array('conditions' => array('Patient.id' => $id));
      $id = $this->Patient->find('all',$params);
      //debug($id);
      //die();
      $this->set('id', $id);
    //return  $this->redirect(array('controller'=>'Patients','action' => "view/{$id}"));
    }

    public function admins($id=null){
      $id = $this->Auth->User('id');
      return  $this->redirect(array('controller'=>'Admins','action' => "view/{$id}"));
    }



}


?>
