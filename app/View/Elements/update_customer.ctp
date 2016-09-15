<div class="container" style="margin-top:30px">
	<div class="col-md-2"></div>
	<div class="col-md-6 col-md-offset-1">
		<div class="panel panel-default">
		  <div style="text-align:center;" class="panel-heading ">
		  		<h3 class="panel-title"><strong style="color:#1d933F;">កែតម្រូវពត៌មានអតិថិជន</strong></h3>
		  </div>
			  <div class="panel-body">
			  	<?php echo $this->Session->flash('notification'); ?>
			  		<?php echo $this->Form->create('Costomer',array('enctype'=>'multipart/form-data'));?>
			            <div class="row">
			                <div class="col-xs-12 col-sm-6 col-md-6">
			    				<div class="form-group">
			                       <?php echo $this->Form->input('first_name', array(
										'class' => 'form-control','placeholder'=>'នាមត្រកូល','label' => false ));?>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<?php echo $this->Form->input('last_name', array(
										'class' => 'form-control','placeholder'=>'នាមខ្លួន','label' => false ));?>
								</div>
							</div>
						</div>
						<div class="form-group">
									<?php echo $this->Form->input('gender',array('class'=>'form-control','label'=>false,'options'=>array('ប្រុស'=>'ប្រុស','ស្រី'=>'ស្រី'),'default'=>'2'));?>
						</div>
						
			    				<!-- <div class="form-group">
									<?php echo $this->Form->input('user_name', array(
										'class' => 'form-control','placeholder'=>'កូដគណនីយ','label' => false ));?>
								</div> -->
							
								<!-- <div class="form-group">
									<?php echo $this->Form->input('password', array(
										'class' => 'form-control','placeholder'=>'លេខសំងាត់','label' => false));?>
								</div> -->
						 
						<div class="form-group">
							<?php echo $this->Form->input('phone', array(
										'class' => 'form-control','placeholder'=>'លេខទូស៍ព្ទ','label' => false));?>
						</div>

						 
						<div class="form-group">
							<?php echo $this->Form->input('email', array(
											'class' => 'form-control','placeholder'=>'សារអេឡិចទ្រូនិច','label' => false));?>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<label>ថ្ងៃ ខែ ឆ្នាំកំណើត</label>
								<div>
										<?php echo $this->Form->input('dob',array('style'=>'padding:3px;margin:10px 0px 10px 0px;','label' => false), array('class'=>'col-md-3'));?>
								</div>
							</div>
						</div>
						
						<!-- <div class="form-group">
							<?php echo $this->Form->input('image', array(
											'type' => 'file'));?>
						</div> -->                   
						  <button type="submit" class="btn btn-success form-control">បញ្ជូន</button>
						  <!-- <span class="pull-right" <?php echo $this->Form->submit('Submit')?></span> -->
											<?php echo $this->Form->end();?>
			  
			  				<hr style="margin-top:10px;margin-bottom:10px;" >
			  
			  </div>
		</div>
	</div>
</div>