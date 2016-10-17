
<?php
	$login_name = $this->Session->read('Auth.User.username');
	if($login_name == $user_name){
		echo $this->element('header_client');
		echo $this->element('customer_detail_header');
		echo $this->element('menu_sidebar_right_client');
		echo $this->element('purchese');
		echo $this->element('customer_detail_footer');
		echo $this->element('footer');
	}
	else{
		
	}
?>