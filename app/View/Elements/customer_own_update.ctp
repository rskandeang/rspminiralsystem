<div class="col-md-9">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title"><strong> Customer Purchase</strong>
              <i style="color:green; font-size:20px;" class="fa fa-cogs fa-lg pull-right"></i>
            </h1>

        </div>
        <div class="panel-body">
          <div class="table-responsive">
          
            <div class="col-md-12">
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
                             <?php echo $this->Form->label('Login Name');?>
              </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <div class="form-group">
                  <?php echo $this->Form->input('username', array(
                    'class' => 'form-control','placeholder'=>'login name','label' => false ));?>
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
                             <?php echo $this->Form->label('Date of birth');?>
              </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <div class="form-group">
                  <?php echo $this->Form->input('dob', array(
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
              <button type="submit" class="btn btn-success pull-right">Save Change</button>
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


                        
                                 



