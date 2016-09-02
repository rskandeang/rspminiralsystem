<div class="col-md-9">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title"><strong> Customer Purchase</strong>
              <i style="color:green; font-size:20px;" class="fa fa-cogs fa-lg pull-right"></i>
              <a href="#">
                 <span> <?php echo $this->Html->link( '<i class="glyphicon glyphicon-edit"></i>',array('controller'=>'Costomers','action'=>'own_update',$id),array('escape' => 0,'style'=>'color:green','class'=>'pull-right'));?></span> 
                </a>
            </h1>

        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <div class="col-lg-4 col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              <span><?php echo $this->Html->image('profile.png', array('alt' => 'profile', 'border' => '0','width'=>'225','height'=>'260')); ?></span>
                                <h5 class="text-center"><strong><?php echo $customers['Costomer']['first_name'].' '.$customers['Costomer']['last_name']?></strong></h5>
                                <h5 class="text-center"><strong><?php echo $cus_code;?></strong></h5>
                            </div>
                            
                        </div>
                    </div>

            <div class="col-md-8">
              <h4>Login information</h4>
              <hr style="margin-top:10px;margin-bottom:10px;" >
          <br>

              <?php echo $this->Form->create('Costomer',array('enctype'=>'multipart/form-data'));?>
              <div class="row">
                      <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="form-group text-right">
                             <?php echo $this->Form->label('Email ID');?>
              </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <div class="form-group">
					<?php 
						echo $customers['Costomer']['email']
					?>
                </div>
              </div>
            </div>
          
            <div class="row">
                      <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="form-group text-right">
                             <?php echo $this->Form->label('Customer ID');?>
              </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <div class="form-group">
					<?php 
						echo $cus_code;
					?>
                </div>
              </div>
            </div>
            
          <h4>Personal information</h4>
          <hr style="margin-top:10px;margin-bottom:10px;" >
          <br>

          <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="form-group text-right">
                             <?php echo $this->Form->label('First Name');?>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <div class="form-group">
                  <?php echo $customers['Costomer']['first_name']?>
                </div>
              </div>
            </div>
            <div class="row">
                      <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="form-group text-right">
                             <?php echo $this->Form->label('Last Name');?>
              </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <div class="form-group">
                  <?php echo $customers['Costomer']['last_name']?>
                </div>
              </div>
            </div>
            <div class="row">
                      <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="form-group text-right">
                             <?php echo $this->Form->label('Login Name');?>
              </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <div class="form-group">
                  <?php echo $customers['Costomer']['user_name']?>
                </div>
              </div>
            </div>
			
			<div class="row">
                      <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="form-group text-right">
                             <?php echo $this->Form->label('Date of Birth');?>
              </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <div class="form-group">
                  <?php echo $customers['Costomer']['dob']?>
                </div>
              </div>
            </div>
			
			<div class="row">
                      <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="form-group text-right">
                             <?php echo $this->Form->label('Gender');?>
              </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <div class="form-group">
                  <?php echo $customers['Costomer']['gender']?>
                </div>
              </div>
            </div>
			
			<div class="row">
                      <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="form-group text-right">
                             <?php echo $this->Form->label('Phone Number');?>
              </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <div class="form-group">
                  <?php echo $customers['Costomer']['phone']?>
                </div>
              </div>
            </div>
                      <?php echo $this->Form->end();?>
        
                <br>
                <br>
            </div>
        </div>
    </div>
   </div>
  </div>
</div>
