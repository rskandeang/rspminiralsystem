<style type="text/css">
	    #widraw{
	    	margin-left: 57%;
	    }
@media (min-width: 300px) and (max-width: 1000px) {
    #widraw{
      width: 99%;
      margin:2px;
   	
    }
    #widraw2{
      width: 100%;
      padding-right: 3px;
    padding-left: 1px;
      margin-top: 40px;
    }
  }
</style>
<div class="col-md-9">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title "><strong class="pull-left" style="color:#1d933F;">បញ្ជីការទិញរបស់អតិថិជន</strong>
        <i style="color:green; font-size:20px;" class="fa fa-line-chart pull-right"></i><h1>
        </div>
        <div class="panel-body">
			<!-- box form to buy -->
				<div class="table-responsive"> 
				<!-- input add purchase -->
				<?php echo $this->Form->create('Purchase');?>
				  <div class="form-group">
					<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
				
					<div id="widraw" class="input-group col-md-3" >
						  <?php 
						  echo $this->Form->input('amounts', array(
						  'class' => 'form-control',
						  'id' =>'exampleInputAmount',
						  'placeholder' => 'ចំនួនទិញ',
						  'type'=>'int',
						  'label'=> false
						  ));
						?>
					</div>	
					<div id="widraw2" class="col-md-2 pull-right"> 
					   <?php echo $this->Form->submit('បញ្ជូន',array('class'=>'form-control btn btn-success','style'=>'margin-top:-57px;'))?>
				  </div>
				  </div>
				 <?php echo $this->Form->end();?>
			</div>
			<!-- end box form to buy -->
          <div class="table-responsive">
            <table class="col-md-12 table table-bordered table-hover table-striped" cellpadding="0" cellspacing="0">
              <thead > 
                <tr> 
                    <th class="table-header" style="text-align: center;">ចំនួនដង</th>
                    <th class="table-header" style="text-align: center;">ថ្ងៃទិញ</th>
                    <th class="table-header" style="text-align: center;">តម្លៃរាយ</th>
                    <th class="table-header" style="text-align: center;">ចំនួនសរុប</th>
                    <th class="table-header" style="text-align: center;">តម្លៃសរុប</th>
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
