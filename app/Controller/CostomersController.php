<?php
class CostomersController extends AppController {
	function index(){
		$costomers = $this->Costomer->find('all');
		$this->set('costomers',$costomers);
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
				
					else{
							
							$this->Two->create();
								$own_id = date('YmdHis', strtotime("$date $time"));
								$this->Two->set(array(
								'code' => 'st'.$own_id,
								'costomer_id' => $id,
								'refer' => $code));
								$this->Two->save($this->request->data);
								
								$this->Session->setFlash(__('tow table.'));
								
								
						}
				
			}
		}
		
	}
	function view($id){
		$this->loadModel('One');
		$this->loadModel('Two');
		$this->loadModel('Three');
		$this->loadModel('Four');
		$this->loadModel('Costomer');
		$this->loadModel('Purchase');
		
		
		$one = $this->One->find('all',array(
			'conditions' => array(
			'One.costomer_id' => $id)));
			
			foreach($one as $ones){
				$re_two = $ones['One']['code'];
				//pr($re_two);exit;
			}
		$two = $this->Two->find('all',array(
			'conditions' => array(
			'Two.refer' => $re_two)));
			
			foreach($two as $twos){
				$cus_id = $twos['Two']['costomer_id'];
				pr($cus_id);
				
				
			}
			//pr($cus_id);
		//pr($two);exit;

		$three = $this->Three->find('all',array(
			'conditions' => array(
			'Three.refer' => $re_two)));
		

		$four = $this->Four->find('all',array(
			'conditions' => array(
			'Four.refer' => $re_two)));
			
		//pr($two);
		//pr($three);
		//pr($four);exit;
		//$findCustomer
		/*$customer = $this->Costomer->find('all',array(
			'conditions' => array(
			'Costomer.code' => $re_two)));
			//pr($customers);exit;*/
		$findCustomer = $this->Costomer->findById($id);

		//pr($findCustomer);exit;
		//$findone = $this->One->findById($id);
		//pr($findone);exit;
		$this->set('customers', $findCustomer);	
		$this->set('two', $two);	
		$this->set('three', $three);	
		$this->set('four', $four);	
		//$this->set('customer', $customer);	
		
		
	}	
}

