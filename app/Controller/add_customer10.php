
	function add(){
		echo 'Hello world';
		
		$this->loadModel('One');
		$this->loadModel('Two');
		$this->loadModel('Three');
		$this->loadModel('Four');
		$this->loadModel('User');
		$user_role = $this->Session->read('Auth.User.role');
		pr($user_role);
		
		if($this->request->is('post')){
			$this->Costomer->create();
			if($this->Costomer->save($this->request->data)){
				$findId = $this->Costomer->find('first',array(
                            'order'=>'Costomer.id DESC')); 
                $id = $findId['Costomer']['id'];
				$code = $this->request->data['Costomer']['code'];
				$first = $this->request->data['Costomer']['first'];
					if($first == 1){
						$this->One->create();
						//$own_id = date('YmdHis');
						$own_id = $id;
						$this->One->set(array(
						'code' =>  $own_id,
						'costomer_id' => $id
						));
						$this->One->save($this->request->data);
			
						if($this->Costomer->saveField('user_name', $own_id)){
							$create_user = $this->Costomer->find('first',array(
                            'order'=>'Costomer.id DESC'));
							$this->User->create();
							foreach($create_user as $create_users){
								$firstname = $create_users['first_name'];
								$lastname = $create_users['last_name'];
								$username = $create_users['user_name'];
								$gender = $create_users['gender'];
								$pass_word = $create_users['password'];
								$phone = $create_users['phone'];
								$email = $create_users['email'];
							}
							$this->request->data['Costomer']['password'] = AuthComponent::password($this->request->data['Costomer']['password']);
							$password = $this->request->data['Costomer']['password'];
							$test = $this->User->set(array(
							'firstname' =>  $firstname,
							'lastname' =>  $lastname,
							'username' =>  $username,
							'role' =>  'user',
							'gender' =>  $gender,
							'password' =>  $password,
							'phone' =>  $phone,
							'email' => $email
							));
							
							$this->User->save($this->request->data);
							//$this->Session->setFlash(__('អ្នកបានបង្កើតអតិថិជនថ្មីម្នាក់ទៀត'));

							//$this->redirect(array(
							//'controller'=>'Costomers',
							//'action'=>'index'));
							
							if($user_role == 'admin'){
							$this->Session->setFlash(__('អ្នកបានបង្កើតអតិថិជនថ្មីម្នាក់ទៀត'));

							$this->redirect(array(
							'controller'=>'Costomers',
							'action'=>'index'));	
							}
							else{
								
								$this->Session->setFlash(__('welcome Username: '.$username.' Password: '.$pass_word));
								$this->redirect(array(
							'controller'=>'Users',
							'action'=>'login'));
								
							}
							
								
							
						}
						
						
					}	

					else if(strpos($code, 'ST') !== false){
						   $find_referid = $this->request->data;
							foreach($find_referid as $find_referids){
								$refer_code = $find_referids['code'];
							}
							
							if(strpos($refer_code, 'ST') !== false || strpos($refer_code, 'ND') !== false || strpos($refer_code, 'RD') !== false){
								$code_refer = substr($refer_code, 2);
								//pr($refer_code);exit;
							}
							$find_refer_id = $this->One->find('all', array(
							'conditions' => array(
							'code' => $code_refer)));
							//pr($find_refer_id);exit;
							foreach($find_refer_id as $find_refer_ids){
								$refer_id = $find_refer_ids['One']['costomer_id'];
							}
							
						$find_refer = $this->Two->find('all',array(
																'conditions' => array('Two.code' => $code)));
						
						foreach($find_refer as $find_refers){
							$re_code = $find_refers['Two']['refer'];
						}	
						$this->Three->create();
						//$own_id = date('YmdHis');
						$own_id = $refer_id.$id;
						$this->Three->set(array(
						'code' =>  'ND'.$own_id,
						'costomer_id' => $id,
						'refer' => $re_code));
						$this->Three->save($refer = $this->request->data);
						
						//$this->Session->setFlash(__('អ្នកបានបង្កើតអតិថិជនថ្មីម្នាក់ទៀត'));

						if($this->Costomer->saveField('user_name', 'ND'.$own_id)){
							$create_user = $this->Costomer->find('first',array(
                            'order'=>'Costomer.id DESC'));
							$this->User->create();
							foreach($create_user as $create_users){
								$firstname = $create_users['first_name'];
								$lastname = $create_users['last_name'];
								$username = $create_users['user_name'];
								$gender = $create_users['gender'];
								$pass_word = $create_users['password'];
								$phone = $create_users['phone'];
								$email = $create_users['email'];
							}
							$this->request->data['Costomer']['password'] = AuthComponent::password($this->request->data['Costomer']['password']);
							$password = $this->request->data['Costomer']['password'];
							$test = $this->User->set(array(
							'firstname' =>  $firstname,
							'lastname' =>  $lastname,
							'username' =>  $username,
							'role' =>  'user',
							'gender' =>  $gender,
							'password' =>  $password,
							'phone' =>  $phone,
							'email' => $email
							));
							
							$this->User->save($this->request->data);
							
							
						}

						$three = $this->Three->find('first', array(
													'order' => array('Three.code' => 'asc')));
						$str2 = substr($code, 2);
						
						$is_exist = $this->One->find('count',array(
														'conditions' => array(
														'One.code' => $str2
														)));
						$cos_id = $this->Two->find('all',array(
							'conditions' => array(
							'Two.code' => $code)));
							foreach($cos_id as $cos_ids){
								$cos_idst = $cos_ids['Two']['costomer_id'];
								//pr($cos_idst);
							}
						//pr($cos_idst);exit;	 
						 if($is_exist == 0){
							 
							$this->One->set(array(
								'code' =>  $str2,
								'costomer_id' => $cos_idst));
							$this->One->save($this->request->data);
						 }
				
						$this->Two->set(array(
						'code' =>  'ST'.$own_id,
						'refer' => $str2,
						'costomer_id' => $id));
						$this->Two->save($this->request->data);
						//pr($test);exit;
						$testsent = $this->One->set(array(
								'code' =>  $own_id,
								'costomer_id' => $id));
						//pr($testsent);exit;
						
							$this->One->save($this->request->data);
								
							if($user_role == 'admin'){
							$this->Session->setFlash(__('អ្នកបានបង្កើតអតិថិជនថ្មីម្នាក់ទៀត'));

							$this->redirect(array(
							'controller'=>'Costomers',
							'action'=>'index'));	
							}
							else{
								
								$this->Session->setFlash(__('welcome Username: '.$username.' Password: '.$pass_word));
								$this->redirect(array(
							'controller'=>'Users',
							'action'=>'login'));
								
							}
					}	
					else if(strpos($code, 'ND') !== false){
						$find_referid = $this->request->data;
							foreach($find_referid as $find_referids){
								$refer_code = $find_referids['code'];
							}
							
							if(strpos($refer_code, 'ST') !== false || strpos($refer_code, 'ND') !== false || strpos($refer_code, 'RD') !== false){
								$code_refer = substr($refer_code, 2);
								//pr($code_refer);exit;
							}
							$find_refer_id = $this->One->find('all', array(
							'conditions' => array(
							'code' => $code_refer)));
							foreach($find_refer_id as $find_refer_ids){
								$refer_id = $find_refer_ids['One']['costomer_id'];
							}
						$find_refer = $this->Three->find('all',array(
														'conditions' => array(
														'Three.code' => $code)));
						
						foreach($find_refer as $find_refers){
							$re_code = $find_refers['Three']['refer'];	
							
						}
							$this->Four->create();
							//$own_id = date('YmdHis');
							$own_id = $refer_id.$id;
							$this->Four->set(array(
							'code' =>  'RD'.$own_id,
							'costomer_id' => $id,
							'refer' => $re_code));
							$this->Four->save($this->request->data);
							if($this->Costomer->saveField('user_name', 'RD'.$own_id)){
								$create_user = $this->Costomer->find('first',array(
								'order'=>'Costomer.id DESC'));
								$this->User->create();
								foreach($create_user as $create_users){
									$firstname = $create_users['first_name'];
									$lastname = $create_users['last_name'];
									$username = $create_users['user_name'];
									$gender = $create_users['gender'];
									$pass_word = $create_users['password'];
									$phone = $create_users['phone'];
									$email = $create_users['email'];
								}
								$this->request->data['Costomer']['password'] = AuthComponent::password($this->request->data['Costomer']['password']);
								$password = $this->request->data['Costomer']['password'];
								$test = $this->User->set(array(
								'firstname' =>  $firstname,
								'lastname' =>  $lastname,
								'username' =>  $username,
								'role' =>  'user',
								'gender' =>  $gender,
								'password' =>  $password,
								'phone' =>  $phone,
								'email' => $email
								));
								
								$this->User->save($this->request->data);
								
								
								
							
							}
										
							$str2 = substr($code, 2);
							$addstr = 'ST'.$str2;
							$threestr = 'ND'.$str2;
							//pr($threestr);
							$is_exist = $this->One->find('count',array(
														'conditions' => array(
														'One.code' => $str2)));
														
							$cos_id = $this->Two->find('all',array(
								'conditions' => array(
								'Two.code' => $addstr)));
							
							foreach($cos_id as $cos_ids){
								$cos_idst = $cos_ids['Two']['costomer_id'];
							}
							//pr($cos_idst);exit;
						 if($is_exist == 0){
							 $this->One->set(array(
								'code' =>  $str2,
								'costomer_id' => $cos_idst));
							pr($this->One->save($this->request->data));exit;
							//$this->One->saveField('code', $str2);
						 }
						 
							$this->Two->set(array(
								'code' =>  'ST'.$own_id,
								'refer' => $str2,
								'costomer_id' => $id));
						
							$this->Two->save($this->request->data);
							$find_refer_two = $this->Two->find('all',array(
													'conditions' => array(
													'Two.code' => $addstr)));
							foreach($find_refer_two as $find_refer_twos){
								$re_two = $find_refer_twos['Two']['refer'];
							}
								
							$this->Three->set(array(
								'code' =>  'ND'.$own_id,
								'refer' => $re_two,
								'costomer_id' => $id));
							
							$this->Three->save($this->request->data);
							
							//$this->Three->saveField('code','nd'.$own_id);
							$ami = $this->One->set(array(
								'code' =>  $own_id,
								'costomer_id' => $id));
								$this->One->save($this->request->data);
								/*	if($user_role == 'admin'){
							$this->Session->setFlash(__('អ្នកបានបង្កើតអតិថិជនថ្មីម្នាក់ទៀត'));

							$this->redirect(array(
							'controller'=>'Costomers',
							'action'=>'index'));	
							}
							else{
								
								$this->Session->setFlash(__('welcome Username: '.$username.' Password: '.$pass_word));
								$this->redirect(array(
							'controller'=>'Users',
							'action'=>'login'));
								
							}*/
								
				}
					else if(strpos($code, 'RD') !== false){
						$find_referid = $this->request->data;
							foreach($find_referid as $find_referids){
								$refer_code = $find_referids['code'];
							}
							
				
							if(strpos($refer_code, 'ST') !== false || strpos($refer_code, 'ND') !== false || strpos($refer_code, 'RD') !== false){
								$code_refer = substr($refer_code, 2);
								//pr($code_refer);exit;
							}
							$find_refer_id = $this->One->find('all', array(
							'conditions' => array(
							'code' => $code_refer)));
							//pr($refer_id);exit;
							foreach($find_refer_id as $find_refer_ids){
								$refer_id = $find_refer_ids['One']['costomer_id'];
							}
						
						$find_refer = $this->Four->find('all',array(
								'conditions' => array('Four.code' => $code)));
								
						foreach($find_refer as $find_refers){
							$re_code = $find_refers['Four']['code'];	
							
							$str_four = substr($re_code, 2);
							$addstr = 'ST'.$str_four;
							$str_three = 'ND'.$str_four;
						}
						$test_three = $this->Three->find('all',array(
																'conditions' => array('Three.code' => $str_three)));
							foreach($test_three as $test_threes){
								$check_three = $test_threes['Three']['code'];
								$check_three_refer = $test_threes['Three']['refer'];
							}
							if($str_three == $check_three){
								$this->Four->create();
								//$own_id = date('YmdHis');
								$own_id = $refer_id.$id;
								$this->Four->set(array(
								'code' =>  'RD'.$own_id,
								'costomer_id' => $id,
								'refer' => $check_three_refer));
								

								$this->Four->save($this->request->data);
						// ​		$this->Session->setFlash(__('អ្នកបានបង្កើតអតិថិជនទីបូន'));
								if($this->Costomer->saveField('user_name', 'RD'.$own_id)){
									$create_user = $this->Costomer->find('first',array(
									'order'=>'Costomer.id DESC'));
									$this->User->create();
									foreach($create_user as $create_users){
										$firstname = $create_users['first_name'];
										$lastname = $create_users['last_name'];
										$username = $create_users['user_name'];
										$gender = $create_users['gender'];
										$pass_word = $create_users['password'];
										$phone = $create_users['phone'];
										$email = $create_users['email'];
									}
									$this->request->data['Costomer']['password'] = AuthComponent::password($this->request->data['Costomer']['password']);
									$password = $this->request->data['Costomer']['password'];
									$test = $this->User->set(array(
									'firstname' =>  $firstname,
									'lastname' =>  $lastname,
									'username' =>  $username,
									'role' =>  'user',
									'gender' =>  $gender,
									'password' =>  $password,
									'phone' =>  $phone,
									'email' => $email
									));
									
									$this->User->save($this->request->data);
									
									
									
									if($user_role == 'admin'){
							$this->Session->setFlash(__('អ្នកបានបង្កើតអតិថិជនថ្មីម្នាក់ទៀត'));

							$this->redirect(array(
							'controller'=>'Costomers',
							'action'=>'index'));	
							}
							else{
								
								$this->Session->setFlash(__('welcome Username: '.$username.' Password: '.$pass_word));
								$this->redirect(array(
							'controller'=>'Users',
							'action'=>'login'));
								
							}
								}
								
								$str2 = substr($code, 2);
								$is_exist = $this->One->find('count',array(
															'conditions' => array(
															'One.code' => $str2)));
								
								$cos_id = $this->Two->find('all',array(
								'conditions' => array(
								'Two.code' => $addstr)));
							
									foreach($cos_id as $cos_ids){
										$cos_idst = $cos_ids['Two']['costomer_id'];
									}
								 if($is_exist == 0){
									$this->One->set(array(
									'code' =>  $str2,
									'costomer_id' => $cos_idst));
									$this->One->save($this->request->data);
									// $this->One->saveField('code', $str2);
								 }
								
								$this->Two->set(array(
								'code' =>  'ST'.$own_id,
								'refer' => $str2,
								'costomer_id' => $id));
								//pr($testsent);exit;
								$this->Two->save($this->request->data);
								//$this->Two->saveField('code','st'.$own_id);	
								$test = $this->Two->find('all',array(
														'conditions' => array(
														'Two.code' => $addstr)));
								
								foreach($test as $tests){
									$re_two = $tests['Two']['refer'];
								}
								//pr($re_two);exit;	
								$test_re_two=$this->Three->set(array(
									'code' =>  'ND'.$own_id,
									'refer' => $re_two,
									'costomer_id' => $id));
								$this->Three->save($this->request->data);
								//$this->Three->saveField('code','nd'.$own_id);
								$testsent = $this->One->set(array(
								'code' =>  $own_id,
								'costomer_id' => $id));
								//pr($testsent);exit;
								$this->One->save($this->request->data);
								
								
								
								if($user_role == 'admin'){
							$this->Session->setFlash(__('អ្នកបានបង្កើតអតិថិជនថ្មីម្នាក់ទៀត'));

							$this->redirect(array(
							'controller'=>'Costomers',
							'action'=>'index'));	
							}
							else{
								
								$this->Session->setFlash(__('welcome Username: '.$username.' Password: '.$pass_word));
								$this->redirect(array(
							'controller'=>'Users',
							'action'=>'login'));
								
							}
							}
					}
				
					else{
							
							$this->Two->create();
							$find_referid = $this->request->data;
							foreach($find_referid as $find_referids){
								$refer_code = $find_referids['code'];
							}
							
								//$own_id = date('YmdHis');
								$own_id = $refer_code.$id;
								
								$this->Two->set(array(
								'code' => 'ST'.$own_id,
								'costomer_id' => $id,
								'refer' => $code));
								$this->Two->save($this->request->data);
								
								$testsent = $this->One->set(array(
								'code' =>  $own_id,
								'costomer_id' => $id));
								//pr($testsent);exit;
								$this->One->save($this->request->data);

								if($this->Costomer->saveField('user_name', 'ST'.$own_id)){
									$create_user = $this->Costomer->find('first',array(
									'order'=>'Costomer.id DESC'));
									$this->User->create();
									foreach($create_user as $create_users){
										$firstname = $create_users['first_name'];
										$lastname = $create_users['last_name'];
										$username = $create_users['user_name'];
										$gender = $create_users['gender'];
										$pass_word = $create_users['password'];
										$phone = $create_users['phone'];
										$email = $create_users['email'];
									}
									$this->request->data['Costomer']['password'] = AuthComponent::password($this->request->data['Costomer']['password']);
									$password = $this->request->data['Costomer']['password'];
									$test = $this->User->set(array(
									'firstname' =>  $firstname,
									'lastname' =>  $lastname,
									'username' =>  $username,
									'role' =>  'user',
									'gender' =>  $gender,
									'password' =>  $password,
									'phone' =>  $phone,
									'email' => $email
									));
									
									$this->User->save($this->request->data);
									
									
								
									if($user_role == 'admin'){
							$this->Session->setFlash(__('អ្នកបានបង្កើតអតិថិជនថ្មីម្នាក់ទៀត'));

							$this->redirect(array(
							'controller'=>'Costomers',
							'action'=>'index'));	
							}
							else{
								
								$this->Session->setFlash(__('welcome Username: '.$username.' Password: '.$pass_word));
								$this->redirect(array(
							'controller'=>'Users',
							'action'=>'login'));
								
							}
								}
								
								
								
								if($user_role == 'admin'){
							$this->Session->setFlash(__('អ្នកបានបង្កើតអតិថិជនថ្មីម្នាក់ទៀត'));

							$this->redirect(array(
							'controller'=>'Costomers',
							'action'=>'index'));	
							}
							else{
								
								$this->Session->setFlash(__('welcome Username: '.$username.' Password: '.$pass_word));
								$this->redirect(array(
							'controller'=>'Users',
							'action'=>'login'));
								
							}
								
								
						}

				
			}
			// $this->Session->setFlash(__('អ្នកបង្កើតអតិថិជនមិនទាន់បានទេ, សូមព្យាយាមម្ដងទៀត​​ !'));
			$this->Session->setFlash(__('អ្នកបង្កើតអតិថិជនមិនទាន់បានទេ, សូមព្យាយាមម្ដងទៀត​​ !'), 'default', array('class' => 'notification'), 'notification');
		}
		/*$test = $this->Costomer->find('first',array(
                            'order'=>'Costomer.id DESC'));
		pr($test);exit;*/
		
		//test ------------------------------
		$this->loadModel('Logs');	
		$Logs =$this->Logs->find('count', array('conditions'=>array('status'=>'1')));

		$this->set('logs',$Logs);
	}