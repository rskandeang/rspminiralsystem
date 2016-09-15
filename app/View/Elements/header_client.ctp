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

                <li style="border-radius:50%" class="dropdown">
  
                  <a  class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $this->Html->image('profile.png', array('alt' => 'profile', 'border' => '0','width'=>'50','height'=>'50'),array('width'=>'60','style'=>'display: inline-block;width: 50px;height: 50px;border-radius: 50%;background-repeat: no-repeat;background-position: center center;background-size: cover;border: 2px solid #DDDDDD !important;  ')); ?> <!-- <?php print $this->Session->read('Auth.User.username'); ?> -->
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><span>
                  <?php echo $this->Html->link( " ចាកចេញ",array('controller'=>'Clients','action'=>'logout'),array('style'=>'color:green','class'=>'fa fa-sign-out') );?></span></a></li>
                  
                  </ul>
                </li>
              <!-- <li ><?php echo $this->Html->link( "SignUp",array('controller'=>'Users','action'=>'add'),array('style'=>'color:#fff','class'=>'glyphicon glyphicon-edit') );?></li> -->
              
            </ul>
    </div>
  </div>
  <div style="background-color:#fff; height:6px;" ></div>

</nav>