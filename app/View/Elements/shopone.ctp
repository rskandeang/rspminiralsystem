  <div class="container-fluid wrapper ">
  <!-- start: content -->
    <div id="content ">
        <div class="col-md-12" style="padding:20px;">
          <!-- start table wrap -->
          <div class="col-md-12" >
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title "><strong class="pull-left" style="color:#1d933F;">ការលក់</strong>
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
                                <h4 >ចំនួនការលក់សរុប</h4>
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
                            <p>ចំនួនលក់ចេញទៅអោយអតិថិជន</p>
                            <hr/>
                          </div>
                        </div>
                      </div>
                    <div class="col-md-6">
                      <div class="panel box-v1">
                        <div style="background:#E0EEF2;" class="panel-heading bg-white border-none">
                          <div class="col-md-12 col-sm-6 col-xs-6 text-center padding-0">
                            <div class="col-md-6 text-left"> 
                               <h4  class="text-left">ទឹកប្រាក់ការលក់សរុប</h4>
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
                          <p>ចំនួនទឹកប្រាក់ការលក់ចេញទៅអោយអតិថិជន</p>
                          <hr/>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="panel box-v1">
                        <div style="background:#E0EEF2;" class="panel-heading bg-white border-none">
                          <div class="col-md-12 col-sm-6 col-xs-6 text-center padding-0">
                             <div class="col-md-6 text-left"> 
                               <h4 class="text-left">ទឹកប្រាក់មិនទាន់ដកសរុប</h4>
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
                          <p>ចំនួនទឹកប្រាក់ដែលអតិថិជនទាំងអស់មិនទាន់ដកសរុប</p>
                          <hr/>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="panel box-v1">
                        <div style="background:#E0EEF2;" class="panel-heading bg-white border-none">
                          <div class="col-md-12 col-sm-6 col-xs-6 text-center padding-0">
                            <div class="col-md-10 text-left"> 
                               <h4  class="text-left">ចំនួនទឹកប្រាក់កម្រៃជើងសារសរុប</h4>
                             </div>
                             <div class="col-md-2 text-right">
                                <i style="color:#2DB4DB" class="fa fa-3x  fa-flask" aria-hidden="true" > </i>
                             </div>
                          </div>
                        </div>
                        <div style="background:#E0EEF2;" class="panel-body text-center">
                          <br>
                      <p style="font-size:30px;"><?php echo '$'.' '.$total_money; ?></p>
                     
                          
                        </div>
                        <div style="background:#fff;" class="panel-footer text-center">
                          <p>ទឹកប្រាក់​កម្រៃជើងសារសរុបដែលត្រូវផ្ដល់ឲ្យអតិថិជនទាំអស់</p>
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
        <!-- start the table of the record withdrawals -->
       <div class="col-md-12">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div  class="panel-heading">
              <h1 class="panel-title "><strong class="pull-left" style="color:#1d933F;">បញ្ជីការដកលុយរបស់អតិថិជន</strong>
              <i style="color:green; font-size:20px;" class="fa fa-th-list pull-right"></i><h1>
            </div>
            
              <div style="padding-left:70px;padding-right:70px;" class="panel-body">
                <div class="table-responsive">
                  <div  class="panel-body">

            <table class="col-md-10 table table-hover table-striped" cellpadding="0" cellspacing="0">
            <tbody >
                  <?php foreach($logslist as $logslists): ?>      
                  <tr>  
      <!-- <td   scope="row" style="text-align: center;"> Customer  <strong>
                <?php echo $logslists['Logs']['cus_name']?>
              </strong> have been withdrawal the amounts " <?php echo $logslists['Logs']['amounts'];?> " on <?php echo $logslists['Logs']['date'];?> .</td> -->

                     <td   scope="row" style="text-align: left;padding-left:40px;"> អតិថិជនឈ្មោះ  <strong>
                <?php echo $logslists['Logs']['cus_name']?>
              </strong>" <?php echo $logslists['Logs']['amounts'];?> " នៅថ្ងៃទី <?php echo $logslists['Logs']['date'];?> .</td>


                     
                  </tr>
                  <?php endforeach; ?>
            </tbody>

          </table>
        <?php echo $this->element('pagination'); ?> 
                  

                    <hr/>
                    </div>
                      </div>
                  </div>

                 </div>
                </div>
              </div>  
        <!-- end the table of the record withdrawals -->
      </div>
    </div>
  </div>
          <!-- end: content -->       
   