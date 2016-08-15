<?php
class UsersController extends AppController {

	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('login'); 
    }
	function index(){
		$users = $this->User->find('all');
		$this->set('users',$users);
	}  
	function login(){
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->Session->setFlash(__('Welcome, '. $this->Auth->user('username')));
				$this->redirect('index');
			} else {
				$this->Session->setFlash(__('Invalid username or password'));
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
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
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
						$this->Session->setFlash(__('The user could not be created. Please, try again.'));
					}
					$this->User->save($this->data);
				}
		}
	}
	
}   
