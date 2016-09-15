<?php
App::uses('AuthComponent', 'Controller/Component');

class Purchase extends AppModel {

	public $validate = array(
		'amounts' => array(
		    'numeric' => array(
		        'rule' => 'numeric',
		        'message' => 'Please enter only numbers',
		    )
		   
		),
	  );

}
