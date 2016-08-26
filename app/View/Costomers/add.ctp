<?php echo $this->element('header'); ?> 
<?php echo $this->element('add_new_customer'); ?> 
	


<!-- <div class="container-fluid">
  <div class="row">
  	<div class="col-sm-12">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 well">
			<?php echo $this->Form->create('Costomer',array('enctype'=>'multipart/form-data'));?>
				<fieldset>
					<legend class="text-center"><?php echo __('Sign up'); ?></legend>

						<?php echo $this->Form->input('name', array(
							'class' => 'form-control'));?>
						<?php echo $this->Form->input('dob', array(
							'class' => 'form-control'));?>
						<?php echo $this->Form->input('gender', array(
							'class' => 'form-control'));?>
						<?php echo $this->Form->input('first', array(
                                  'type'=>'checkbox', 
                                  'format' => array('before', 'input', 'between', 'label', 'after', 'error' ) 
		) ); ?>
						<?php echo $this->Form->input('code', array(
							'class' => 'form-control'));?>
						<?php echo $this->Form->input('phone', array(
							'class' => 'form-control'));?>
						<?php echo $this->Form->input('email', array(
								'class' => 'form-control'));?>
							
				</fieldset>
					<span class="pull-right"<?php echo $this->Form->submit('Submit')?></span>
					<?php echo $this->Form->end();?>
		  	</div>
  			<div class="col-sm-3"></div>
  		</div>
	</div>
</div> -->
<?php echo $this->element('footer'); ?> 
	