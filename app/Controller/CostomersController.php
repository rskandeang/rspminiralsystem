<?php
class CostomersController extends AppController {
	function index(){
		$costomers = $this->Costomer->find('all');
		$this->set('costomers',$costomers);
	}
	function add(){
		$this->loadModel('One');
		$this->loadModel('Two');
		if($this->request->is('post')){
			$this->Costomer->create();
			/*$this->request->data['Student']['password'] = AuthComponent::password($this->request->data['Costomer']['password']);*/
			if($this->Costomer->save($this->request->data)){
				//$this->redirect('index');
				$findId=$this->Costomer->find('first',array(
                            'order'=>'Costomer.id DESC'));
				//pr($findId);exit;
				$id = $findId['Costomer']['id'];
				$code = $this->request->data['Costomer']['code'];
				$this->One->create();
				$this->One->set(array(
					'code' => $code,
					'costomer_id' => $id));
				$this->One->save($this->request->data);
				$one = $this->One->find('count',array(
				'conditions' => array('One.code' => $code)));
				//pr($test);exit;
				if($one==1){
					if(strpos($code, 'stndrd') !== true){
						
					}
					else if(strpos($code, 'st') !== false){
						//echo $code;
						$this->Two->create();
						$this->Two->set(array(
						'code' => $code,
						'costomer_id' => $id));
						$this->Two->save($this->request->data);
						$this->Session->setFlash(__('other table.'));
					}
					
				}else{
					echo 'no';
				}
				/*if($code ){
					$this->Salary->create();
					$this->Salary->set(array(
					'code' => $code,
					'costomer_id' => $id));
					$this->Salary->save($this->request->data);
					$this->Session->setFlash(__('other table.'));
				
				
			}*/
			/*else{
				$this->Salary->create();
				$this->Salary->set(array(
					'code' => $code,
					'costomer_id' => $id));
				$this->Salary->save($this->request->data);
				$this->Session->setFlash(__('other table.'));
			}*/
			}
		}
			
		}
	}

