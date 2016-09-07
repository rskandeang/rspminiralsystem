  <div class="container-fluid wrapper ">
  <!-- start: content -->
    <div id="content ">
        <div class="col-md-12" style="padding:20px;">
          <!-- start table wrap -->
          <div class="col-md-12" >
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title "><strong class="pull-left"> Shop</strong>
                      <i style="color:green; font-size:20px;" class="fa fa-tags  fa-lg pull-right"></i><h1>
                </div>
                <div class="panel-body" style="background:#F5F6F0">
                  <div class="table-responsive">
                    <!-- start box -->
                                  <div class="col-md-12 padding-0">
                                   <div class="col-md-12 padding-0">
                                  <div class="col-md-12 padding-0">
                                    <div class="col-md-6">
                                      <div class="panel box-v1">
                                        <div style="background:#E0EEF2;" class="panel-heading bg-white border-none">
                                          <div class="col-md-12 col-sm-6 col-xs-6 text-center padding-0">
                                             <div class="col-md-6 text-left"> 
                                              <h4  >Total Amounts</h4>
                                             </div>
                                             <div class="col-md-6 text-right">
                                                <i style="color:#2DB4DB" class="fa fa-3x  fa-briefcase" aria-hidden="true" > </i>
                                             </div>
                                          </div>
                                        </div>
                                        <div style="background:#E0EEF2;" class="panel-body text-center">
                                              <br>
                                     <?php $total = 0; ?>
                                    <?php $total_price = 0; ?>
                                            <?php foreach($purchases as $purchase): ?>  
                                             <tr>
                                                <td><?php $total += $purchase['Purchase']['amounts']; ?></td>
                                                <td><?php $total_price += $purchase['Purchase']['amounts']*$purchase['Purchase']['price']; ?></td>
                                              </tr> 
                                              <?php endforeach; ?>
                                       
                                    <p style="font-size:30px;"><?php echo $total; ?></p>
                                          
                                        </div>
                                        <div style="background:#fff;" class="panel-footer text-center">
                                          <p>Amount order of a month</p>
                                          <hr/>
                                        </div>
                                      </div>
                                    </div>

                    <!-- <div class="col-md-6">
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
                          <form class="form-inline">
                            <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                              <div class="input-group col-md-8">
                                <div class="input-group-addon">$</div>
                                <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                                <div class="input-group-addon">.00</div>
                              </div>
                              <div class="col-md-4 pull-right"> <button type="submit" class="btn btn-primary"> Transfer cash</button></div>
                            </div>
                           
                          </form>
                          <hr/>
                        </div>
                      </div>
                    </div> -->


                                              <!-- <div class="col-md-4">
                                                  <div  style='background:#E0EEF2' class="panel box-v1">
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
                                                             
                                                          <p style="font-size:30px;"><?php echo $total; ?></p>


                                                      <p>Amount order of a month</p>
                                                      <hr/>
                                                    </div>
                                                  </div>
                                              </div> -->

                    <div class="col-md-6">
                      <div class="panel box-v1">
                        <div style="background:#E0EEF2;" class="panel-heading bg-white border-none">
                          <div class="col-md-12 col-sm-6 col-xs-6 text-center padding-0">
                            <div class="col-md-6 text-left"> 
                               <h4  class="text-left">Total Purchase</h4>
                             </div>
                             <div class="col-md-6 text-right">
                                <i style="color:#2DB4DB" class="fa fa-3x  fa-cc-visa" aria-hidden="true" > </i>
                             </div>
                          </div>
                        </div>
                        <div style="background:#E0EEF2;" class="panel-body text-center">
                          <br>
                      <p style="font-size:30px;"><?php echo '$'.' '.$total_price; ?></p>
                     
                          
                        </div>
                        <div style="background:#fff;" class="panel-footer text-center">
                          <p>Total purchase of a month</p>
                          <hr/>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="panel box-v1">
                        <div style="background:#E0EEF2;" class="panel-heading bg-white border-none">
                          <div class="col-md-12 col-sm-6 col-xs-6 text-center padding-0">
                             <div class="col-md-6 text-left"> 
                               <h4 class="text-left">Current money</h4>
                             </div>
                             <div class="col-md-6 text-right">
                                <i style="color:#2DB4DB" class="fa fa-3x  fa-signal" aria-hidden="true" > </i>
                             </div>
                          </div>
                        </div>
                        <div style="background:#E0EEF2;" class="panel-body text-center">
                          <br>
                          <!-- <?php $totalMoney = 0; ?>
                              <?php foreach($monies as $money): ?>  
                               <tr>
                                  <td><?php $total += $money['Money']['curent_moneys']; ?></td>
                                </tr> 
                                <?php endforeach; ?> -->
                          
                       <p style="font-size:30px;"><?php echo '$'.' '.$total_cur_money; ?></p>
                          
                        </div>
                        <div style="background:#fff;" class="panel-footer text-center">
                          <p>Company current monies</p>
                          <hr/>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="panel box-v1">
                        <div style="background:#E0EEF2;" class="panel-heading bg-white border-none">
                          <div class="col-md-12 col-sm-6 col-xs-6 text-center padding-0">
                            <div class="col-md-6 text-left"> 
                               <h4  class="text-left">Total Benefit</h4>
                             </div>
                             <div class="col-md-6 text-right">
                                <i style="color:#2DB4DB" class="fa fa-3x  fa-flask" aria-hidden="true" > </i>
                             </div>
                          </div>
                        </div>
                        <div style="background:#E0EEF2;" class="panel-body text-center">
                          <br>
                      <p style="font-size:30px;"><?php echo '$'.' '.$total_money; ?></p>
                     
                          
                        </div>
                        <div style="background:#fff;" class="panel-footer text-center">
                          <p>Total purchase of a month</p>
                          <hr/>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!-- end box -->
                </div>
            </div>
           </div>
          </div>
        </div>
          <!-- end table wrap -->
<!--
<!-- start the table of the record withdrawals -->
 <div class="col-md-12">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div  class="panel-heading">
        <h1 class="panel-title "><strong class="pull-left"> Customers withdrawal List</strong>
        <i style="color:green; font-size:20px;" class="fa fa-th-list pull-right"></i><h1>
      </div>
        <div  class="panel-body">
          <div class="table-responsive">
            <div style="padding-left:100px;padding-right:100px;" class="panel-body">

      <table class="col-md-10 table table-hover table-striped" cellpadding="0" cellspacing="0">
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
                <td   scope="row" style="text-align: center;"> Customer name: <strong>
					<?php echo $withdrawal['user_name']?>
				</strong> have been withdrawal the amounts: " <?php echo $withdrawal['money'];?>$ " on <?php echo $withdrawal['date'];?> .</td>

               
            </tr>
            <?php endforeach; ?>
      </tbody>
    </table>
              <p style="text-align: center;">Company's customer withdrawals</p>
              <hr/>
              </div>
                </div>
            </div>
           </div>
          </div>
        </div>  
        <!-- end the table of the record withdrawals -->
		-->
      </div>
    </div>
  </div>
          <!-- end: content -->       
   