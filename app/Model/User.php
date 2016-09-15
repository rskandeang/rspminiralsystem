<?php
App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {
	public $validate = array(
		 'firstname' => array(
	        'name' => array(
	            'rule' => '/[A-Za-z]+/',
	            'required' => true,
	            'message' => 'សូមបញ្ជូលជាអក្សរ'
	        ),
	        'between' => array(
	            'rule' => array('between', 2, 24),
	            'message' => 'នាមត្រកូលចាន់ពី 2 ខ្ទង់ដល់ 24 ខ្ទង់'
	        )
	    ),
		'lastname' => array(
	        'name' => array(
	            'rule' => '/[A-Za-z]+/',
	            'required' => true,
	            'message' => 'សូមបញ្ជូលជាអក្សរ'
	        ),
	        'between' => array(
	            'rule' => array('between', 2, 24),
	            'message' => 'នាមត្រកូលចាន់ពី 2 ខ្ទង់ដល់ 24 ខ្ទង់'
	        )
	    ),
	    'username'=>array(

            'That username has already been taken'=>array(
                'rule'=>'isUnique',
                'message'=>'ឈ្មោះគណនីយមានរួចម្ដងហើយ, សូមបញ្ចូលឈ្មោះផ្សេងទៀត !'
           		 ),
            'between' => array(
	            'rule' => array('between', 4, 24),
	            'message' => 'ឈ្មោះគណនីយចាប់ពី 4 រហូតដល់ 24 ខ្ទង់'
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
        'password' => array(            
        	'minLength' => array(
	            'rule' => array('minLength', 6),
	            'message' => 'លេខសំងាត់យ៉ាងតិចមាន 6 ខ្ទង់'

                )
         ),
        'email'=>array(
            'Valid email'=>array(
                'rule'=>array('email'),
                'allowEmpty'=>true,
                'message'=>'សូមបញ្ចូលអ៊ីុមែលអោយបានត្រឹមត្រូវ'
            )
        ),
        'image' => array(
            'rule' => array('checkValidImage'),
        )

    );

public function checkValidImage($field)
      {

        $extension = array('image/gif', 'image/jpeg', 'image/png', 'image/jpg');
        $isValidFile = in_array($field['image'], $extension);
        $errors = array();
        $editMethod = false;
        if(!empty($this->data['User']['id'])) // It will work for Update Method
        {
          if(!empty($this->data['User']['image']['name'] ))
          {
            if (($field['image']['error'] == 1)) 
            {
                $errors [] = "Please upload jpg,png or gif files with size 2 MB.";
            }
            else if (empty($field['image']['name']))
            {
                $errors [] = "Please upload image file";
            } 
            else if ($field['image']['size'] >= 2097152) {
                $errors [] = "Please upload jpg,png or gif files with size 2 MB.";
            }
            else if ($isValidFile !=1)
            {

                $errors [] = "Please select file in gif,jpeg,png format.";
            }

          }else
                {
                    $errors [] = "Please select file in gif,jpeg,png format.";
                }

        }
        else
        {
            if(!empty($this->data['User']['image']['name'] )) // It will work for Create Method
            {
                if (($field['image']['error'] == 1)) 
                {
                    $errors [] = "Please upload jpg,png or gif files with size 2 MB.";
                }
                else if (empty($field['User']['name']))
                {
                    $errors [] = "Please upload image";
                } 
                else if ($field['User']['size'] >= 2097152) {
                    $errors [] = "Please upload jpg,png or gif files with size 2 MB.";
                }
                else if (!(in_array($field['image']['type'], $extension)))
                {
                    $errors [] = "Please select file in gif,jpeg,png format.";
                }

            }



        }

        if (!empty($errors))
        {
            return implode("\n", $errors);
        }
        return true;
    }
}

