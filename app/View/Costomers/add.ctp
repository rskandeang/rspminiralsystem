<?php
	$code_refer = $this->request->query('code');
	$user_role = $this->Session->read('Auth.User.role');
		if($code_refer != null){
			echo $this->element('header_new_client');
			echo $this->element('add_new_clients');
			echo $this->element('footer');
		}
		else if($user_role == null){
			echo $this->element('header_new_client'); 
			echo $this->element('customer_add_new');
			echo $this->element('footer');
		}
		else if($user_role == 'admin'){
			echo $this->element('header'); 
			echo $this->element('customer_add_new');
			echo $this->element('footer');
		}
		
?>

