<div id="loginform">
	<div id="facebook"><img id="my-logologin" src="img/Logos-login.png" alt"logo"><div id="connect"></div></div>
		<div id="mainlogin">
			<div id="or">or</div>
				<!--<h1 class="my-h1">Log in with awesome new thing</h1>-->
				<?php echo $this->Session->flash('auth'); ?>
					<?php echo $this->Form->create('User');?>
						<?php echo $this->Form->input('username', array('placeholder' => 'username'											,'class' => 'my-input','label' => false));?>
						<?php echo $this->Form->input('password', array(
																	'placeholder' => 'password',
																	'class' => 'my-input','label' => false));?>
						<?php echo $this->Form->submit('Login',array(
											'class' => 'my-button'))?>
					<?php echo $this->Form->end();?>
		<!--<div id="note"><a href="#">Forgot your password?</a></div>-->
		</div>
</div>