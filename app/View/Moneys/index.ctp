     <?php echo $this->element('header'); ?> 
<div class="container-fluid">
  <div class="row ">
    <div class="col-md-12">
        <div style="background-color:#1d933F; color:#fff;" class="col-md-2"> <h4 class="text-center">Total current money list</h4></div>
    </div>
     <!-- <div class="col-md-12">
        <div class="col-md-3" style="margin-top:30px"><p style="margin-left: 94px;" class="btn btn-default"><?php echo $this->Html->link( "<< User list",array('controller'=>'Users','action'=>'index'),array('style'=>'color:green') );?></p></div>
        <div class="col-md-6"><h1 class="text-center">Total current money List</h1></div>
        <div class="col-md-3"></div>
    </div> -->
    <div class="col-md-12 ">
        <div class="col-md-1"></div>
        <div class="col-md-1"></div>
        <div class="col-md-10">
              <table class="col-md-12 table table-hover table-striped" cellpadding="0" cellspacing="0">
      <thead style="background-color:#1d933F;"> 
                <tr> 
            <th class="table-header" style="text-align: center;"><?php echo $this->Paginator->sort('id', 'No',array('style'=>'color:#fff;')); ?></th>
            <th class="table-header" style="text-align: center;"><?php echo $this->Paginator->sort('customer_id', 'Customer',array('style'=>'color:#fff;')); ?></th>
            <th class="table-header" style="text-align: center;"><?php echo $this->Paginator->sort('money', 'Current money',array('style'=>'color:#fff;')); ?></th>
                </tr>
            </thead>
            <tbody>
      <?php $count=0; ?>
        <?php foreach($moneys as $money): ?>                   
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td scope="row" style="text-align: center;"><?php echo $money['Money']['id']; ?></td>
            <td style="text-align: center;"><?php echo $money['Money']['customer_id']; ?></td>
            <td style="text-align: center;"><?php echo $money['Money']['curent_moneys'];?></td>
        </tr>
        <?php endforeach; ?>
 
            <?php $total = 0; ?>
              
               <?php foreach($moneys as $money): ?>               
              <!--   <tr>
                 
                  <td style="text-align: center;"><?php $total += $money['Money']['curent_moneys']?></td>
                  
                </tr> -->
                <?php endforeach; ?>
                 <td style="text-align: center;"></td>
                 <td style="text-align: center;"></td>
                 <td style="text-align: center; "><p style="margin-top:10px;padding:10px 25px; color:green" class="btn btn-default"><?php echo $total; ?></p></td>
                 
            </tbody>
            
        </table>
        <?php unset($user); ?> 
            </div>
        
    </div>
  </div>
</div>
<?php echo $this->element('pagination'); ?>  
<?php echo $this->element('footer'); ?>  


   

        