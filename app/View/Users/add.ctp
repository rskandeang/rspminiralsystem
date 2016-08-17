<!-- <div class="container-fluid">
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
</div> -->
<!-- <div class="container-fluid">
  <div class="row">
  	<div class="col-sm-12">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 well">
			<?php echo $this->Form->create('User',array('enctype'=>'multipart/form-data'));?>
				<fieldset>
					<legend class="text-center"><?php echo __('Sign up'); ?></legend>

						<?php echo $this->Form->input('firstname', array(
							'class' => 'form-control'));?>
						<?php echo $this->Form->input('lastname', array(
							'class' => 'form-control'));?>
						<?php echo $this->Form->input('username', array(
							'class' => 'form-control'));?>
						<?php echo $this->Form->input('password', array(
							'class' => 'form-control'));?>
						<?php echo $this->Form->input('gender', array(
							'class' => 'form-control'));?>
						<?php echo $this->Form->input('phone', array(
							'class' => 'form-control'));?>
						<?php echo $this->Form->input('email', array(
								'class' => 'form-control'));?>
							
				</fieldset>
					<span class="pull-right" <?php echo $this->Form->submit('Submit')?></span>
					<?php echo $this->Form->end();?>
		  	</div>
  			<div class="col-sm-3"></div>
  		</div>
	</div>
</div> -->
<!-- <footer class="container-fluid text-center success well">
    ក្រុមហ៊ុន រស្មីពេជ្រកណ្ដៀង
</footer> -->

<div class="container" style="margin-top:30px">
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
		  <div style="text-align:center;" class="panel-heading ">
		  		<h3 class="panel-title"><strong>Sign up</strong></h3>
		  </div>
			  <div class="panel-body">
			  		<?php echo $this->Form->create('User',array('enctype'=>'multipart/form-data'));?>
			            <div class="row">
			                <div class="col-xs-12 col-sm-6 col-md-6">
			    				<div class="form-group">
			                       <?php echo $this->Form->input('firstname', array(
										'class' => 'form-control','placeholder'=>'First Name','label' => false ));?>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<?php echo $this->Form->input('lastname', array(
										'class' => 'form-control','placeholder'=>'Last Name','label' => false ));?>
								</div>
							</div>
						</div>
						<div class="form-group">
							<?php echo $this->Form->input('username', array(
										'class' => 'form-control','placeholder'=>'User Name','label' => false ));?>
						</div>
						<div class="form-group">
							<?php echo $this->Form->input('password', array(
										'class' => 'form-control','placeholder'=>'Password','label' => false));?>
						</div>
						<div class="form-group">
							<?php echo $this->Form->input('gender', array(
										'class' => 'form-control','placeholder'=>'Gender','label' => false));?>
						</div>
						<div class="form-group">
							<?php echo $this->Form->input('phone', array(
										'class' => 'form-control','placeholder'=>'Phone','label' => false));?>
						</div>
						<div class="form-group">
							<?php echo $this->Form->input('email', array(
											'class' => 'form-control','placeholder'=>'Email','label' => false));?>
						</div>
        
						<div class="form-group">
							<?php echo $this->Form->input('image', array(
											'type' => 'file'));?>
						</div>                    
						  <button type="submit" class="btn btn-success form-control">submit</button>
						  <!-- <span class="pull-right" <?php echo $this->Form->submit('Submit')?></span> -->
											<?php echo $this->Form->end();?>
			  
			  				<hr style="margin-top:10px;margin-bottom:10px;" >
			  
			  </div>
		</div>
	</div>
</div>