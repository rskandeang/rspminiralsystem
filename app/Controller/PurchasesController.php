<?php
class PurchasesController extends AppController {
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
        $this->Auth->allow('login','add','index','edit'); 
    }
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
		$this->set('purchases',$this->paginate());
	}
}   

	

// 	public function index(){
// 			// $this->set('purchases',$this->Purchase->find('all'));
// 	$sumAmount = $this->Purchase->find('all');

//     $this->set('purchases',$sumAmount);

   
// }

 
