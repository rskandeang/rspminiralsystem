<?php echo $this->Session->flash('notification'); ?>
<div id="loginform">
	<div id="facebook"><img id="my-logologin" src="img/Logos-login.png" alt"logo"><div id="connect"></div></div>
		<div id="mainlogin">
			<div id="or">ឬ</div>
					<?php echo $this->Form->create('User');?>
						<?php echo $this->Form->input('username', array('placeholder' => 'ឈ្មោះគណនីយ'											,'class' => 'my-input','label' => false));?>
						<?php echo $this->Form->input('password', array(
																	'placeholder' => 'លេខសំងាត់',
																	'class' => 'my-input','label' => false));?>
						
						<?php echo $this->Form->submit('បញ្ជូន',array(
											'class' => 'my-button'))?>
					<?php echo $this->Form->end();?>
		<!--<div id="note"><a href="#">Forgot your password?</a></div>-->
		</div>
</div>