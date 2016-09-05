      <div class="container-fluid wrapper ">

          <!-- start: content -->
            <div id="content">
                <div class="col-md-12" style="padding:20px;">
                    <div class="col-md-12 padding-0">
                        <div class="col-md-12 padding-0">
                            <div class="col-md-12 padding-0">
                                <div class="col-md-4">
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
                                </div>
                                <div class="col-md-4" >
                                    <div style='background:#E0EEF2' class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-12 col-sm-6 col-xs-12 text-left padding-0">
                                          <h4 class="text-left">Total Purchase</h4>
                                        </div>
                                        
                                      </div>
                                      <div class="panel-body text-center">
                                            <p style="font-size:30px;"><?php echo $total_price; ?></p>
                                          
                                        <p>Total purchase of a month</p>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div style='background:#E0EEF2' class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-12 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Current money</h4>
                                        </div>
                                        
                                      </div>
                                      <div class="panel-body text-center">
                                        <?php $totalMoney = 0; ?>
                                                    <?php foreach($monies as $money): ?>  
                                                     <tr>
                                                        <td><?php $total += $money['Money']['curent_moneys']; ?></td>
                                                      </tr> 
                                                      <?php endforeach; ?>
                                               
                                            <p style="font-size:30px;"><?php echo $total; ?></p>
                                       
                                        <p>Company current monies</p>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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

            <tr >  
                <td   scope="row" style="text-align: right;">Customer ID( <?php echo $withdrawal['draw_id']; ?> )
                </td>
                <td style="text-align: left;"> 
                  Customer name:&nbsp;&nbsp;&nbsp; <strong><?php echo $withdrawal['firstname'].' '.$withdrawal['lastname'];?></strong>
                </td>
                <td>
                   have been withdrawal the amounts: " <?php echo $withdrawal['money'];?>$ "
                </td>
                <td> on <?php echo $withdrawal['draw_date'];?></td>
                
               
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
      </div>
    </div>
  </div>
          <!-- end: content -->       
   