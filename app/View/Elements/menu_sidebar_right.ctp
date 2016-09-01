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
					<i class="fa fa-gift fa-lg" ></i> <span> <?php echo $this->Html->link( 'List Purchase',array('controller'=>'Costomers','action'=>'view_pur',$id),array('escape' => false));?></span>
				</a>
              </li>
			  
               <li>
                <a href="#">
                  <i class="fa fa-users fa-lg"></i><span> <?php echo $this->Html->link( 'Referal List',array('controller'=>'Costomers','action'=>'view_refer',$id),array('escape' => 0));?></span> 
                </a>
              </li>
			  
             
              <li>
                <a href="#">
                  <i class="fa fa-cogs  fa-lg"></i><span> <?php echo $this->Html->link( 'Setting',array('controller'=>'Costomers','action'=>'view_setting', $id),array('escape' => 0));?></span> 
                </a>
              </li>
          </ul>
         </div>
      </div>
          <br>
    </div>
  </div>
</div>

