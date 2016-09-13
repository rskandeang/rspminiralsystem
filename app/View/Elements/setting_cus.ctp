<div class="col-md-9">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title"><strong style="color:#1d933F;">ព៍តមានទូទៅរបស់អតិថិជន</strong>
              <i style="color:green; font-size:20px;" class="fa fa-cogs fa-lg pull-right"></i>
              
            </h1>

        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <div class="col-lg-4 col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              <a href="#">
                 <span> <?php echo $this->Html->link( '<i class="glyphicon glyphicon-edit"></i>',array('controller'=>'Costomers','action'=>'own_update',$id),array('escape' => 0,'style'=>'color:green','class'=>'btn btn-default pull-right'));?></span> 
                </a>
                              <span><?php echo $this->Html->image('profile.png', array('alt' => 'profile', 'border' => '0','width'=>'225','height'=>'260')); ?></span>
                                <h5 class="text-center"><strong><?php echo $customers['Costomer']['first_name'].' '.$customers['Costomer']['last_name']?></strong></h5>
                                <h5 class="text-center"><strong><?php echo $cus_code;?></strong></h5>
                            </div>
                            
                        </div>
                    </div>

            <div class="col-md-8">
             
          <br>

              <?php echo $this->Form->create('Costomer',array('enctype'=>'multipart/form-data'));?>
              <div class="row">
                      <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="form-group text-right">
                             <label>សារអេឡិចទ្រូនិច</label>
                             
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
                             <label>កូដ</label>
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
       
          <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="form-group text-right">
                             <label>នាមត្រកូល</label>
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
                             <label>នាមខ្លួន</label>
                             
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
                             <label>កូដគណនីយ</label>
                             
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
                             <label>ថ្ងៃ ខែ ឆ្នាំកំណើត</label>
                             
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
                             <label>ភេទ</label>
                             
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
                             <label>លេខទូស័ព្ទ</label>
                             
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
