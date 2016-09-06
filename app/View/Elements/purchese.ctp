<div class="col-md-9">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title "><strong class="pull-left"> Customer Purchase</strong>
        <i style="color:green; font-size:20px;" class="fa fa-line-chart pull-right"></i><h1>
        </div>
        <div class="panel-body">
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
