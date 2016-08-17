<?php
App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {
	public $validate = array(
		 'firstname' => array(
	        'name' => array(
	            'rule' => '/[A-Za-z]+/',
	            'required' => true,
	            'message' => 'input letter only'
	        ),
	        'between' => array(
	            'rule' => array('between', 1, 24),
	            'message' => 'Username between 1 and 24 chars'
	        )
	    ),
		'lastname' => array(
	        'name' => array(
	            'rule' => '/[A-Za-z]+/',
	            'required' => true,
	            'message' => 'input letter only'
	        ),
	        'between' => array(
	            'rule' => array('between', 1, 24),
	            'message' => 'Username between 1 and 24 chars'
	        )
	    ),

		'phone' => array(
		    'numeric' => array(
		        'rule' => 'numeric',
		        'message' => 'Please enter only numbers',
		    ),
		    'between' => array(
	            'rule' => array('between', 1, 15),
	            'message' => 'phone number between 1 and 24 chars'
	        )
		),
        'password' => array(
            'rule' => array('minLength', '8'),
            'message' => 'Minimum 8 characters long'
        ),
        'email' => 'email'

    );
}
