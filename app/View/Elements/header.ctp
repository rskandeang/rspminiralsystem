<div  class="container-fluid ">
  <div  class="row">
    <div  class="col-md-12 ">
      <nav class="navbar navbar-default  row">
        <div style="background-color:#32800A;" class="container-fluid border">
          <div class="navbar-header">
          </div>
            <ul class="nav navbar-nav ">
              <li ><?php echo $this->Html->image('logo.png', array('alt' => 'logo', 'border' => '0','width'=>'150','height'=>'60')); ?></li >
                <!-- <li ><?php echo $this->Html->link( "Total Purchases",array('controller'=>'Purchases','action'=>'index'),array('style'=>'color:#fff') );?></li>
                <li ><?php echo $this->Html->link( "Withdrawal",array('controller'=>'Withdrawals','action'=>'index'),array('style'=>'color:#fff') );?></li>
                 <li ><?php echo $this->Html->link( "Money",array('controller'=>'Moneys','action'=>'index'),array('style'=>'color:#fff') );?></li>
                 <li ><?php echo $this->Html->link( "Customer list",array('controller'=>'Costomers','action'=>'index'),array('style'=>'color:#fff') );?></li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li ><?php echo $this->Html->link( '<li style="color:#fff;font-size:30px;margin-top:15px;margin-left:10px;" class="fa fa-university" aria-hidden="true"></li>',array('controller'=>'Withdrawals','action'=>'index'),array('escape' => false));?></li>

              <li ><?php echo $this->Html->link( '<li style="color:#fff;font-size:30px;margin-top:15px;margin-left:10px;"  class="fa fa-usd" aria-hidden="true"></li>',array('controller'=>'Moneys','action'=>'index'),array('escape' => false),array('style'=>'color:#fff;'));?></li>
              
              <li><?php echo $this->Html->link( '<li style="color:#fff;font-size:30px;margin-top:15px;margin-left:10px;" class="fa fa-credit-card-alt" aria-hidden="true"></li>',array('controller'=>'Purchases','action'=>'index'),array('escape' => false),array('style'=>'color:#fff') );?></li>

              <li><?php echo $this->Html->link('<li style="color:#fff;font-size:30px;margin-top:15px;margin-left:10px;"  class="fa fa-users" aria-hidden="true"></li>',array('controller'=>'Costomers','action'=>'index'),array('escape' => false,'style'=>'color:#fff'),array('style'=>'color:#fff;font-size:30px;margin-top:15px;margin-left:10px;'));?></li>

                <li style="border-radius:50%" class="dropdown">
  
                  <a  class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $this->Html->image($this->Session->read('Auth.User.image'),array('width'=>'60','style'=>'display: inline-block;width: 50px;height: 50px;border-radius: 50%;background-repeat: no-repeat;background-position: center center;background-size: cover;  ')); ?> <!-- <?php print $this->Session->read('Auth.User.username'); ?> -->
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><span>
                  <?php echo $this->Html->link( " Logout",array('controller'=>'Users','action'=>'logout'),array('style'=>'color:green','class'=>'glyphicon glyphicon-lock') );?></span></a></li>
                  <li><a href="#"><span>
                  <?php echo $this->Html->link( " Change Password",array('controller'=>'Users','action'=>''),array('style'=>'color:green','class'=>'glyphicon glyphicon-lock') );?></span></a></li>
                  <li><a href="#"><span>
                  <?php echo $this->Html->link( " Change Profile",array('controller'=>'Users','action'=>''),array('style'=>'color:green','class'=>'glyphicon glyphicon-lock') );?></span></a></li>
                    <!-- <li><a href="#">Page 1-2</a></li> -->
                    <!-- <li><a href="#">Page 1-3</a></li>  -->
                  </ul>
                </li>
              <!-- <li ><?php echo $this->Html->link( "SignUp",array('controller'=>'Users','action'=>'add'),array('style'=>'color:#fff','class'=>'glyphicon glyphicon-edit') );?></li> -->
              
            </ul>
        </div>
      </nav>
    </div>
  </div>
</div>