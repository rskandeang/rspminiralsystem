<?php

class Costomer extends AppModel {
public $validate = array(
		 

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
        //'password'=>array(
        //    'Not empty'=>array(
         //       'rule'=>'notEmpty',
         //       'message'=>'Please enter your password'
        //    	)
         //   ),
        'email'=>array(
            'Valid email'=>array(
                'rule'=>array('email'),
               	'allowEmpty'=>true,
                'message'=>'Please enter a valid email address'
            )
        ),

    );

}