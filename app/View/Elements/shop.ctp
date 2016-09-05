      <div class="container-fluid wrapper ">

          <!-- start: content -->
            <div id="content">
                <div class="col-md-12" style="padding:20px;">
                    <div class="col-md-12 padding-0">
                        <div class="col-md-12 padding-0">
                            <div class="col-md-12 padding-0">
                                <div class="col-md-4">
                                    <div  style='background:#28B463' class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-12 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Total Amount</h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                            <?php $total = 0; ?>
                                            <?php $total_price = 0; ?>
                                                    <?php foreach($purchases as $purchase): ?>  
                                                     <tr>
                                                        <td><?php $total += $purchase['Purchase']['amounts']; ?></td>
                                                        <td><?php $total_price += $purchase['Purchase']['amounts']*$purchase['Purchase']['price']; ?></td>
                                                      </tr> 
                                                      <?php endforeach; ?>
                                               
                                            <p style="color:#fff;font-size:30px;"><?php echo $total; ?></p>


                                        <p>Amount order of a month</p>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4" >
                                    <div style='background:#5DADE2' class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-12 col-sm-6 col-xs-12 text-left padding-0">
                                          <h4 class="text-left">Total Purchase</h4>
                                        </div>
                                        
                                      </div>
                                      <div class="panel-body text-center">
                                            <p style="color:#fff;font-size:30px;"><?php echo $total_price; ?></p>
                                          
                                        <p>Total purchase of a month</p>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div style='background:#A569BD' class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-12 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Current money</h4>
                                        </div>
                                        
                                      </div>
                                      <div class="panel-body text-center">
                                        
                                            <p style="color:#fff;font-size:30px;"><?php echo $total_cur_money; ?></p>
                                       
                                        <p>Company current monies</p>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-12 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 style="margin-bottom:25px;" class="text-center">All list of withdrawals</h4>
                                        </div>
                                        
                                      </div>
                                      <div class="panel-body text-center">
                                        <table class="col-md-12 table table-hover table-striped" cellpadding="0" cellspacing="0">
      <thead style="background-color:#1d933F;"> 
       <!--  <tr> 
            <th class="table-header" style="text-align: center;color:white">No</th>
            <th class="table-header" style="text-align: center;color:white"></th>
            <th class="table-header" style="text-align: center;color:white">Customer Name</th>
            <th class="table-header" style="text-align: center;color:white"></th>
            <th class="table-header" style="text-align: center;color:white">Withdrawal Amount</th>
        </tr> -->
      </thead>
      <tbody >
            <?php foreach($withdrawals as $withdrawal): ?>  

            <tr>  

                <td   scope="row" style="text-align: center;">Customer ID( <?php echo $withdrawal['draw_id']; ?>)
				Customer name: <strong>
					<?php //echo $withdrawal['firstname'].' '.$withdrawal['lastname'];?>

                <td   scope="row" style="text-align: center;">Customer ID( <?php echo $withdrawal['draw_id']; ?>) Customer name: <strong>
					<?php //echo $withdrawal['firstname'].' //'.$withdrawal['lastname'];?>

				</strong> have been withdrawal the amounts: " <?php echo $withdrawal['money'];?>$ " on <?php echo $withdrawal['draw_date'];?> .</td>
               
            </tr>
            <?php endforeach; ?>


      </tbody>
    </table>
                                       
                                        <p>Company's customer withdrawals</p>
                                        <hr/>
                                      </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
          <!-- end: content -->       
      </div>