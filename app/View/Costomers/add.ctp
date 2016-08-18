<div class="container-fluid">
  <div class="row ">
    <div class="col-md-12">
      <nav class="navbar navbar-default success row">
        <div class="container-fluid">
          <div class="navbar-header">
      			<div class="navbar-header">
	            <ul class="nav navbar-nav ">
              <li ><?php echo $this->Html->link( "រស្មីពេជ្រកណ្ដៀង",array('controller'=>'staffs','action'=>'index'),array('style'=>'color:white') );?></li >
            </ul>
	          </div>
          </div>
            <ul class="nav navbar-nav navbar-right">
              <li ><?php echo $this->Html->link( "Sign Up",array('controller'=>'Users','action'=>'add'),array('style'=>'color:white') );?></li>
              <li>
              	<span class="glyphicon glyphicon-log-out" style="margin-top:15px;margin-right:10px;">
                  <?php echo $this->Html->link( "Logout",array('controller'=>'Users','action'=>'logout'),array('style'=>'color:white') );?>
              	</span>
              </li>
            </ul>
        </div>
      </nav>
    </div>
  </div>
</div>
<div class="container-fluid">
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
						<?php echo $this->Form->input('code', array(
							'class' => 'form-control'));?>
						<?php echo $this->Form->input('phone', array(
							'class' => 'form-control'));?>
						<?php echo $this->Form->input('email', array(
								'class' => 'form-control'));?>
							
				</fieldset>
					<span class="pull-right<?php echo $this->Form->submit('Submit')?></span>
					<?php echo $this->Form->end();?>
		  	</div>
  			<div class="col-sm-3"></div>
  		</div>
	</div>
</div>
<footer class="container-fluid text-center success well">
    ក្រុមហ៊ុន រស្មីពេជ្រកណ្ដៀង
</footer>
	