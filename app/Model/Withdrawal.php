<?php
App::uses('AuthComponent', 'Controller/Component');

class Withdrawal extends AppModel {
public $validate = array(
		'money' => array(
		    'numeric' => array(
		        'rule' => 'numeric',
		        'message' => 'Please enter only numbers',
		    )
		   
		),
	  );

}
