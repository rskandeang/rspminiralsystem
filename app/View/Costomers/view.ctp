 <?php echo $this->Session->flash(); ?>
	<?php echo 'Name: '.$customers['Costomer']['name'].'<br />'?>
	<?php echo 'Refer: '.$customers['Costomer']['code'].'<br />'?>
<?php 
	echo 'Your code: '.$cus_code;
?>
<p>Resporn: </p>

<?php 
	foreach($two as $twos){
		echo $twos['Two']['code'].'<br/>';
	}
	
?>
<?php 
	foreach($three as $threes){
		echo $threes['Three']['code'].'<br>';
	}	
?>
<?php 
	foreach($four as $fours){
		echo $fours['Four']['code'].'<br>';
	}
	
?>
<?php 
	$sum = 0;
	foreach($purchase as $purchases){
		echo $purchases['Purchase']['pur_date'].'<br />';
		echo $purchases['Purchase']['amounts'].'<br />';
		echo $purchases['Purchase']['price'].'<br />';
		$price = $purchases['Purchase']['price'];
		$amounts = $purchases['Purchase']['amounts'];
		//echo 'purchase: '.$sum_pur = $price * $amounts;
		$sum_pur = $price * $amounts;
		$sum += $sum_pur;
	}

	echo 'Total purchase:'.$sum.'$<br />';
?>
<?php 
	
	echo 'Beni: '.$sum_beni.'<br />';
?>
<?php 
	$sum_draw = 0;
	foreach($withdrawal as $withdrawals){
		$draw_money = $withdrawals['Withdrawal']['money'];
		
		$sum_draw += $draw_money;
	}
	echo 'Draw money: '.$sum_draw.'$ <br />';
	
	//
	$balance = $sum_beni - $sum_draw;
	echo 'balance: '.$balance.'$';
?>


<?php unset($customer); ?>