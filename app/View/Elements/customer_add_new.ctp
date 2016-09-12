<div class="container" style="margin-top:30px">
	<div class="col-md-2"></div>
	<div class="col-md-6 col-md-offset-1">
		<div class="panel panel-default">
		  <div style="text-align:center;" class="panel-heading ">
		  	<i style="color:green; font-size:20px;" class="fa fa-pencil fa-lg pull-right"></i>
		  		<h3 class="panel-title"><strong>ចុះឈ្មោះអតិថិជន</strong></h3>
		  </div>
			  <div class="panel-body">
				<p><?php echo $this->Session->flash(); ?></p>
			  		<?php echo $this->Form->create('Costomer',array('enctype'=>'multipart/form-data'));?>
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
									<?php echo $this->Form->input('gender',array('class'=>'form-control','label'=>false,'options'=>array('Male'=>'Male','Female'=>'Female'),'default'=>'2'));?>
								</div>
			    				<div class="form-group">
									<?php echo $this->Form->input('user_name', array(
										'class' => 'form-control','placeholder'=>'ឈ្មោះគណនីយ','label' => false ));?>
								</div>
					
								<div class="form-group">
									<?php echo $this->Form->input('password', array(
										'class' => 'form-control','placeholder'=>'លេខសំងាត់','label' => false));?>
								</div>		
						<div class="form-group">
							<?php echo $this->Form->input('phone', array(
										'class' => 'form-control','placeholder'=>'លេខទូស័ព្ទ','label' => false));?>
						</div>

						 
						<div class="form-group">
							<?php echo $this->Form->input('email', array(
											'class' => 'form-control','placeholder'=>'សារអេឡិចទ្រូនិច','label' => false));?>
						</div>
						<div class="row">	
							<div class="col-xs-12 col-sm-6 col-md-6">
								<label>តើអ្នកជាអតិថិជនទីមួយឬ?</label>
								<!-- <?php echo $this->Form->label('តើអ្នកជាអតិថិជនទីមួយឬ?');?> -->
							</div>
								<div class="col-xs-12 col-sm-6 col-md-6">
								<div style="margin-top:-10px;" >
									<div style='margin-top: 11px;'><label>ទីមួយ</label></div>
									
										<?php echo $this->Form->input('first',array(
											  'class'=>'form-check-input',
											  'id' => 'box',
			                                  'type'=>'checkbox',
			                                  'label'=>false,
			                                  'style'=>'margin-top:-27px;',
			                                  'format' => array('before', 'input', 'between', 'label', 'after', 'error'))); ?>
								</div>
								</div>
							
							</div>
						<div class="form-group">
							<?php echo $this->Form->input('code', array(
											'class' => 'form-control'
											,'placeholder'=>'លេខសំងាត់អតិថិជន',
											'id' => 'text',
											'label' => false,
											'id' => 'text'));?>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<label>ថ្ងៃ​ ខែ ឆ្នាំកំណើត</label>
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

<script type="text/javascript">

	document.getElementById('box').onchange = function() {
		document.getElementById('text').disabled = this.checked;
	};
</script>