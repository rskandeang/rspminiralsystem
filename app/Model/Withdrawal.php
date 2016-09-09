<?php
App::uses('AuthComponent', 'Controller/Component');

class Withdrawal extends AppModel {
public $validate = array(
	'money' => array(            
        	'minLength' => array(
	            'rule' => array('minLength', 1),
	            'message' => 'Your password must be at least 6 char'

                )
         ),
	  );
}
