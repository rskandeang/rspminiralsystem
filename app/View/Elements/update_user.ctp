<div class="container" style="margin-top:30px">
	<div class="col-md-2"></div>
	<div class="col-md-6 col-md-offset-1">
		<div class="panel panel-default">
		  <div style="text-align:center;" class="panel-heading ">
		  		<h3 class="panel-title"><strong style="color:#1d933F;">កែតម្រូវពត៌មានរបស់អ្នកគ្រប់គ្រង</strong></h3>
		  </div>
			  <div class="panel-body">
				<?php echo $this->Session->flash('notification'); ?>
				
			  	
			  		<?php echo $this->Form->create('User',array('enctype'=>'multipart/form-data'));?>
			            <div class="row">
			                <div class="col-xs-12 col-sm-6 col-md-6">
			    				<div class="form-group">
			                       <?php echo $this->Form->input('firstname', array(
										'class' => 'form-control','placeholder'=>'នាមត្រកូល','label' => false ));?>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<?php echo $this->Form->input('lastname', array(
										'class' => 'form-control','placeholder'=>'នាមខ្លួន','label' => false ));?>
								</div>
							</div>
						</div>
						<div class="form-group">
							<?php echo $this->Form->input('username', array(
										'class' => 'form-control','placeholder'=>'កូដគណនីយ','label' => false ));?>
						</div>
						<!-- <div class="form-group">
							<?php echo $this->Form->input('password', array(
										'class' => 'form-control','placeholder'=>'Password','label' => false));?>
						</div> -->
						<div class="form-group">
									<?php echo $this->Form->input('gender',array('class'=>'form-control','label'=>false,'options'=>array('ប្រុស'=>'ប្រុស','ស្រី'=>'ស្រី'),'default'=>'2'));?>
								</div>
						<div class="form-group">
							<?php echo $this->Form->input('phone', array(
										'class' => 'form-control','placeholder'=>'លេខទូស័ព្ទ','label' => false));?>
						</div>
						<div class="form-group">
							<?php echo $this->Form->input('email', array(
											'class' => 'form-control','placeholder'=>'សារអេឡិចទ្រូនិច','label' => false));?>
						</div>
						<!-- <div class="form-group">
							<?php echo $this->Form->input('image', array(
											'type' => 'file'));?>
						</div>   -->                  
						  <button type="submit" class="btn btn-success form-control">បញ្ជូន</button>
						  <!-- <span class="pull-right" <?php echo $this->Form->submit('Submit')?></span> -->
											<?php echo $this->Form->end();?>
			  
			  				<hr style="margin-top:10px;margin-bottom:10px;" >
			  
			  </div>
		</div>
	</div>
</div>