<div class="col-md-9">
    <div class="col-md-12">
      <div class="col-md-6">
        <div class="panel box-v1">
          <div style="background:#E0EEF2;" class="panel-heading bg-white border-none">
            <div class="col-md-12 col-sm-6 col-xs-6 text-center padding-0">
              <i style="color:#2DB4DB" class="fa fa-3x  fa-university" aria-hidden="true" > </i>
              <h4  class="text-left">Total Benefit</h4>

            </div>
          </div>
          <div style="background:#E0EEF2;" class="panel-body text-center">
                
			<?php echo '$'.$sum_beni;?>
            
          </div>
          <div style="background:#fff;" class="panel-footer text-center">
            <p>Amount order of a month</p>
            <hr/>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="panel box-v1">
          <div style="background:#E0EEF2;" class="panel-heading bg-white border-none">
            <div class="col-md-12 col-sm-6 col-xs-6 text-center padding-0">
              <i style="color:#2DB4DB" class="fa fa-3x  fa-university" aria-hidden="true" > </i>
              <h4  class="text-left">Total Withdrawal</h4>

            </div>
          </div>
          <div style="background:#E0EEF2;" class="panel-body text-center">
                

            <?php
					// draw money
					
					$sum_draw = 0;
					foreach($withdrawal as $withdrawals){
						$draw_money = $withdrawals['Withdrawal']['money'];
						
						$sum_draw += $draw_money;
					}
					echo '$'.$sum_draw;
					
				?>
            
          </div>
          <div style="background:#fff;" class="panel-footer text-center">
            <p>Amount order of a month</p>
            <hr/>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="col-md-9">
    <div class="col-md-12">
      <div class="col-md-6">
        <div class="panel box-v1">
          <div style="background:#E0EEF2;" class="panel-heading bg-white border-none">
            <div class="col-md-12 col-sm-6 col-xs-6 text-center padding-0">
              <i style="color:#2DB4DB" class="fa fa-3x  fa-university" aria-hidden="true" > </i>
              <h4  class="text-left">Total Balance</h4>

            </div>
          </div>
          <div style="background:#E0EEF2;" class="panel-body text-center">
                

            <?php
				// balance money
					$balance = $sum_beni - $sum_draw;
					echo '$'.$balance;
			?>
            
          </div>
          <div style="background:#fff;" class="panel-footer text-center">
            <p>Amount order of a month</p>
            <hr/>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="panel box-v1">
          <div style="background:#E0EEF2;" class="panel-heading bg-white border-none">
            <div class="col-md-12 col-sm-6 col-xs-6 text-center padding-0">
              <i style="color:#2DB4DB" class="fa fa-3x  fa-university" aria-hidden="true" > </i>
              <h4  class="text-left">Total Purchase</h4>

            </div>
          </div>
          <div style="background:#E0EEF2;" class="panel-body text-center">
                

            <?php
				// sum purchase
				$sum = 0;
				foreach($purchase as $purchases){
					$price = $purchases['Purchase']['price'];
					$amounts = $purchases['Purchase']['amounts'];
					//echo 'purchase: '.$sum_pur = $price * $amounts;
					$sum_pur = $price * $amounts;
					$sum += $sum_pur;
				}

				echo '$'.$sum;
			?>
            
          </div>
          <div style="background:#fff;" class="panel-footer text-center">
            <p>Amount order of a month</p>
            <hr/>
          </div>
        </div>
      </div>
    </div>
</div>
     