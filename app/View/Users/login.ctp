<?php echo $this->Session->flash('notification'); ?>

<div id="loginform">
	<div id="facebook"><span ><?php echo $this->Html->link($this->Html->image('Logos-login_client.png',array('style'=>'margin-top: 28px;'), array('alt' => 'profile', 'border' => '0')),'http://kandeang.com/',array('escape'=>false,"target"=>"_blank")) ; ?></span><div id="connect"></div></div>
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
					<div class="mysing_up">
						<?php 
							echo $this->Html->link( "Sing Up",   array('controller' => 'Costomers', 'action'=>'add'),array('style'=>'color:white;')); 
						?>
					</div>


		
		</div>

</div>