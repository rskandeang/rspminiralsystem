<div  class="container-fluid ">
  <div class="row  ">
    <div class="col-md-12 ">
      <nav class="navbar navbar-default  row">
        <div class="container-fluid border">
          <div class="navbar-header">
			       
          </div>
            <ul class="nav navbar-nav ">
              <li ><?php echo $this->Html->image('logo.png', array('alt' => 'logo', 'border' => '0','width'=>'150','height'=>'60')); ?></li >
                <li ><?php echo $this->Html->link( "Customer List",array('controller'=>'Purchases','action'=>'index'),array('style'=>'color:green') );?></li>
            </ul>


            <ul class="nav navbar-nav navbar-right">
                <li style="border-radius:50%" class="dropdown">
                  <a  class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $this->Html->image($this->Session->read('Auth.User.image'),array('width'=>'40')); ?> <?php print $this->Session->read('Auth.User.username'); ?>
                    
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><span>
                  <?php echo $this->Html->link( " Logout",array('controller'=>'Users','action'=>'logout'),array('style'=>'color:green','class'=>'glyphicon glyphicon-lock') );?></span></a></li>
                    <li><a href="#">Page 1-2</a></li>
                    <li><a href="#">Page 1-3</a></li> 
                  </ul>
                </li>
              <li ><?php echo $this->Html->link( "SignUp",array('controller'=>'Users','action'=>'add'),array('style'=>'color:green','class'=>'glyphicon glyphicon-edit') );?></li>
              
            </ul>
        </div>
      </nav>
    </div>
  </div>
</div>