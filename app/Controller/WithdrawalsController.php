<?php
class WithdrawalsController extends AppController {
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
        $this->Auth->allow('login','add','index','edit','header'); 
    }

 /**
 * This is the view for the withdrawals 
 * You can search your data in the view by ID, Username
 * Pagination
 */

	function index(){
		$keyword = $this->request->query('Search');
		$this->paginate = array(
				'limit' => 10,
						'OR' => array(
								array('User.id LIKE' => '%' . $keyword . '%'),
								array('User.cus_name LIKE' => '%' . $keyword . '%'),
								array('User.Withdrawal LIKE' => '%' . $keyword . '%'),
								
								));
		
		//$users = $this->User->find('all');
		$this->set('withdrawals',$this->paginate());
	}
	/*

 	public function index(){
 	$this->set('purchases',$this->Purchase->find('all'));
 	$withdrawals = $this->Withdrawal->find('all');
    $this->set('withdrawals',$withdrawals);
 	}

	*/

	/**
	* Notification: use to alert when client withdrawals the money. 
	*/

	public function notification() {	
		$Withdrawal =$this->Withdrawal->find('count', array('conditions'=>array('status'=>'1')));
		$this->set('withdrawals',$Withdrawal);
		
    }

    /**
	* Delete: use to update the count time on the menu bar, How many time client withdrawals
	* update all fields of status to 0  
	*/

    public function delete($id =null){
    	$datas=$this->Withdrawal->find('all',array('conditions'=>array('status'=>'1')));
		foreach ($datas as $data) {
		 	$this->Withdrawal->id=$data['Withdrawal']['id'];
		 	if($this->Withdrawal->updateAll(array('Withdrawal.status'=>'0'),array('Withdrawal.status'=>'1'))){
				$this->redirect('notification');
		 } 
		
	
	}	
}

}   
