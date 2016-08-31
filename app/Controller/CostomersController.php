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
						'OR' => array(
								array('Costomer.id LIKE' => '%' . $keyword . '%'),
								//array('Costomer.firstname LIKE' => '%' . $keyword . '%'),
								//array('Costomer.lastname LIKE' => '%' . $keyword . '%'),
								//array('Costomer.username LIKE' => '%' . $keyword . '%'),
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

	// function index(){

	// 	$costomers = $this->Costomer->find('all');
	// 	$this->set('costomers',$costomers);
	// }

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

			if($this->Costomer->save($this->request->data)){
				
				$findId=$this->Costomer->find('first',array(
                            'order'=>'Costomer.id DESC')); 
                $id = $findId['Costomer']['id'];
				//pr($id);exit;
				$code = $this->request->data['Costomer']['code'];
				$first = $this->request->data['Costomer']['first'];
					if($first == 1){
						$this->One->create();
						$own_id = date('YmdHis', strtotime("$date $time"));
						$this->One->set(array(
						'code' =>  $own_id,
						'costomer_id' => $id
						));
						$this->One->save($refer = $this->request->data);
					
						$this->Session->setFlash(__('One table.'));
		
					}		
					else if(strpos($code, 'st') !== false){
						
						$find_refer = $this->Two->find('all',array(
																'conditions' => array('Two.code' => $code)));
						
						foreach($find_refer as $find_refers){
							$re_code = $find_refers['Two']['refer'];
						}	

			$this->request->data['Costomer']['password'] = AuthComponent::password($this->request->data['Costomer']['password']);
			if($this->Costomer->save($this->request->data)){
				$id = $findId['Costomer']['id'];
				$code = $this->request->data['Costomer']['code'];		
					 if(strpos($code, 'st') !== false){

						$this->Three->create();
						$own_id = date('YmdHis', strtotime("$date $time"));
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
					}
					
						$this->Two->saveField('code','st'.$own_id); 
						}
					else if(strpos($code, 'nd') !== false){
					
						$find_refer = $this->Three->find('all',array(
														'conditions' => array(
														'Three.code' => $code)));
						
						foreach($find_refer as $find_refers){
							$re_code = $find_refers['Three']['refer'];	
							
						}
							$this->Four->create();
							$own_id = date('YmdHis', strtotime("$date $time"));
							$this->Four->set(array(
							'code' =>  'rd'.$own_id,
							'costomer_id' => $id,
							'refer' => $re_code));
							$this->Four->save($this->request->data);
							
							//pr($this->Four->find('all'));
							//pr($re_code);exit;
							$this->Four->save($this->request->data);	
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
								$own_id = date('YmdHis', strtotime("$date $time"));
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
							
							}
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
								$own_id = date('YmdHis', strtotime("$date $time"));
								$own_id_rd = date('Ymd');
								$this->Two->set(array(
								'code' => 'st'.$own_id,
								'costomer_id' => $id,
								'refer' => $code));
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
		$sum = 0;
			
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
					
					//pr($purchase);
					//pr($price);
					//pr($amounts); 
					$sum += $beni;
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
					
					$sum += $beni;
					
					
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
					
					$sum += $beni;
				}
				
			}		
			$sum_beni = $sum+$sum+$sum;
			
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
		
		
	}	
	public function view_pur(){
		
	}

	public function link(){
         $this->loadModel('Purchase');
         $findpurchase = $this->Purchase->find('all',array(
                        'order' => 'Purchase.id ASC'
                        ));
          $this->set('purchases', $findpurchase);
         // var_dump($findpurchase);exit();

        $this->loadModel('Money');
        $findmoney = $this->Money->find('all',array(
                        'order' => 'Money.id ASC'
                        ));
         $this->set('monies', $findmoney);
         // var_dump($findmoney);exit();

        $this->loadModel('Withdrawal');
        $findwithdrawal = $this->Withdrawal->find('all', array(
                        'order' => 'Withdrawal.id ASC'
                        ));
        
     	 $this->set('withdrawals', $findwithdrawal);

        /***********************************************************

        $this->loadModel('Purchase');
        $this->loadModel('Money');
        $this->loadModel('Withdrawal');
        $findCus =$this->Costomer->find('all',array(
                            'order'=>'costomer.id'));
        $arr = array();
                foreach( $findCus as $customer){
                    $customer_id = $customer['Costomer']['id'];

                    $findmoney = $this->Money->find('first',array(
                        'conditions' => array(
                            'Money.customer_id' => $customer_id ),
                        'order' => 'Money.customer_id'
                        ));

                      	foreach ($findmoney as $money) {
                         	$current_money = $money['curent_moneys'];
                  		 }
                    
                    $findwithdrawal = $this->Withdrawal->find('first', array(
                        'conditions' => array(
                            'Withdrawal.customer_id' =>  $customer_id),
                        'order' => 'Withdrawal.customer_id DESC'
                        ));
                    // var_dump($findwithdrawal);exit();

                    
                    	 foreach($findwithdrawal as $withdrawal){
                       	 	$costomer_withdrawal = $withdrawal['withdrawal'];
                    	 }

                    $findpurchase = $this->Purchase->find('first',array(
                    	'conditions' => array(
                            'Purchase.customer_id' =>  $customer_id),
                    	'SUM(Purchase.amounts) AS totalAmount',
                        'order' => 'Purchase.customer_id DESC',
                        'group' => 'Purchase.id'
                        ));
                    // var_dump($findpurchase);exit();
                     


                    	foreach($findpurchase as $purchase){
	                        $allpurchase = $purchase['amounts'];
	                        $all_t_prices = $purchase['t_price'];
	                        // var_dump($all_t_prices);exit();
	                        $data = array(
	                            'id' => $customer['Costomer']['id'],
	                            'firstname' => $customer['Costomer']['firstname'],
	                            'lastname' => $customer['Costomer']['lastname'],
	                            'username' => $customer['Costomer']['username'],
	                            'amounts' => $allpurchase,
	                            't_price' => $$all_t_prices,
	                            'withdrawal' => $costomer_withdrawal,
	                            'curent_moneys'=> $current_money
	                        );
                   		}
                  **************************************************************/


                     // array_push($arr, $data);
                    /***********************************************************
         			// $this->set('purchases', $findpurchase);
            		// $this->set('withdrawals', $findwithdrawal);
                    // $this->set('moneys', $findmoney);
                    // var_dump($this->set('moneys', $findmoney));exit();
					**************************************************************/
                 // }

     // $this->set('costomers', $this->Costomer->find('all'));

     //            $findPur = $this->Purchase->find('all');
     //            $Pur_id = $findPur['Purchase']['id'];
     //            $findmoney = $this->Money->find('all',array(
     //                    'conditions' => array(
     //                        'monies.costomer_id' => $Pur_id),
     //                    'order' => 'monies.costomer_id'
     //                    ));
                    
     //            $findWithdrawl = $this->Withdrawal->find('all', array(
     //                    'conditions' => array(
     //                        'Withdrawal.costomer_id' => $Pur_id),
     //                    'order' => 'Withdrawal.costomer_id DESC'
     //                    ));

     //            $this->set('purchases', $findPur);
     //            $this->set('monies', $findmoney);
     //            $this->set('withdrawals', $findWithdrawl);



    // $this->set('customers', $arr);

    }
     public function detail(){

        }
        public function customer_dashboard() {

	}  

}

