<div class="col-md-9">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title"><strong> Customer Purchase</strong>
              <i style="color:green; font-size:20px;" class="fa fa-cogs fa-lg pull-right"></i>
              <a href="#">
                 <span> <?php echo $this->Html->link( '<i class="glyphicon glyphicon-edit"></i>',array('controller'=>'Costomers','action'=>'own_update'),array('escape' => 0,'style'=>'color:green','class'=>'pull-right'));?></span> 
                </a>
            </h1>

        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <div class="col-lg-4 col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              <span><?php echo $this->Html->image('profile.png', array('alt' => 'profile', 'border' => '0','width'=>'225','height'=>'260')); ?></span>
                                <h5 class="text-center"><strong>Customer Name</strong></h5>
                                <h5 class="text-center"><strong>Customer Id</strong></h5>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <!-- <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> -->
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
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
                  <?php echo $this->Form->input('email', array(
                    'class' => 'form-control','placeholder'=>'Email ID','label' => false ));?>
                </div>
              </div>
            </div>
            <div class="row">
                      <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="form-group text-right">
                             <?php echo $this->Form->label('Password');?>
              </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <div class="form-group">
                  <?php echo $this->Form->input('password', array(
                    'class' => 'form-control','placeholder'=>'password','label' => false ));?>
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
                  <?php echo $this->Form->input('code', array(
                    'class' => 'form-control','placeholder'=>'customer id','label' => false ));?>
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
                  <?php echo $this->Form->input('firstname', array(
                    'class' => 'form-control','placeholder'=>'last name','label' => false ));?>
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
                  <?php echo $this->Form->input('lastname', array(
                    'class' => 'form-control','placeholder'=>'last name','label' => false ));?>
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
                  <?php echo $this->Form->input('code', array(
                    'class' => 'form-control','placeholder'=>'login name','label' => false ));?>
                </div>
              </div>
            </div>
            <div class="row">
                      <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="form-group text-right">
                             <?php echo $this->Form->label('Comments');?>
              </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <div class="form-group">
                  <?php echo $this->Form->input('code', array(
                    'class' => 'form-control','type'=>'textarea','label' => false ));?>
                </div>
              </div>
            </div>
             
              <!-- <span class="pull-right" <?php echo $this->Form->submit('Submit')?></span> -->
                      <?php echo $this->Form->end();?>
        
                <br>
                <br>
            </div>
        </div>
    </div>
   </div>
  </div>
</div>


                        
                                 



