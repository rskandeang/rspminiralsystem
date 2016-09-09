<!-- start table wrap -->
          <div class="col-md-9" >
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title "><strong class="pull-left"> Dashboard</strong>
                      <i style="color:green; font-size:20px;" class="fa fa-info  fa-lg pull-right"></i><h1>
                </div>
                <div class="panel-body " style="background:#F5F6F0">
                  <div class="table-responsive">
                    <!-- start box -->
                     
    <div class="col-md-12">
      <div class="col-md-6">
        <div class="panel box-v1">
          <div style="background:#E0EEF2;" class="panel-heading bg-white border-none">
            <div class="col-md-12 col-sm-6 col-xs-6 text-center padding-0">
              <div class="col-md-6 text-left"> 
                <h4  class="text-left">Total Benefit</h4>
               </div>
               <div class="col-md-6 text-right">
                <i style="color:#2DB4DB" class="fa fa-3x  fa-shopping-bag" aria-hidden="true" > </i>
               </div>
            </div>
          </div>
          <div style="background:#E0EEF2;font-size:25px" class="panel-body text-center">
            <br>    
      <?php echo '$'.' '.$sum_beni;?>
           
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
              <div class="col-md-6 text-left"> 
                <h4  class="text-left">Total Withdrawal</h4>
               </div>
               <div class="col-md-6 text-right">
                <i style="color:#2DB4DB" class="fa fa-3x  fa-share" aria-hidden="true" > </i>
               </div>
            </div>
          </div>
          <div style="background:#E0EEF2;font-size:25px" class="panel-body text-center">
           <br>
            <?php
          // draw money
          $sum_draw = 0;
          foreach($withdrawal as $withdrawals){
            $draw_money = $withdrawals['Withdrawal']['money'];
            
            $sum_draw += $draw_money;
          }
          echo '$'.' '.$sum_draw;
          
        ?>
        
          </div>
          <div style="background:#fff;" class="panel-footer text-center">
           <!-- <form class="form-inline">-->
               <?php echo $this->Form->create('Withdrawal');?>
              <div class="form-group">
                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                <div class="input-group col-md-8">
                  <div class="input-group-addon">$</div>
                      <?php 
                      echo $this->Form->input('money', array(
                      'class' => 'form-control',
                      'id' =>'exampleInputAmount',
                      'placeholder' => 'Amount',
                      'label'=> false
                      ));
                    ?>
                  <div class="input-group-addon">.00</div>
                </div>
                <div class="col-md-4 pull-right"> 
                   <?php echo $this->Form->submit('Submit',array('class'=>'form-control btn btn-success','style'=>'margin-top:-35px;'))?>
              </div>
              </div>
             <?php echo $this->Form->end();?>
            <hr/>
          </div>
        </div>
      </div>
    </div>


    <div class="col-md-12">
      <div class="col-md-6">
        <div class="panel box-v1">
          <div style="background:#E0EEF2;" class="panel-heading bg-white border-none">
            <div class="col-md-12 col-sm-6 col-xs-6 text-center padding-0">
              <div class="col-md-6 text-left"> 
                <h4  class="text-left">Current Balance</h4>
               </div>
               <div class="col-md-6 text-right">
                <i style="color:#2DB4DB" class="fa fa-3x  fa-usd " aria-hidden="true" > </i>
               </div>
            </div>
          </div>
          <div style="background:#E0EEF2;font-size:25px" class="panel-body text-center">
                <br>

            <?php
        // balance money
          $balance = $sum_beni - $sum_draw;
          echo '$'.' '.$balance;
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
              <div class="col-md-6 text-left"> 
                <h4  class="text-left">Total Purchase</h4>
               </div>
               <div class="col-md-6 text-right">
                <i style="color:#2DB4DB" class="fa fa-3x  fa-cc-visa" aria-hidden="true" > </i>
               </div>
            </div>
          </div>
          <div style="background:#E0EEF2;font-size:25px" class="panel-body text-center">
               <br> 

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

        echo '$'.' '.$sum;
      ?>
               
          </div>
          <div style="background:#fff;" class="panel-footer text-center">
            <hr/>
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

