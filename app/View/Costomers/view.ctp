 <?php echo $this->Session->flash(); ?>
	<?php echo 'Name: '.$customers['Costomer']['name'].'<br />'?>
	<?php echo 'Refer: '.$customers['Costomer']['code'].'<br />'?>
<?php 
	echo 'Your code: '.$cus_code;
?>
<p>Resporn: </p>

<?php 
	$count = 0;
	foreach($two as $twos){
		$code_two = $twos['Two']['code'].'<br/>';
		$count_two = count($code_two);
		$count += $count_two;
	}
	echo $count.'<br/>';
?>
<?php 
	$count = 0;
	foreach($three as $threes){
		$code_three = $threes['Three']['code'];
		$count_three = count($code_three);
		$count += $count_three;
	}	
	echo $count.'<br/>';
?>
<?php 
	$count = 0;
	foreach($four as $fours){
		$code_four = $fours['Four']['code'];
		$count_four = count($code_four);
		$count += $count_four;
	}
	echo $count.'<br/>';
?>
<?php
	// sum purchase
	$sum = 0;
	foreach($purchase as $purchases){
		$price = $purchases['Purchase']['price'];
		$amounts = $purchases['Purchase']['amounts'];
		//echo 'purchase: '.$sum_pur = $price * $amounts;
		$sum_pur = $price * $amounts;
		$sum += $sum_pur;
	}

	echo 'Total purchase:'.$sum.'$<br />';
?>
<?php 
	// sum purchase
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
	// total benifet
	echo 'Beni: '.$sum_beni.'<br />';
?>
<?php
	// draw money
	$sum_draw = 0;
	foreach($withdrawal as $withdrawals){
		$draw_money = $withdrawals['Withdrawal']['money'];
		
		$sum_draw += $draw_money;
	}
	echo 'Draw money: '.$sum_draw.'$ <br />';
	
	// money
	$balance = $sum_beni - $sum_draw;
	echo 'balance: '.$balance.'$';
?>
<?php echo $this->element('header') ?>
<?php echo $this->element('customer_detail_header') ?>
<?php echo $this->element('menu_sidebar_right') ?>
<?php echo $this->element('customer_detail') ?>
<?php echo $this->element('customer_detail_footer') ?>
<?php echo $this->element('footer') ?>