<?php
class PurchasesController extends AppController {

	public function index(){
			$this->set('purchases',$this->Purchase->find('all'));
	}

	public function count() {



}
}   
