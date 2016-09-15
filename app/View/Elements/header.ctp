
<nav class="navbar navbar-inverse">
  <div style="background-color:#1d933F;" class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <span><?php echo $this->Html->image('logo.png', array('alt' => 'logo', 'border' => '0','width'=>'135','height'=>'50','style'=>"margin-top:5px;margin-left:100px")); ?></span>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
              <li id="icon" >
                <?php if($logs >= 1){ ?>
                        <div id="notification" style="background:#f1240f;position: absolute;right: 27px;margin-right:-79px;margin-top:3px;border-radius:50%;width:20px;height:20px;">
                  <div style="color:#FFF;position:absolute;right:6px;">
                    <?php 
                       echo $logs;
                       
                    ?>
                  </div>
                </div>
                     <?php }
                ?>
                
                <?php 
                  echo $this->Html->link( '<li style="font-size:35px;margin-top:8px;" ><span style="color:#fff" class="fa fa-opencart" aria-hidden="true"></span></li>',array('controller'=>'Costomers','action'=>'link'),array('title'=>'ការលក់','escape' => 0));
                  ?>
            </li>

              <!-- <li ><?php echo $this->Html->link( '<li style="font-size:30px;margin-top:10px;" ><span style="color:#fff" class="fa fa-university" aria-hidden="true"></span></li>',array('controller'=>'Withdrawals','action'=>'index'),array('escape' => 0));?></li>

              <li ><?php echo $this->Html->link( '<li style="font-size:30px;margin-top:10px;"  ><span style="color:#fff" class="fa fa-usd" aria-hidden="true"></span></li>',array('controller'=>'Moneys','action'=>'index'),array('escape' => 0));?></li>
              
              <li><?php echo $this->Html->link( '<li style="font-size:30px;margin-top:10px;" ><span style="color:#fff" class="fa fa-credit-card-alt" aria-hidden="true"></span></li>',array('controller'=>'Purchases','action'=>'index'),array('escape' => 0));?></li> -->

              <li><?php echo $this->Html->link('<li style="font-size:30px;margin-top:10px;"><span style="color:#fff" class="fa fa-bar-chart" aria-hidden="true"></span></li>',array('controller'=>'Costomers','action'=>'index'),array('title'=>'អតិថិជន','escape' => 0));?></li>

              <li><?php echo $this->Html->link('<li style="font-size:30px;margin-top:10px;"><span style="color:#fff;" class="fa fa-user-plus" aria-hidden="true"></span></li>',array('controller'=>'Users','action'=>'index'),array('title'=>'អ្នកប្រើ','escape' => 0));?></li>
                
                <li style="border-radius:50%" class="dropdown">
  
                  <a  class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $this->Html->image($this->Session->read('Auth.User.image'),array('width'=>'60','style'=>'display: inline-block;width: 50px;height: 50px;border-radius: 50%;background-repeat: no-repeat;background-position: center center;background-size: cover;border: 2px solid #DDDDDD !important;  ')); ?> <!-- <?php print $this->Session->read('Auth.User.username'); ?> -->
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><span>
                  <?php echo $this->Html->link("​ ចាកចេញ?",array('controller'=>'Users','action'=>'logout'),array('style'=>'color:#000;margin-bottom: 10px;','class'=>'fa fa-sign-out') );?></span></a></li>


                  <!-- <li><a href="#"><span>
                  <?php echo $this->Html->link( " Change Password",array('controller'=>'Users','action'=>''),array('style'=>'color:green','class'=>'glyphicon glyphicon-lock') );?></span></a></li>
                  <li><a href="#"><span>
                  <?php echo $this->Html->link( " Change Profile",array('controller'=>'Users','action'=>''),array('style'=>'color:green','class'=>'glyphicon glyphicon-lock') );?></span></a></li> -->
                    <!-- <li><a href="#">Page 1-2</a></li> -->
                    <!-- <li><a href="#">Page 1-3</a></li>  -->
                  </ul>
                </li>
              <!-- <li ><?php echo $this->Html->link( "SignUp",array('controller'=>'Users','action'=>'add'),array('style'=>'color:#fff','class'=>'glyphicon glyphicon-edit') );?></li> -->
              
            </ul>
    </div>
  </div>
  <div style="background-color:#fff; height:6px;" ></div>

</nav>


  