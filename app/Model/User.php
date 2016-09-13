<?php
App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {
	public $validate = array(
		 'firstname' => array(
	        'name' => array(
	            // 'rule' => '/[A-Za-z]+/',
	            'required' => true,
	            'message' => 'input letter only'
	        ),
	        'between' => array(
	            'rule' => array('between', 2, 24),
	            'message' => 'Firstname between 2 and 24 chars'
	        )
	    ),
		'lastname' => array(
	        'name' => array(
	            // 'rule' => '/[A-Za-z]+/',
	            'required' => true,
	            'message' => 'input letter only'
	        ),
	        'between' => array(
	            'rule' => array('between', 2, 24),
	            'message' => 'Lastname between 2 and 24 chars'
	        )
	    ),
	    'username'=>array(

            'That username has already been taken'=>array(
                'rule'=>'isUnique',
                'message'=>'That username has already been taken.'
           		 ),
            'between' => array(
	            'rule' => array('between', 4, 24),
	            'message' => 'Username between 4 and 24 chars'
	        )
        ),

		'phone' => array(
		    'numeric' => array(
		        'rule' => 'numeric',
		        'message' => 'Please enter only numbers',
		    ),
		    'between' => array(
	            'rule' => array('between', 8, 24),
	            'message' => 'phone number between 8 and 24 chars'
	        )
		),
        'password' => array(            
        	'minLength' => array(
	            'rule' => array('minLength', 6),
	            'message' => 'Your password must be at least 6 char'

                )
         ),
        'email'=>array(
            'Valid email'=>array(
                'rule'=>array('email'),
                'allowEmpty'=>true,
                'message'=>'Please enter a valid email address'
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

