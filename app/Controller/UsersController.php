<?php
class UsersController extends AppController {
	public $helpers = array(
			  'Js' => array('Jquery'),
			  'Paginator',
			  'Html',
			  'Form');
	public $components = array(
			  'Paginator',
			  'RequestHandler');
	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('login'); 
    }
	function index(){
		$keyword = $this->request->query('Search');
		$this->paginate = array(
				'limit' => 10,
				'conditions' => array(
						'User.status' => '1',
						'OR' => array(
								array('User.id LIKE' => '%' . $keyword . '%'),
								array('User.username LIKE' => '%' . $keyword . '%'),
								array('User.gender LIKE' => '%' . $keyword . '%'),
								array('User.phone LIKE' => '%' . $keyword . '%'),
								array('User.email LIKE' => '%' . $keyword . '%'),
								)
						
							)
						);

		
		//$users = $this->User->find('all');
		$this->set('users',$this->paginate());
		// var_dump($keyword);exit();

		//test ------------------------------
		$this->loadModel('Logs');	
		$Logs =$this->Logs->find('count', array('conditions'=>array('status'=>'1')));

		$this->set('logs',$Logs);
	}

	function login(){
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				// $this->Session->setFlash(__('សួរស្ដី, '. $this->Auth->user('username')));
				$this->redirect( array('controller' => 'Costomers', 'action' => 'index'));
				// $this->redirect('index');
			} else {
				$this->Session->setFlash(__('ឈ្មោះគណនីយ ឬ លេខសំងាត់មិនត្រិមត្រូវ'));
			}
		}       
	}
	function logout() {
		
		$this->Session->destroy();
		$this->redirect($this->Auth->logout());
	}
	public function delete($id = null) {
         
        if (!$id) {
            $this->Session->setFlash('Please provide a user id');
            $this->redirect(array('action'=>'index'));
        }
         
        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash('Invalid user id provided');
            $this->redirect(array('action'=>'index'));
        }
        if ($this->User->saveField('status', 0)) {
            $this->Session->setFlash(__('អ្នកបានលុបអ្នកប្រើប្រាស់ម្នាក់'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('អ្នកមិនអាចលុបអ្នកប្រើប្រាស់បានទេ'));
        $this->redirect(array('action' => 'index'));
    }
     public function activate($id = null) {
         
        if (!$id) {
            $this->Session->setFlash('Please provide a user id');
            $this->redirect(array('action'=>'index'));
        }
         
        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash('Invalid user id provided');
            $this->redirect(array('action'=>'index'));
        }
        if ($this->User->saveField('status', 1)) {
            $this->Session->setFlash(__('User re-activated'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not re-activated'));
        $this->redirect(array('action' => 'index'));

        //test ------------------------------
		$this->loadModel('Logs');	
		$Logs =$this->Logs->find('count', array('conditions'=>array('status'=>'1')));

		$this->set('logs',$Logs);
    }
	function add(){
		if($this->request->is('post')){
			$this->User->create();
				if(!empty($this->data))
				{
					//Check if image has been uploaded
					if(!empty($this->request->data['User']['image']['name']))
					{
						$file = $this->request->data['User']['image'];
						$ext = substr(strtolower(strrchr($file['name'], '.')), 1); 
						$arr_ext = array('jpg', 'jpeg', 'gif','png');

							if(in_array($ext, $arr_ext))
							{
								//do the actual uploading of the file. First arg is the tmp name, second arg is 
								//where we are putting it
								move_uploaded_file($file['tmp_name'], WWW_ROOT.'img/'.$file['name']);
								//prepare the filename for database entry
								$this->request->data['User']['image'] = $file['name'];
							}
					}
					$this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);
					if($this->User->save($this->request->data)){
						return $this->redirect('index');
					}else {
						$this->Session->setFlash(__('អ្កបង្កើតអ្នកប្រើប្រាស់មិនបានទេ, សូមព្យាយាមម្ដងទៀត។'));
					}
					$this->User->save($this->data);
				}
		}

		//test ------------------------------
		$this->loadModel('Logs');	
		$Logs =$this->Logs->find('count', array('conditions'=>array('status'=>'1')));

		$this->set('logs',$Logs);
	}
	function edit($id){
		//echo $id;exit();
		$data = $this->User->findById($id);
		if($this->request->is(array('post','put'))){
			$this->User->id = $id;
			if($this->User->save($this->request->data)){
				$this->Session->setFlash('ព៍តមានរបស់អ្នកប្រើប្រាស់ត្រូវបានកែតម្រូវ');
				$this->redirect('index');
			}
		}
		$this->request->data = $data;
			//$data = $this->User->findById($id);

		//// edit with photo of the user

	// 	$data = $this->User->find('first',array(
	// 		'conditions'=>array('id'=>$id)));
	// 		$f = $data['User']['image'];
	// 		@unlink(WWW_ROOT.'img/'.$f);
	// 		if($this->request->is(array('post','put'))){
	// 			$this->User->id = $id;
	// 			if(!empty($this->data))
	// 				{
	// 					//Check if image has been uploaded
	// 					if(!empty($this->request->data['User']['image']['name']))
	// 					{
	// 						$file = $this->request->data['User']['image'];
	// 						$ext = substr(strtolower(strrchr($file['name'], '.')), 1); 
	// 						$arr_ext = array('jpg', 'jpeg', 'gif','png');
								
	// 							if(in_array($ext, $arr_ext))
	// 							{
	// 								//do the actual uploading of the file. First arg is the tmp name, second arg is 
	// 								//where we are putting it
	// 								move_uploaded_file($file['tmp_name'], WWW_ROOT.'img/'.$file['name']);
	// 								//prepare the filename for database entry
	// 								$this->request->data['User']['image'] = $file['name'];
	// 							}
	// 					}
					
						
	// 					// $this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);
	// 					if($this->User->save($this->request->data)){
	// 						$this->Session->setFlash('You have been update '. $this->Auth->user('username'));
	// 						$this->redirect('index');
	// 					}else{
	// 						$this->Session->setFlash('This user could not been save. Please try agani!');
	// 					}

	// 				}

	// 	}
	// 	$this->request->data = $data;
	// }
		//test ------------------------------
		$this->loadModel('Logs');	
		$Logs =$this->Logs->find('count', array('conditions'=>array('status'=>'1')));

		$this->set('logs',$Logs);
	 }
}   
