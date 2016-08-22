<!-- 
<?php $total = 0; ?>
<?php $total_price_for_all_product = 0; ?>
<?php foreach($purchases as $purchase): ?>                
  <tr>
        <td style="text-align: center;">
            <?php 
            			
            	$total += $purchase['Purchase']['amounts'];
            ?>
        </td>
        <td style="text-align: center;">
            <?php 
            			
            	$total_price_for_all_product += $purchase['Purchase']['t_price'];
            ?>
        </td>
  </tr>
  <?php endforeach; ?>
  <?php echo $total; ?>
  <?php echo $total_price_for_all_product; ?>
        
 -->

<?php echo $this->element('header'); ?> 
<div class="container-fluid">
  <div class="row ">
     <div class="col-md-12">
    <div class="col-md-3"><p class="btn btn-default"><?php echo $this->Html->link( "<< User list",array('controller'=>'Users','action'=>'index'),array('style'=>'color:green') );?></p></div>
      <div class="col-md-6"><h1 class="text-center">Total Purchase </h1></div>
      <div class="col-md-3"></div>
    </div>
    <div class="col-md-12 ">
        <div class="col-md-1"></div>
        <div class="col-md-10 well">
             <table class="col-md-12"cellpadding="0" cellspacing="0">
      <thead> 
           <tr> 
            <th class="table-header" style="text-align: center;"><?php echo $this->Paginator->sort('id', 'No'); ?></th>
            <th class="table-header" style="text-align: center;"><?php echo $this->Paginator->sort('customer_id', 'Customer'); ?></th>
            <th class="table-header" style="text-align: center;"><?php echo $this->Paginator->sort('date_purchase', 'Date Purchase'); ?></th>
            <th class="table-header" style="text-align: center;"><?php echo $this->Paginator->sort('amounts', 'Amounts'); ?></th>
            <th class="table-header" style="text-align: center;"><?php echo $this->Paginator->sort('t_price', 'Total Prices'); ?></th>
        </tr>
      </thead>
      <tbody>
      <?php $count=0; ?>
        <?php foreach($purchases as $purchase): ?>                    
        <?php $count ++;?>
        <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
        <?php endif; ?>
            <td style="text-align: center;"><?php echo $purchase['Purchase']['id']; ?></td>
            <td style="text-align: center;"><?php echo $purchase['Purchase']['customer_id']; ?></td>
            <td style="text-align: center;"><?php echo $purchase['Purchase']['date_purchase']; ?></td>
            <td style="text-align: center;"><?php echo $purchase['Purchase']['amounts']; ?></td>
            <td style="text-align: center;"><?php echo $purchase['Purchase']['t_price'];?></td>
        </tr>
        <?php endforeach; ?>
 
      <?php $total = 0; ?>
              <?php $total_price_for_all_product = 0; ?>
              <?php foreach($purchases as $purchase): ?>                
              <!--   <tr>
                  <td style="text-align: center;"><?php echo $purchase['Purchase']['id']; ?></td>
                  <td style="text-align: center;"><?php echo $purchase['Purchase']['customer_id']; ?></td>
                  <td style="text-align: center;"><?php $total += $purchase['Purchase']['amounts']; ?></td>
                  <td style="text-align: center;"><?php echo $total_price_for_all_product += $purchase['Purchase']['t_price']; ?></td> 
                </tr> -->
                <?php endforeach; ?>
         
             <td style="text-align: center;"></td>
             <td style="text-align: center;"></td>
             <td style="text-align: center;"></td>
                 <td style="text-align: center; "><p style="margin-top:10px;padding:10px 25px; color:green" class="btn btn-default"><?php echo $total; ?></p></td>
                 <td style="text-align: center; "><p style="margin-top:10px;padding:10px 25px; color:green" class="btn btn-default"><?php echo $total_price_for_all_product; ?></p></td>

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


