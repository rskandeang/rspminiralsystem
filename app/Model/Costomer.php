<?php

class Costomer extends AppModel {
public $validate = array(
		 'first_name' => array(
		 	"required" => array(
                "rule" => array("notEmpty"),
               'message' => 'សូមបញ្ជូលជាអក្សរ'
            ), 
	        // 'name' => array(
	        //     'rule' => '/[A-Za-z]+/',
	        //     'required' => true,
	        //     'message' => 'សូមបញ្ជូលជាអក្សរ'
	        // ),
	        'between' => array(
	            'rule' => array('between', 1, 24),
	            'message' => 'នាមត្រកូលចាន់ពី 2 ខ្ទង់ដល់ 24 ខ្ទង់'
	        )
	    ),
		'last_name' => array(
	       "required" => array(
                "rule" => array("notEmpty"),
               'message' => 'សូមបញ្ជូលជាអក្សរ'
            ), 
	        'between' => array(
	            'rule' => array('between', 1, 24),
	            'message' => 'នាមត្រកូលចាន់ពី 2 ខ្ទង់ដល់ 24 ខ្ទង់'
	        )
	    ),

		'phone' => array(
		    'numeric' => array(
		        'rule' => 'numeric',
		        'message' => 'សូមបញ្ចូលជាលេខ',
		    ),
		    'between' => array(
	            'rule' => array('between', 4, 24),
	            'message' => 'លេខចាប់ពី 4 រហូតដល់ 24 ខ្ទង់'
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
                'message'=>'សូមបញ្ចូលអ៊ីុមែលអោយបានត្រឹមត្រូវ'
            )
        ),
        'code'=>array(
        	'rule'=>array('notEmpty'),
        	'allowEmpty'=>false,
        	'message'=>'សូមបញ្ចូលលេខកូដរបស់អ្នកនាំមកជាមុនសិន'
        	),

    );

}