<?php
class CostomersController extends AppController {
	public function initialize()
		{
    parent::initialize();
    $this->loadComponent('Auth', [
	        'loginAction' => [
	            'controller' => 'Costomers',
	            'action' => 'login'
	        ],
	        'authenticate' => [
	            'Form' => [
	                'fields' => ['username'=>'username','password'=>'password']
	                
	            ]
	        ],
	        'storage' => 'Session'
	    ]);
	}

    public function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('add', 'logout');
	}

	function index(){

		$costomers = $this->Costomer->find('all');
		$this->set('costomers',$costomers);
	}

	// public function login() {
	//     if ($this->request->is('post')) {
	//         if ($this->Auth->login()) {
	//             return $this->redirect($this->Auth->redirectUrl());
	//         }
	//         // $this->Flash->error(__('Invalid username or password, try again'));
	//     }
	// }

	function login(){

		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect('index');
			} else {
				$this->Session->setFlash(__('Invalid username or password'));
			}
		}       
	}

	function logout() {
		
		$this->Session->destroy();
		$this->redirect($this->Auth->logout());
	}

	function add(){

		$this->loadModel('One');
		$this->loadModel('Two');
		$this->loadModel('Three');
		$this->loadModel('Four');
		if($this->request->is('post')){
			$this->Costomer->create();
			$this->request->data['Costomer']['password'] = AuthComponent::password($this->request->data['Costomer']['password']);
			if($this->Costomer->save($this->request->data)){
				$id = $findId['Costomer']['id'];
				$code = $this->request->data['Costomer']['code'];		
					 if(strpos($code, 'st') !== false){
						$this->Three->create();
						$own_id = date('YmdHis', strtotime("$date $time"));
						$this->Three->set(array(
						'code' =>  'nd'.$own_id,
						'costomer_id' => $id));
						$this->Three->save($this->request->data);
						$this->Session->setFlash(__('Three table.'));
						$three = $this->Three->find('first', array(
													'order' => array('Three.code' => 'asc')));
						$str2 = substr($code, 2);
						$is_exist = $this->One->find('count',array(
														'conditions' => array(
														'One.code' => $str2)));
						 if($is_exist == 0){
							 $this->One->saveField('code', $str2);
						 }
						$this->Two->saveField('code','st'.$own_id); 
						}
					else if(strpos($code, 'nd') !== false){
							$this->Four->create();
							$own_id_rd = date('YmdHis', strtotime("$date $time"));
							$this->Four->set(array(
							'code' =>  'rd'.$own_id_rd,
							'costomer_id' => $id));
							$this->Four->save($this->request->data);	
							$this->Session->setFlash(__('Four table.'));				
							$str2 = substr($code, 2);
							$is_exist = $this->One->find('count',array(
														'conditions' => array(
														'One.code' => $str2)));
						 if($is_exist == 0){
							 $this->One->saveField('code', $str2);
						 }
							$this->Two->saveField('code','st'.$own_id_rd);							
							$this->Three->saveField('code','nd'.$own_id_rd);
						}
					else if(strpos($code, 'rd') !== false){
							//$str2 = substr($code, 2);
							$this->Four->create();
							$own_id_rd = date('YmdHis', strtotime("$date $time"));
							$this->Four->set(array(
							'code' =>  'rd'.$own_id_rd,
							'costomer_id' => $id));
							$this->Four->save($this->request->data);	
							$this->Session->setFlash(__('Four1 table.'));
							$str2 = substr($code, 2);
							$is_exist = $this->One->find('count',array(
														'conditions' => array(
														'One.code' => $str2)));
							 if($is_exist == 0){
								 $this->One->saveField('code', $str2);
							 }
							$this->Two->saveField('code','st'.$own_id_rd);	
							$this->Three->saveField('code','nd'.$own_id_rd);
						}
					else{
							$this->Two->create();
								$own_id_rd = date('Ymd');
								$this->Two->set(array(
								'code' => 'st'.$own_id_rd,
								'costomer_id' => $id));
								$this->Two->save($this->request->data);	
								$this->Session->setFlash(__('tow table.'));
						}
					$this->redirect('index');
			}

		}
	}
		public function delete($id = null) {
         
        if (!$id) {
            $this->Session->setFlash('Please provide a customer id');
            $this->redirect(array('action'=>'index'));
        }
         
        $this->Costomer->id = $id;
        if (!$this->Costomer->exists()) {
            $this->Session->setFlash('Invalid customer id provided');
            $this->redirect(array('action'=>'index'));
        }
        if ($this->Costomer->saveField('status', 0)) {
            $this->Session->setFlash(__('Customer deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Customer was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
     public function activate($id = null) {
         
        if (!$id) {
            $this->Session->setFlash('Please provide a Customer id');
            $this->redirect(array('action'=>'index'));
        }
         
        $this->Costomer->id = $id;
        if (!$this->Costomer->exists()) {
            $this->Session->setFlash('Invalid Customer id provided');
            $this->redirect(array('action'=>'index'));
        }
        if ($this->Costomer->saveField('status', 1)) {
            $this->Session->setFlash(__('Customer re-activated'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Customer was not re-activated'));
        $this->redirect(array('action' => 'index'));
    }
		public function edit($id){
			$data = $this->Costomer->find('first',array(
			'conditions'=>array('id'=>$id)));
			// $data = $this->Costomer->findById($id);
			if($this->request->is(array('post','put'))){
				$this->Costomer->id=$id;
				if($this->Costomer->save($this->request->data)){
					$this->Session->setFlash('You have been update');
				    $this->redirect('index');
				}
			}

			$this->request->data =$data;
	}
	}

