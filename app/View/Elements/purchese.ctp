<div class="col-md-9">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title "><strong class="pull-left"> Customer Purchase</strong>
        <i style="color:green; font-size:20px;" class="fa fa-line-chart pull-right"></i><h1>
        </div>
        <div class="panel-body">
			<div class="table-responsive"> 
				<!-- input add purchase -->
				<?php echo $this->Form->create('Purchase');?>
				  <div class="form-group">
					<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
				
					<div class="input-group col-md-3" style = "margin-left: 57%;">
						  <?php 
						  echo $this->Form->input('amounts', array(
						  'class' => 'form-control',
						  'id' =>'exampleInputAmount',
						  'placeholder' => 'Add Purchase',
						  'label'=> false
						  ));
						?>
					</div>	
					<div class="col-md-2 pull-right"> 
					   <?php echo $this->Form->submit('Submit',array('class'=>'form-control btn btn-success','style'=>'margin-top:-57px;'))?>
				  </div>
				  </div>
				 <?php echo $this->Form->end();?>
			</div>
			  <div class="table-responsive">
				<table class="col-md-12 table table-bordered table-hover table-striped" cellpadding="0" cellspacing="0">
				  <thead > 
					<tr> 
						<th class="table-header" style="text-align: center;">No</th>
						<th class="table-header" style="text-align: center;">Date Purchase</th>
						<th class="table-header" style="text-align: center;">Prices</th>
						<th class="table-header" style="text-align: center;">Amounts</th>
						<th class="table-header" style="text-align: center;">Total Prices</th>
					</tr>
				  </thead>
				  <tbody>
					<tr> 
					<?php $i = 1;?>
					<?php foreach($purchase as $purchases): ?>                    
						<td scope="row" style="text-align: center;"><?php echo $i ?></td>
						<td style="text-align: center;"><?php echo $purchases['Purchase']['pur_date']; ?></td>
						<td style="text-align: center;"><?php echo $purchases['Purchase']['price']; ?></td>
						<td style="text-align: center;"><?php echo $purchases['Purchase']['amounts']; ?></td>
						<td style="text-align: center;"><?php echo '$ '.$purchases['Purchase']['amounts'] * $purchases['Purchase']['price']; ?></td>
						
					</tr>
						
					<?php 
						$i++;
						endforeach;
					?>
				  
			  </tbody>
		  </table>
		</div>
    </div>
   </div>
  </div>
</div>
