<?php
class CostomersController extends AppController {
	public $helpers = array(
				  'Js' => array('Jquery'),
				  'Paginator',
				  'Html',
				  'Form');
		public $components = array(
				  'Paginator',
				  'RequestHandler');
	function index(){
		$keyword = $this->request->query('Search');
		$this->paginate = array(
				'limit' => 10,
				'conditions' => array(
					'Costomer.status' => '1',
						'OR' => array(
								array('Costomer.id LIKE' => '%' . $keyword . '%'),
								array('Costomer.first_name LIKE' => '%' . $keyword . '%'),
								array('Costomer.last_name LIKE' => '%' . $keyword . '%'),
								array('Costomer.user_name LIKE' => '%' . $keyword . '%'),
								array('Costomer.gender LIKE' => '%' . $keyword . '%'),
								array('Costomer.phone LIKE' => '%' . $keyword . '%'),
								array('Costomer.email LIKE' => '%' . $keyword . '%'),
								)
						
							)
						);
		//$users = $this->User->find('all');
		$this->set('costomers',$this->paginate());
		// var_dump($keyword);exit();
	}

    public function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('add', 'logout','login');
	}
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
			if($test = $this->Costomer->save($this->request->data)){
				$findId=$this->Costomer->find('first',array(
                            'order'=>'Costomer.id DESC')); 
                $id = $findId['Costomer']['id'];
				//pr($id);exit;
				$code = $this->request->data['Costomer']['code'];
				$first = $this->request->data['Costomer']['first'];
					if($first == 1){
						$this->One->create();
						$own_id = date('YmdHis');
						$this->One->set(array(
						'code' =>  $own_id,
						'costomer_id' => $id
						));
						$this->One->save($refer = $this->request->data);
					
						$this->Session->setFlash(__('One table.'));
						$this->redirect(array(
						'controller'=>'Costomers',
						'action'=>'index'));	
					}		
					else if(strpos($code, 'st') !== false){
						
						$find_refer = $this->Two->find('all',array(
																'conditions' => array('Two.code' => $code)));
						
						foreach($find_refer as $find_refers){
							$re_code = $find_refers['Two']['refer'];
						}	
						$this->Three->create();
						$own_id = date('YmdHis');
						$this->Three->set(array(
						'code' =>  'nd'.$own_id,
						'costomer_id' => $id,
						'refer' => $re_code));
						$this->Three->save($refer = $this->request->data);
						
						$this->Session->setFlash(__('Three table.'));
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
						'code' =>  'st'.$own_id,
						'refer' => $str2,
						'costomer_id' => $id));
						$this->Two->save($this->request->data);
						//pr($test);exit;
						$testsent = $this->One->set(array(
								'code' =>  $own_id,
								'costomer_id' => $id));
						//pr($testsent);exit;
								$this->One->save($this->request->data);
					}
						
					else if(strpos($code, 'nd') !== false){
					
						$find_refer = $this->Three->find('all',array(
														'conditions' => array(
														'Three.code' => $code)));
						
						foreach($find_refer as $find_refers){
							$re_code = $find_refers['Three']['refer'];	
							
						}
							$this->Four->create();
							$own_id = date('YmdHis');
							$this->Four->set(array(
							'code' =>  'rd'.$own_id,
							'costomer_id' => $id,
							'refer' => $re_code));
							$this->Four->save($this->request->data);
							
							//pr($this->Four->find('all'));
							//pr($re_code);exit;
							$this->Session->setFlash(__('Four table.'));				
							$str2 = substr($code, 2);
							$addstr = 'st'.$str2;
							$threestr = 'nd'.$str2;
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
							$this->One->save($this->request->data);
							//$this->One->saveField('code', $str2);
						 }
							$test=$this->Two->set(array(
								'code' =>  'st'.$own_id,
								'refer' => $str2,
								'costomer_id' => $id));
							//pr($test);exit;
							$this->Two->save($this->request->data);
							$test = $this->Two->find('all',array(
													'conditions' => array(
													'Two.code' => $addstr)));
							foreach($test as $tests){
								$re_two = $tests['Two']['refer'];
								
							}
								
							$test_re_two=$this->Three->set(array(
								'code' =>  'nd'.$own_id,
								'refer' => $re_two,
								'costomer_id' => $id));
							//pr($test_re_two);exit;
							$this->Three->save($this->request->data);
							
							//$this->Three->saveField('code','nd'.$own_id);
							$testsent = $this->One->set(array(
								'code' =>  $own_id,
								'costomer_id' => $id));
						//pr($testsent);exit;
								$this->One->save($this->request->data);
					}
					else if(strpos($code, 'rd') !== false){
						$find_refer = $this->Four->find('all',array(
								'conditions' => array('Four.code' => $code)));
								
						foreach($find_refer as $find_refers){
							$re_code = $find_refers['Four']['code'];	
							
							$str_four = substr($re_code, 2);
							$addstr = 'st'.$str_four;
							$str_three = 'nd'.$str_four;
						}
						$test_three = $this->Three->find('all',array(
																'conditions' => array('Three.code' => $str_three)));
						
							foreach($test_three as $test_threes){
								$check_three = $test_threes['Three']['code'];
								$check_three_refer = $test_threes['Three']['refer'];
							}
							if($str_three == $check_three){
								$this->Four->create();
								$own_id = date('YmdHis');
								$this->Four->set(array(
								'code' =>  'rd'.$own_id,
								'costomer_id' => $id,
								'refer' => $check_three_refer));
								
								$this->Four->save($this->request->data);	
								$this->Session->setFlash(__('Four1 table.'));
							
								
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
								'code' =>  'st'.$own_id,
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
									'code' =>  'nd'.$own_id,
									'refer' => $re_two,
									'costomer_id' => $id));
								$this->Three->save($this->request->data);
								//$this->Three->saveField('code','nd'.$own_id);
								$testsent = $this->One->set(array(
								'code' =>  $own_id,
								'costomer_id' => $id));
								//pr($testsent);exit;
								$this->One->save($this->request->data);
							}
					}
				
					else{
							
							$this->Two->create();
								$own_id = date('YmdHis');
								$this->Two->set(array(
								'code' => 'st'.$own_id,
								'costomer_id' => $id,
								'refer' => $code));
								$this->Two->save($this->request->data);
								
								$testsent = $this->One->set(array(
								'code' =>  $own_id,
								'costomer_id' => $id));
								//pr($testsent);exit;
								$this->One->save($this->request->data);
								$this->Session->setFlash(__('tow table.'));
								$this->redirect(array(
						'controller'=>'Costomers',
						'action'=>'index'));
								
								
						}
				
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

	function view($id){
		$this->loadModel('One');
		$this->loadModel('Two');
		$this->loadModel('Three');
		$this->loadModel('Four');
		$this->loadModel('Costomer');
		$this->loadModel('Purchase');
		$this->loadModel('Money');
		$this->loadModel('Withdrawal');
		
		
		$st = 0.05;
		$nd = 0.03;
		$rd = 0.02;
		
		$sum_one = 0;
		$sum_two = 0;
		$sum_three = 0;
		
		$count_one = 0;
		$count_two = 0;
		$count_three = 0;
		
		$one = $this->One->find('all',array(
			'conditions' => array(
			'One.costomer_id' => $id)));
			
			foreach($one as $ones){
				$re_two = $ones['One']['code'];
				$id = $ones['One']['costomer_id'];

			}
			
		$cus_pur = $this->Purchase->find('all',array(
			'conditions' => array(
			'Purchase.customer_id' => $id)));	

		$two = $this->Two->find('all',array(
			'conditions' => array(
			'Two.refer' => $re_two)));
			
			foreach($two as $twos){
				$cus_id = $twos['Two']['costomer_id'];
				//pr($cus_id);
			
				$purchase = $this->Purchase->find('all',array(
				'conditions' => array(
				'Purchase.customer_id' => $cus_id)));
				
				
			foreach($purchase as $purchases){
					$price = $purchases['Purchase']['price'];
					$amounts = $purchases['Purchase']['amounts'];
					
					$beni = ($price * $amounts) * $st.'$';
					
					$sum_one += $beni;
					 
					$count = count($purchases);
					$count_one += $count;
				}
			
			}
		//pr($purchase);exit;

		$three = $this->Three->find('all',array(
			'conditions' => array(
			'Three.refer' => $re_two)));
			
			foreach($three as $threes){
				$cus_id = $threes['Three']['costomer_id'];
				//pr($cus_id);
			
				$purchase = $this->Purchase->find('all',array(
				'conditions' => array(
				'Purchase.customer_id' => $cus_id)));
				
				
				foreach($purchase as $purchases){
					$price = $purchases['Purchase']['price'];
					$amounts = $purchases['Purchase']['amounts'];
					
					$beni = ($price * $amounts) * $nd.'$';
					
					$sum_two += $beni;
					
					$count = count($purchases);
					$count_two += $count;
					$count_two;
				}
				
			}
		$four = $this->Four->find('all',array(
			'conditions' => array(
			'Four.refer' => $re_two)));
			
			foreach($four as $fours){
				$cus_id = $fours['Four']['costomer_id'];
				//pr($cus_id);
			
				$purchase = $this->Purchase->find('all',array(
				'conditions' => array(
				'Purchase.customer_id' => $cus_id)));
				
				
				foreach($purchase as $purchases){
					$price = $purchases['Purchase']['price'];
					$amounts = $purchases['Purchase']['amounts'];
					
					$beni = ($price * $amounts) * $rd.'$';
					
					$sum_three += $beni;
					
					$count = count($purchases);
					$count_three += $count;
				}
				
			}		
			$sum_beni = $sum_one + $sum_two + $sum_three;
			
		// Draw_money

		$sum_draw = 0;
			$find_cus = $this->Costomer->find('all', array(
				'conditions' => array(
				'Costomer.id' => $id)));
				//pr($find_cus);
				foreach($find_cus as $find_cuss){
					$lastname = $find_cuss['Costomer']['last_name'];
					$firstname = $find_cuss['Costomer']['first_name'];
				}
			$drawal = $this->Withdrawal->find('all',array(
			'conditions' => array(
			'Withdrawal.customer_id' => $id)));
			
			foreach($drawal as $drawals){
				$draw_money = $drawals['Withdrawal']['money'];
				//pr($draw_money);
				$sum_draw += $draw_money;
			}
			//echo '$'.$sum_draw;
			// balance money
			$balance = $sum_beni - $sum_draw;
			
			$date_time = date('Y-m-d H:i:s');
			
			if($sum_beni > 0){
				if($this->request->is('post') == 1){
					$test = $this->Withdrawal->set(array(
									'customer_id' => $id,
									'customer_name' => $firstname.' '.$lastname,
									'draw_date' => $date_time));
					//pr($test);exit;
					$input = $this->request->data;
					foreach($input as $inputs){
						$input_money = $inputs['money'];
					}
					if($input_money == null){
						$this->redirect(array(
							'controller'=>'Costomers',
							'action'=>'view',$id));
					}
					else if($input_money < $balance){
						if($test = $this->Withdrawal->save($this->request->data)){
							$this->redirect(array(
							'controller'=>'Costomers',
							'action'=>'view',$id));
						}
					}
					$this->set('id', $id);
				}
				
			}
			
			
			
			
		$findCustomer = $this->Costomer->findById($id);
		// get code customer_id
		
		foreach($findCustomer as $findCustomers){
			$refer = $findCustomer['Costomer']['code'];
			if($refer == null){
				$code_one = $this->One->find('all', array(
				'conditions' => array(
				'costomer_id' => $id)));
				foreach($code_one as $code_ones){
					$cus_code = $code_ones['One']['code'];
				}
			}
			else if($refer == (strpos($refer, 'st') !== false)){
				$code_three = $this->Three->find('all', array(
				'conditions' => array(
				'costomer_id' => $id)));
				foreach($code_three as $code_threes){
					$cus_code = $code_threes['Three']['code'];
					
				}
			}
			else if($refer == (strpos($refer, 'nd') !== false)){
				$code_four = $this->Four->find('all', array(
				'conditions' => array(
				'costomer_id' => $id)));
				foreach($code_four as $code_fours){
					$cus_code = $code_fours['Four']['code'];
				}
			}
			else if($refer == (strpos($refer, 'rd') !== false)){
				$code_four = $this->Four->find('all', array(
				'conditions' => array(
				'costomer_id' => $id)));
				foreach($code_four as $code_fours){
					$cus_code = $code_fours['Four']['code'];
				}
			}
			else{
				$code_two = $this->Two->find('all', array(
				'conditions' => array(
				'costomer_id' => $id)));
				foreach($code_two as $code_twos){
					$cus_code = $code_twos['Two']['code'];
				}
			}
		}

		$this->set('customers', $findCustomer);	
		$this->set('sum_beni', $sum_beni);	
		$this->set('cus_code', $cus_code);	
		$this->set('two', $two);	
		$this->set('three', $three);	
		$this->set('four', $four);	
		$this->set('purchase', $cus_pur);	
		$this->set('withdrawal', $drawal);	
		$this->set('id', $id);	
		$this->set('sum_one', $sum_one);	
		$this->set('sum_two', $sum_two);	
		$this->set('sum_three', $sum_three);	
		$this->set('count_one', $count_one);	
		$this->set('count_two', $count_two);	
		$this->set('count_three', $count_three);	
		
		
	}	
	public function view_pur($id){
		$this->loadModel('One');
		$this->loadModel('Two');
		$this->loadModel('Three');
		$this->loadModel('Four');
		$this->loadModel('Costomer');
		$this->loadModel('Purchase');
		$this->loadModel('Money');
		$this->loadModel('Withdrawal');
		
		
		$st = 0.05;
		$nd = 0.03;
		$rd = 0.02;
		
		$sum_one = 0;
		$sum_two = 0;
		$sum_three = 0;
		
		$count_one = 0;
		$count_two = 0;
		$count_three = 0;
		
		$one = $this->One->find('all',array(
			'conditions' => array(
			'One.costomer_id' => $id)));
			
			foreach($one as $ones){
				$re_two = $ones['One']['code'];
				$id = $ones['One']['costomer_id'];

			}
			
		$cus_pur = $this->Purchase->find('all',array(
			'conditions' => array(
			'Purchase.customer_id' => $id)));	

		$two = $this->Two->find('all',array(
			'conditions' => array(
			'Two.refer' => $re_two)));
			
			foreach($two as $twos){
				$cus_id = $twos['Two']['costomer_id'];
				//pr($cus_id);
			
				$purchase = $this->Purchase->find('all',array(
				'conditions' => array(
				'Purchase.customer_id' => $cus_id)));
				
				
			foreach($purchase as $purchases){
					$price = $purchases['Purchase']['price'];
					$amounts = $purchases['Purchase']['amounts'];
					
					$beni = ($price * $amounts) * $st.'$';
					
					$sum_one += $beni;
					 
					$count = count($purchases);
					$count_one += $count;
				}
			
			}
		//pr($purchase);exit;

		$three = $this->Three->find('all',array(
			'conditions' => array(
			'Three.refer' => $re_two)));
			
			foreach($three as $threes){
				$cus_id = $threes['Three']['costomer_id'];
				//pr($cus_id);
			
				$purchase = $this->Purchase->find('all',array(
				'conditions' => array(
				'Purchase.customer_id' => $cus_id)));
				
				
				foreach($purchase as $purchases){
					$price = $purchases['Purchase']['price'];
					$amounts = $purchases['Purchase']['amounts'];
					
					$beni = ($price * $amounts) * $nd.'$';
					
					$sum_two += $beni;
					
					$count = count($purchases);
					$count_two += $count;
					$count_two;
				}
				
			}
		$four = $this->Four->find('all',array(
			'conditions' => array(
			'Four.refer' => $re_two)));
			
			foreach($four as $fours){
				$cus_id = $fours['Four']['costomer_id'];
				//pr($cus_id);
			
				$purchase = $this->Purchase->find('all',array(
				'conditions' => array(
				'Purchase.customer_id' => $cus_id)));
				
				
				foreach($purchase as $purchases){
					$price = $purchases['Purchase']['price'];
					$amounts = $purchases['Purchase']['amounts'];
					
					$beni = ($price * $amounts) * $rd.'$';
					
					$sum_three += $beni;
					
					$count = count($purchases);
					$count_three += $count;
				}
				
			}		
			$sum_beni = $sum_one + $sum_two + $sum_three;
		// Draw_money
			$sum_draw = 0;
			$drawal = $this->Withdrawal->find('all',array(
			'conditions' => array(
			'Withdrawal.customer_id' => $id)));
		
		$findCustomer = $this->Costomer->findById($id);
		// get code customer_id
		
		

		$this->set('customers', $findCustomer);	
		$this->set('sum_beni', $sum_beni);	
		$this->set('two', $two);	
		$this->set('three', $three);	
		$this->set('four', $four);	
		$this->set('purchase', $cus_pur);	
		$this->set('withdrawal', $drawal);	
		$this->set('id', $id);	
		$this->set('sum_one', $sum_one);	
		$this->set('sum_two', $sum_two);	
		$this->set('sum_three', $sum_three);	
		$this->set('count_one', $count_one);	
		$this->set('count_two', $count_two);	
		$this->set('count_three', $count_three);	
		
	}
	
	function view_refer($id){
		
		$this->loadModel('One');
		$this->loadModel('Two');
		$this->loadModel('Three');
		$this->loadModel('Four');
		$this->loadModel('Costomer');
		$this->loadModel('Purchase');
		$this->loadModel('Money');
		$this->loadModel('Withdrawal');
		
		
		$st = 0.05;
		$nd = 0.03;
		$rd = 0.02;
		
		$sum_one = 0;
		$sum_two = 0;
		$sum_three = 0;
		
		$count_one = 0;
		$count_two = 0;
		$count_three = 0;
		
		$one = $this->One->find('all',array(
			'conditions' => array(
			'One.costomer_id' => $id)));
			
			foreach($one as $ones){
				$re_two = $ones['One']['code'];
				$id = $ones['One']['costomer_id'];

			}
			
		$cus_pur = $this->Purchase->find('all',array(
			'conditions' => array(
			'Purchase.customer_id' => $id)));	

		$two = $this->Two->find('all',array(
			'conditions' => array(
			'Two.refer' => $re_two)));
			
			foreach($two as $twos){
				$cus_id = $twos['Two']['costomer_id'];
				//pr($cus_id);
			
				$purchase = $this->Purchase->find('all',array(
				'conditions' => array(
				'Purchase.customer_id' => $cus_id)));
				
			foreach($purchase as $purchases){
					$price = $purchases['Purchase']['price'];
					$amounts = $purchases['Purchase']['amounts'];
					
					$beni = ($price * $amounts) * $st.'$';
					
					$sum_one += $beni;
					 
					$count = count($purchases);
					$count_one += $count;
				}
			
			}
		//pr($purchase);exit;

		$three = $this->Three->find('all',array(
			'conditions' => array(
			'Three.refer' => $re_two)));
			
			foreach($three as $threes){
				$cus_id = $threes['Three']['costomer_id'];
				//pr($cus_id);
			
				$purchase = $this->Purchase->find('all',array(
				'conditions' => array(
				'Purchase.customer_id' => $cus_id)));
				
				
				foreach($purchase as $purchases){
					$price = $purchases['Purchase']['price'];
					$amounts = $purchases['Purchase']['amounts'];
					
					$beni = ($price * $amounts) * $nd.'$';
					
					$sum_two += $beni;
					
					$count = count($purchases);
					$count_two += $count;
					$count_two;
				}
				
			}
		$four = $this->Four->find('all',array(
			'conditions' => array(
			'Four.refer' => $re_two)));
			
			foreach($four as $fours){
				$cus_id = $fours['Four']['costomer_id'];
				//pr($cus_id);
			
				$purchase = $this->Purchase->find('all',array(
				'conditions' => array(
				'Purchase.customer_id' => $cus_id)));
				
				
				foreach($purchase as $purchases){
					$price = $purchases['Purchase']['price'];
					$amounts = $purchases['Purchase']['amounts'];
					
					$beni = ($price * $amounts) * $rd.'$';
					
					$sum_three += $beni;
					
					$count = count($purchases);
					$count_three += $count;
				}
				
			}		
			$sum_beni = $sum_one + $sum_two + $sum_three;
		// Draw_money
			$sum_draw = 0;
			$drawal = $this->Withdrawal->find('all',array(
			'conditions' => array(
			'Withdrawal.customer_id' => $id)));
		
		$findCustomer = $this->Costomer->findById($id);
		// get code customer_id
		

		$this->set('customers', $findCustomer);	
		$this->set('sum_beni', $sum_beni);	
		$this->set('two', $two);	
		$this->set('three', $three);	
		$this->set('four', $four);	
		$this->set('purchase', $cus_pur);	
		$this->set('withdrawal', $drawal);	
		$this->set('id', $id);	
		$this->set('sum_one', $sum_one);	
		$this->set('sum_two', $sum_two);	
		$this->set('sum_three', $sum_three);	
		$this->set('count_one', $count_one);	
		$this->set('count_two', $count_two);	
		$this->set('count_three', $count_three);
	}
	
	function view_setting($id) {
		$this->loadModel('One');
		$this->loadModel('Two');
		$this->loadModel('Three');
		$this->loadModel('Four');
		$this->loadModel('Costomer');
		$this->loadModel('Purchase');
		$this->loadModel('Money');
		$this->loadModel('Withdrawal');
		
		
		$st = 0.05;
		$nd = 0.03;
		$rd = 0.02;
		
		$sum_one = 0;
		$sum_two = 0;
		$sum_three = 0;
		
		$count_one = 0;
		$count_two = 0;
		$count_three = 0;
		
		$one = $this->One->find('all',array(
			'conditions' => array(
			'One.costomer_id' => $id)));
			
			foreach($one as $ones){
				$re_two = $ones['One']['code'];
				$id = $ones['One']['costomer_id'];

			}
			
		$cus_pur = $this->Purchase->find('all',array(
			'conditions' => array(
			'Purchase.customer_id' => $id)));	

		$two = $this->Two->find('all',array(
			'conditions' => array(
			'Two.refer' => $re_two)));
			
			foreach($two as $twos){
				$cus_id = $twos['Two']['costomer_id'];
				//pr($cus_id);
			
				$purchase = $this->Purchase->find('all',array(
				'conditions' => array(
				'Purchase.customer_id' => $cus_id)));
				
				
			foreach($purchase as $purchases){
					$price = $purchases['Purchase']['price'];
					$amounts = $purchases['Purchase']['amounts'];
					
					$beni = ($price * $amounts) * $st.'$';
					
					$sum_one += $beni;
					 
					$count = count($purchases);
					$count_one += $count;
				}
			
			}
		//pr($purchase);exit;

		$three = $this->Three->find('all',array(
			'conditions' => array(
			'Three.refer' => $re_two)));
			
			foreach($three as $threes){
				$cus_id = $threes['Three']['costomer_id'];
				//pr($cus_id);
			
				$purchase = $this->Purchase->find('all',array(
				'conditions' => array(
				'Purchase.customer_id' => $cus_id)));
				
				
				foreach($purchase as $purchases){
					$price = $purchases['Purchase']['price'];
					$amounts = $purchases['Purchase']['amounts'];
					
					$beni = ($price * $amounts) * $nd.'$';
					
					$sum_two += $beni;
					
					$count = count($purchases);
					$count_two += $count;
					$count_two;
				}
				
			}
		$four = $this->Four->find('all',array(
			'conditions' => array(
			'Four.refer' => $re_two)));
			
			foreach($four as $fours){
				$cus_id = $fours['Four']['costomer_id'];
				//pr($cus_id);
			
				$purchase = $this->Purchase->find('all',array(
				'conditions' => array(
				'Purchase.customer_id' => $cus_id)));
				
				
				foreach($purchase as $purchases){
					$price = $purchases['Purchase']['price'];
					$amounts = $purchases['Purchase']['amounts'];
					
					$beni = ($price * $amounts) * $rd.'$';
					
					$sum_three += $beni;
					
					$count = count($purchases);
					$count_three += $count;
				}
				
			}		
			$sum_beni = $sum_one + $sum_two + $sum_three;
			
			// Draw_money
			
			$sum_draw = 0;
			$drawal = $this->Withdrawal->find('all',array(
			'conditions' => array(
			'Withdrawal.customer_id' => $id)));
		
		$findCustomer = $this->Costomer->findById($id);
		// get code customer_id
		
		foreach($findCustomer as $findCustomers){
			$refer = $findCustomer['Costomer']['code'];
			if($refer == null){
				$code_one = $this->One->find('all', array(
				'conditions' => array(
				'costomer_id' => $id)));
				foreach($code_one as $code_ones){
					$cus_code = $code_ones['One']['code'];
				}
			}
			else if($refer == (strpos($refer, 'st') !== false)){
				$code_three = $this->Three->find('all', array(
				'conditions' => array(
				'costomer_id' => $id)));
				foreach($code_three as $code_threes){
					$cus_code = $code_threes['Three']['code'];
					
				}
			}
			else if($refer == (strpos($refer, 'nd') !== false)){
				$code_four = $this->Four->find('all', array(
				'conditions' => array(
				'costomer_id' => $id)));
				foreach($code_four as $code_fours){
					$cus_code = $code_fours['Four']['code'];
				}
			}
			else if($refer == (strpos($refer, 'rd') !== false)){
				$code_four = $this->Four->find('all', array(
				'conditions' => array(
				'costomer_id' => $id)));
				foreach($code_four as $code_fours){
					$cus_code = $code_fours['Four']['code'];
				}
			}
			else{
				$code_two = $this->Two->find('all', array(
				'conditions' => array(
				'costomer_id' => $id)));
				foreach($code_two as $code_twos){
					$cus_code = $code_twos['Two']['code'];
				}
			}
		}

		$this->set('customers', $findCustomer);	
		$this->set('sum_beni', $sum_beni);	
		$this->set('cus_code', $cus_code);	
		$this->set('two', $two);	
		$this->set('three', $three);	
		$this->set('four', $four);	
		$this->set('purchase', $cus_pur);	
		$this->set('withdrawal', $drawal);	
		$this->set('id', $id);	
		$this->set('sum_one', $sum_one);	
		$this->set('sum_two', $sum_two);	
		$this->set('sum_three', $sum_three);	
		$this->set('count_one', $count_one);	
		$this->set('count_two', $count_two);	
		$this->set('count_three', $count_three);	
		
		
	}	
	
	public function link(){
         $this->loadModel('Costomer');
         $this->loadModel('Purchase');
         $this->loadModel('Withdrawal');
         $findpurchase = $this->Purchase->find('all',array(
                        'order' => 'Purchase.pur_id ASC'
                        ));
          $this->set('purchases', $findpurchase);
         // var_dump($findpurchase);exit();

        $this->loadModel('Money');
        $findmoney = $this->Money->find('all',array(
                        'order' => 'Money.money_id ASC'
                        ));
         $this->set('monies', $findmoney);
         // var_dump($findmoney);exit();

	/*	
	// draw list
	
	$find_draw =$this->Withdrawal->find('all');
		//pr($find_draw);exit;					
        $arr = array();
                foreach( $find_draw as $find_draws){
                    $customer_id = $find_draws['Withdrawal']['customer_id'];
					$money = $find_draws['Withdrawal']['money'];
					$date = $find_draws['Withdrawal']['draw_date'];
					//pr($customer_id);
                    
					$findwithdrawal = $this->Costomer->find('all', array(
                        'conditions' => array(
                            'Costomer.id' =>  $customer_id)
                        ));
					//pr($findwithdrawal);
					
					foreach($findwithdrawal as $findwithdrawals){
                       	 	$name = $findwithdrawals['Costomer']['user_name'];
                       	 	$id = $findwithdrawals['Costomer']['id'];
							
                       	 	 $data = array(
	                            'id' => $customer_id,
	                            'user_name' => $name,
								'money' => $money,
								'date' => $date
	                        );
							//pr($data);
							array_push($arr, $data);
                    	 }
				}
	
    // var_dump($data);exit();
	//$this->set('data', $data);
	$this->set('withdrawals', $arr); */
	
	$withdrawal = $this->Withdrawal->find('all');
	//$keyword = $this->request->query('Search');
		$this->paginate = array(
				'limit' => 10,
				'OR' => array(
								array('Withdrawal.draw_id LIKE' => '%' ),
								array('Withdrawal.customer_name LIKE' => '%'),
								array('Withdrawal.money LIKE' => '%'),
								array('Withdrawal.draw_date LIKE' => '%')
								));

	$this->set('withdrawal', $this->paginate('Withdrawal'));
// end 
	
	$this->loadModel('One');
	$this->loadModel('Two');
	$this->loadModel('Three');
	$this->loadModel('Four');
	$sum_one = 0;
	$sum_two = 0;
	$sum_three = 0;
	$sum_draw_money = 0;
	
	//$g_one = $this->One->find('all', array(
    //   'conditions' => 'One.code'));
	$g_one = $this->One->find('all');
	//pr($g_one);
	
	foreach($g_one as $g_ones){
		$one_code = $g_ones['One']['code'];
		//pr($one_code);
		
		$g_two = $this->Two->find('all',array(
		'conditions' => array(
		'Two.refer' => $one_code)));
		//pr($g_two);
		
		foreach($g_two as $g_twos){
			$two_code = $g_twos['Two']['costomer_id'];
			
			$pur_one = $this->Purchase->find('all', array(
				'conditions' => array(
				'Purchase.customer_id' => $two_code)));
			foreach($pur_one as $pur_ones){
				$amounts = $pur_ones['Purchase']['amounts'];
				$price = $pur_ones['Purchase']['price'];
				
				$beni_one = ($amounts * $price)*0.05;
			
				$sum_one += $beni_one;
				//pr($sum_one);
			}
			
		}
		
		$g_three = $this->Three->find('all',array(
		'conditions' => array(
		'Three.refer' => $one_code)));
		//pr($g_three);
		
		foreach($g_three as $g_threes){
			$three_code = $g_threes['Three']['costomer_id'];
			
			$pur_two = $this->Purchase->find('all', array(
				'conditions' => array(
				'Purchase.customer_id' => $three_code)));
			//pr($pur_two);
			
			foreach($pur_two as $pur_twos){
				$amounts = $pur_twos['Purchase']['amounts'];
				$price = $pur_twos['Purchase']['price'];
				
				$beni_two = ($amounts * $price)*0.03;
				
				//pr($beni_one);
				$sum_two += $beni_two;
				//pr($sum_two);
			}
		}
		
		$g_four = $this->Four->find('all',array(
		'conditions' => array(
		'Four.refer' => $one_code)));
		//pr($g_four);
		
		foreach($g_four as $g_fours){
			$four_code = $g_fours['Four']['costomer_id'];
			//pr($four_code);
			
			$pur_three = $this->Purchase->find('all', array(
				'conditions' => array(
				'Purchase.customer_id' => $four_code)));
			//pr($pur_three);
			
			foreach($pur_three as $pur_threes){
				$amounts = $pur_threes['Purchase']['amounts'];
				$price = $pur_threes['Purchase']['price'];
				
				$beni_three = ($amounts * $price)*0.02;
				
				//pr($beni_three);
				$sum_three += $beni_three;
				//pr($sum_three);
			}
		}
	}
	$total_money = $sum_one + $sum_two + $sum_three;
	//pr($total_money);

	$money_draw = $this->Withdrawal->find('all');
	//pr($money_draw);
	foreach($money_draw as $money_draws){
		$money = $money_draws['Withdrawal']['money'];
		//pr($money);
		$sum_draw_money += $money;
		//pr($sum_draw_money);
	}
	
	$total_cur_money = $total_money - $sum_draw_money;
	
	$this->set('total_cur_money', $total_cur_money);
	$this->set('total_money', $total_money);
    }
	
	public function own_update($id) {
		$data = $this->Costomer->find('first',array(
			'conditions'=>array('id'=>$id)));
			if($this->request->is(array('post','put'))){
				$this->Costomer->id=$id;
				if($this->Costomer->save($this->request->data)){
					$this->Session->setFlash('You have been update');
				    $this->redirect(array(
					'controller'=>'Costomers',
					'action'=>'view_setting',$id));
				}
			}
			$this->set('id', $id);
			$this->request->data =$data;
	}


}

