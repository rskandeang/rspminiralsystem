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
	    'username'=>array(

            'That username has already been taken'=>array(
                'rule'=>'isUnique',
                'message'=>'That username has already been taken.'
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
        'password'=>array(
            'Not empty'=>array(
                'rule'=>'notEmpty',
                'message'=>'Please enter your password'
            	)
            ),
        'email'=>array(
            'Valid email'=>array(
                'rule'=>array('email'),
                'message'=>'Please enter a valid email address'
            )
        ),

    );
}
