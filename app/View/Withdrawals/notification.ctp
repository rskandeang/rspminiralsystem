
<?php echo $withdrawals; ?>
<button><?php echo $this->Html->link('<i class="glyphicon glyphicon-trash"></i>', array('action'=>'delete', $withdrawals['withdrawals']['draw_id']),array('escape' => false,'style'=>'color:#2E86C1')); ?></button>

