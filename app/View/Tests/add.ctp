
<div class="container-fluid">
  <div class="row">
  	<div class="col-sm-12">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 well">
			<?php echo $this->Form->create('Test',array('enctype'=>'multipart/form-data'));?>
				<fieldset>
					<legend class="text-center"><?php echo __('Sign up'); ?></legend>
						<?php echo $this->Form->input('name', array(
							'class' => 'form-control'));?>
						
							<?php echo $this->Form->input('refer', array(
							'class' => 'form-control'));?>
							
				</fieldset>
					<span class="pull-right<?php echo $this->Form->submit('Submit')?></span>
					<?php echo $this->Form->end();?>
		  	</div>
  			<div class="col-sm-3"></div>
  		</div>
	</div>
</div>
