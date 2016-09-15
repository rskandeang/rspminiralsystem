<div class="col-md-9">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title"><strong style="color:#1d933F;">កែតម្រូវពត៌មានផ្ទាល់ខ្លួន</strong>
              <i style="color:green; font-size:20px;" class="fa fa-cogs fa-lg pull-right"></i>
            </h1>

        </div>
        <div class="panel-body">
          <div class="table-responsive">
          
            <div class="col-md-12">
              <?php echo $this->Session->flash('notification'); ?>
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
                  <?php echo $this->Form->input('email', array(
                    'class' => 'form-control','placeholder'=>'សារអេឡិចទ្រូនិច','label' => false ));?>
                </div>
              </div>
            </div>
            <!-- <div class="row">
                      <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="form-group text-right">
                       <label>កូដគណនីយ</label>      
              </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <div class="form-group">
                  <?php echo $this->Form->input('user_name', array(
                    'class' => 'form-control','placeholder'=>'login name','label' => false ));?>
                </div>
              </div>
            </div> -->
            
          <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="form-group text-right">
                             <label>នាមត្រកូល</label>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-8">
                <div class="form-group">
                  <?php echo $this->Form->input('first_name', array(
                    'class' => 'form-control','placeholder'=>'នាមត្រកូល','label' => false ));?>
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
                  <?php echo $this->Form->input('last_name', array(
                    'class' => 'form-control','placeholder'=>'នាមខ្លួន','label' => false ));?>
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
                  <?php echo $this->Form->input('gender', array(
                    'class' => 'form-control','placeholder'=>'ភេទ','label' => false ));?>
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
                  <?php echo $this->Form->input('phone', array(
                    'class' => 'form-control','placeholder'=>'លេខទូស័ព្ទ','label' => false ));?>
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
                 <div>
                    <?php echo $this->Form->input('dob',array('style'=>'padding:3px;margin:5px 0px 10px 0px;','label' => false), array('class'=>'col-md-3'));?>
                </div>
              </div>
            </div>

            
              <button type="submit" class="btn btn-success pull-right">បញ្ជូន</button>
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