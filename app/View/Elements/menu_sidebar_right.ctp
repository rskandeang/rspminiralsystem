<div class="col-md-3">
  <div class="panel box-v1">
    <div class="panel-body text-center">
      <div class="nav-side-menu">
        <div class="brand">Customer Detail</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
            <div class="menu-list">
          <ul style="text-align: left;" id="menu-content" class="menu-content collapse out">
              <li>
                <a href="#">
                <i class="fa fa-dashboard fa-lg"></i> <span> <?php echo $this->Html->link( 'Dashboard',array('controller'=>'Costomers','action'=>'view',$id),array('escape' => false));?></span>
                </a>
              </li>
			  
			 <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                <a href="#">
					<i class="fa fa-gift fa-lg" ></i> <span> <?php echo $this->Html->link( 'List Purchase',array('controller'=>'Costomers','action'=>'view',$id),array('escape' => false));?></span>
				</a>
              </li>
			  
			  <!--
              <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                <a href="#"><i class="fa fa-gift fa-lg" ></i> UI Elements <span class="arrow"></span></a>
              </li>
              <ul  class="sub-menu collapse" id="products">
                  <li><a href="#">General</a></li>
                  <li><a href="#">Buttons</a></li>
                  <li><a href="#">Tabs & Accordions</a></li>
             
              </ul>
				-->

              <li data-toggle="collapse" data-target="#service" class="collapsed">
                <a href="#"><i class="fa fa-globe fa-lg"></i> Services <span class="arrow"></span></a>
              </li>  
              
               <li>
                <a href="#">
                  <i class="fa fa-users fa-lg"></i><span> <?php echo $this->Html->link( 'Referal List',array('controller'=>'Costomers','action'=>'customer_dashboard'),array('escape' => 0));?></span> 
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-list fa-lg"></i><span> <?php echo $this->Html->link( 'Purchases',array('controller'=>'Costomers','action'=>'purchase'),array('escape' => 0));?></span> 
                </a>
              </li>
          </ul>
         </div>
      </div>
          <br>
    </div>
  </div>
</div>

