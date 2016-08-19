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
				$id = $findId['Costomer']['id'];
				$code = $this->request->data['Costomer']['code'];
				//pr($code);exit;
					
					
								
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
								$own_id_rd = date('YmdHis', strtotime("$date $time"));
								$this->Two->set(array(
								'code' => 'st'.$own_id_rd,
								'costomer_id' => $id));
								$this->Two->save($this->request->data);	
								$this->Session->setFlash(__('tow table.'));
						}
				
			}
		}
			
		}
	}

