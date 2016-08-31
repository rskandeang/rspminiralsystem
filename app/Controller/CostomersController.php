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
								array('Costomer.firstname LIKE' => '%' . $keyword . '%'),
								array('Costomer.lastname LIKE' => '%' . $keyword . '%'),
								array('Costomer.username LIKE' => '%' . $keyword . '%'),
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
	public function purchase() {

	}
	public function setting() {

	}
	public function own_update() {

	}

}

