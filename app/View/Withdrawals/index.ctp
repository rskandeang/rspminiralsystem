<?php echo $this->element('header'); ?> 
<div class="container-fluid">
  <div class="row ">
    <div class="col-md-12">
        <div style="background-color:#32800A; color:#fff;" class="col-md-2"> <h4 class="text-center">Withdrawal List</h4></div>
    </div>
     <!-- <div class="col-md-12">
     <div class="col-md-3" style="margin-top:30px"><p style="margin-left: 94px;" class="btn btn-default"><?php echo $this->Html->link( "<< User list",array('controller'=>'Users','action'=>'index'),array('style'=>'color:green') );?></p></div>
    <div class="col-md-6"><h1 class="text-center">Withdrawal List</h1></div>
    <div class="col-md-3"></div>
    </div> -->
    <div class="col-md-12 ">
        <div class="col-md-1"></div>
        <div class="col-md-1"></div>
        <div class="col-md-10 ">
             <table class="col-md-12 table table-hover table-striped" cellpadding="0" cellspacing="0">
      <thead style="background-color:#32800A;"> 
        <tr> 
            <th class="table-header" style="text-align: center;"><?php echo $this->Paginator->sort('id', 'No',array('style'=>'color:#fff;')); ?></th>
            <th class="table-header" style="text-align: center;"><?php echo $this->Paginator->sort('cus_name', 'Customer Name',array('style'=>'color:#fff;')); ?></th>
            <th class="table-header" style="text-align: center;"><?php echo $this->Paginator->sort('withdrawal', 'Withdrawal Amount',array('style'=>'color:#fff;')); ?></th>
        </tr>
      </thead>
      <tbody>
          <?php $count=0; ?>
            <?php foreach($withdrawals as $withdrawal): ?>                   
            <?php $count ++;?>
            <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
            <?php endif; ?>
                <td scope="row" style="text-align: center;"><?php echo $withdrawal['Withdrawal']['id']; ?></td>
                <td style="text-align: center;"><?php echo $withdrawal['Withdrawal']['cus_name'];?></td>
                <td style="text-align: center;"><?php echo $withdrawal['Withdrawal']['withdrawal'];?></td>
            </tr>
            <?php endforeach; ?>
     <?php unset($user); ?> 

      </tbody>
    </table>
            </div>
            
    </div>
  </div>
</div>
<?php echo $this->element('pagination'); ?>  
<?php echo $this->element('footer'); ?>  


        