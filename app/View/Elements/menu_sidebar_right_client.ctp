<div class="col-md-3">
  <div class="nav-side-menu" style="margin-left: 10px;">
        <div class="brand" style="color:#1d933F; font-family: Kh Siemreap;">ពត៌មានលំអិតរបស់អតិថិជន</div> 
        
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
            <div class="menu-list">
          <ul style="text-align: left; margin-left:15px;" id="menu-content" class="menu-content collapse out">

        <div style="background-color:#E7E7E7;padding:6px;margin-bottom: 20px; " class="col-md-12 panel-body">
    <div style="background-color:#fff;padding-left:10px;padding-right:10px;">

            <li >
                    <a href="#">
                    <i style="color:#2DB4DB" class="fa fa-dashboard fa-lg"></i> <span> <?php echo $this->Html->link( 'ការទូទាត់សាច់ប្រាក់',array('controller'=>'Clients','action'=>'view',$id),array('escape' => false));?></span>
                    </a>
            </li>
            
           <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                    <a href="#">
              <i style="color:#2DB4DB" class="fa fa-credit-card-alt" ></i> <span> <?php echo $this->Html->link( 'បញ្ជីការទិញ',array('controller'=>'Clients','action'=>'view_pur',$id),array('escape' => false));?></span>
            </a>
          </li>
        
               <li>
                <a href="#">
                  <i style="color:#2DB4DB" class="fa fa-list-alt fa-lg"></i><span> <?php echo $this->Html->link( 'បណ្ដាញអតិថិជន',array('controller'=>'Clients','action'=>'view_refer',$id),array('escape' => 0));?></span> 
                </a>
              </li>
        
             
              <li>
                <a href="#">
                  <i style="color:#2DB4DB" class="fa fa-cogs  fa-lg"></i><span> <?php echo $this->Html->link( 'ពត៌មានទូទៅ',array('controller'=>'Clients','action'=>'view_setting', $id),array('escape' => 0));?></span> 
                </a>
              </li>
             
                </div>
      </div>
          </ul>
         </div>
      </div>
</div>


