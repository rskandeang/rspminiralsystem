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

 /**
 * This is the view for the user 
 * You can search your data in the view by ID, Username, Gender, Phone, Email.
 * 
 */

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


	/**
	* Created 15/09/2016
	* Sohour
	* notification: when you buy or withdrawal your money will alert to the admin side.
	* using it in all page for you can see it.
	* 
	*/
		$this->loadModel('Logs');	
		$Logs =$this->Logs->find('count', array('conditions'=>array('status'=>'1')));

		$this->set('logs',$Logs);
	}

	/**
	* User: Authentication for login  
	* @return: boolean
	*/

	function login(){
		$this->loadModel('Costomer');
		if ($this->request->is('post')) {
			$check = $this->request->data;
			foreach($check as $checked){
				$username = $checked['username'];
				$password = $checked['password'];
				
			}
			$find_user = $this->User->find('all', array(
			'conditions' => array(
			'username' => $username)));
			foreach($find_user as $find_users){
				$role = $find_users['User']['role'];
				//pr($role);exit;
			}
			if($role == 'user'){
				if ($this->Auth->login()) {
					
					$find_id = $this->Costomer->find('all', array(
					'conditions' => array(
					'user_name' => $username)));
					foreach($find_id as $find_ids){
						$id = $find_ids['Costomer']['id'];
					}
					$this->redirect( array('controller' => 'Clients', 'action' => 'view',$id));
					} else {
						$this->Session->setFlash(__('ឈ្មោះគណនីយ ឬ លេខសំងាត់មិនត្រិមត្រូវ, សូមព្យាយាមម្ដងទៀត​​ !'), 'default', array('class' => 'notification'), 'notification');
				}
			}else{
				if ($this->Auth->login()) {
				//pr($this->Auth->login());exit;
				// $this->Session->setFlash(__('សួរស្ដី, '. $this->Auth->user('username')));
				$this->redirect( array('controller' => 'Costomers', 'action' => 'index'));
				} else {
					$this->Session->setFlash(__('ឈ្មោះគណនីយ ឬ លេខសំងាត់មិនត្រិមត្រូវ, សូមព្យាយាមម្ដងទៀត​​ !'), 'default', array('class' => 'notification'), 'notification');
				}
			}
			
		}       
	}

	/**
	* User: Authentication for logout.
	* Destroy session  
	* @return: boolean
	*/

	function logout() {
		$this->Session->destroy();
		$this->redirect($this->Auth->logout());
	}

	/**
	* Delete User: just change the status 1 to 0, it not going to delete it from database.
	* @return: boolean
	*/

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
            $this->Session->setFlash(__('អ្នកបានលុបអ្នកគ្រប់គ្រងម្នាក់'));
            $this->redirect(array('action' => 'index'));
        }
		$this->Session->setFlash(__('អ្នកមិនអាចលុបអ្នកគ្រប់គ្រងបានទេ, សូមព្យាយាមម្ដងទៀត​​ !'), 'default', array('class' => 'notification'), 'notification');

        $this->redirect(array('action' => 'index'));
    }

    /**
	* Activate User back: just change the status 0 to 1, the user will
	* come to your index again.(reactivated the user.)
	* @return: boolean
	*/

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

    /**
	* notification: when you buy or withdrawal your money will alert to the admin side.
	* using it in all page for you can see it.
	*/
    
		$this->loadModel('Logs');	
		$Logs =$this->Logs->find('count', array('conditions'=>array('status'=>'1')));
		$this->set('logs',$Logs);

    }

    /**
	* Add new User: Create new user for the system
	* 
	*/

	function add(){
		if($this->request->is('post')){
			$this->User->create();
				if(!empty($this->data))
				{	/**
					* Check if image has been uploaded
					*/
					if(!empty($this->request->data['User']['image']['name']))
					{
						$file = $this->request->data['User']['image'];
						$ext = substr(strtolower(strrchr($file['name'], '.')), 1); 
						$arr_ext = array('jpg', 'jpeg', 'gif','png');

							if(in_array($ext, $arr_ext))
							{	/**
								* do the actual uploading of the file. First arg is the tmp name, second arg is 
								* where we are putting it
								* $file['name']: save the original name of image file.
								*/
								move_uploaded_file($file['tmp_name'], WWW_ROOT.'img/'.$file['name']);
								/**
								* prepare the filename for database entry
								*/
								$this->request->data['User']['image'] = $file['name'];
							}
					}
					/**
					* User Password : Include the password with encrypt to database.
					*/
					$this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);
					if($this->User->save($this->request->data)){
						$this->User->saveField('role', 'admin');
						$this->Session->setFlash(__('អ្នកបង្កើតអ្នកគ្រប់គ្រងម្នាក់ទៀត'));
						return $this->redirect('index');
					}else {
						$this->Session->setFlash(__('អ្នកបង្កើតអ្នកគ្រប់គ្រងមិនបានទេ, សូមព្យាយាមម្ដងទៀត​​ !'), 'default', array('class' => 'notification'), 'notification');
					}
					/**
					* Save data to database.
					*/

					$this->User->save($this->data);

			}
	}

	/**
	* notification: when you buy or withdrawal your money will alert to the admin side.
	* using it in all page for you can see it.
	*/

		$this->loadModel('Logs');	
		$Logs =$this->Logs->find('count', array('conditions'=>array('status'=>'1')));

		$this->set('logs',$Logs);
	}

	/**
	* Edit user: Update the user but without image profile.
	* @param: Take the id to compare to make sure that is the user u want to update
	* @return: boolean.
	*/

	function edit($id){
		
		$data = $this->User->findById($id);
		if($this->request->is(array('post','put'))){
			$this->User->id = $id;
			if($this->User->save($this->request->data)){
				$this->Session->setFlash('ពត៌មានរបស់អ្នកគ្រប់គ្រងត្រូវបានកែតម្រូវ');
				$this->redirect('index');
			}
				$this->Session->setFlash(__('ពត៌មានរបស់អ្នកគ្រប់គ្រងកែតម្រូវមិនទាន់បានទេ, សូមព្យាយាមម្ដងទៀត​​ !'), 'default', array('class' => 'notification'), 'notification');

		}
		$this->request->data = $data;
			//$data = $this->User->findById($id);
		/*************************************************************************************
		* Update user with upload image
		*************************************************************************************/
	/*	
		$data = $this->User->find('first',array(
			'conditions'=>array('id'=>$id)));
			$f = $data['User']['image'];
			@unlink(WWW_ROOT.'img/'.$f);
			if($this->request->is(array('post','put'))){
				$this->User->id = $id;
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
					
						
						// $this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);
						if($this->User->save($this->request->data)){
							$this->Session->setFlash('You have been update '. $this->Auth->user('username'));
							$this->redirect('index');
						}else{
							$this->Session->setFlash('This user could not been save. Please try agani!');
						}

					}

		}
		$this->request->data = $data;
	}
*/
	/**
	* notification: when you buy or withdrawal your money will alert to the admin side.
	* using it in all page for you can see it.
	*/

		$this->loadModel('Logs');	
		$Logs =$this->Logs->find('count', array('conditions'=>array('status'=>'1')));
		$this->set('logs',$Logs);
	 }
}   
