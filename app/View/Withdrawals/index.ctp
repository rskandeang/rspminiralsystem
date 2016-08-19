<?php echo $this->element('header'); ?> 
<div class="container-fluid">
  <div class="row ">
     <div class="col-md-12">
     <div class="col-md-3"><p class="btn btn-default"><?php echo $this->Html->link( "<< User list",array('controller'=>'Users','action'=>'index'),array('style'=>'color:green') );?></p></div>
    <div class="col-md-6"><h1 class="text-center">Withdrawal List</h1></div>
    <div class="col-md-3"></div>
    </div>
    <div class="col-md-12 ">
        <div class="col-md-1"></div>
        <div class="col-md-10 well">
             <table class="col-md-12"cellpadding="0" cellspacing="0">
			<thead> 
				<tr> 
            <th class="table-header" style="text-align: center;"><?php echo $this->Paginator->sort('id', 'No'); ?></th>
            <th class="table-header" style="text-align: center;"><?php echo $this->Paginator->sort('cus_name', 'Customer Name'); ?></th>
            <th class="table-header" style="text-align: center;"><?php echo $this->Paginator->sort('withdrawal', 'Withdrawal Amount'); ?></th>
				</tr>
			</thead>
      <?php $count=0; ?>
        <?php foreach($withdrawals as $withdrawal): ?>                   
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td style="text-align: center;"><?php echo $withdrawal['Withdrawal']['id']; ?></td>
            <td style="text-align: center;"><?php echo $withdrawal['Withdrawal']['cus_name'];?></td>
            <td style="text-align: center;"><?php echo $withdrawal['Withdrawal']['withdrawal'];?></td>
        </tr>
        <?php endforeach; ?>
 <?php unset($user); ?> 

			</tbody>
		</table>
            </div>
             <div class="col-md-1"></div>
    </div>
  </div>
</div>
<?php echo $this->element('pagination'); ?>  
<?php echo $this->element('footer'); ?>  


        