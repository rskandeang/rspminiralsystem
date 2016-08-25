 <?php echo $this->Session->flash(); ?>
<p>Name: </p> <?php echo $customers['Costomer']['name']?>
<p>Refer: </p> <?php echo $customers['Costomer']['code']?>
<p>Resporn: </p>
<?php 
	$st = 5;
	$nd = 3;
	$rd = 2;
?>
<?php 
	foreach($two as $twos){
		echo $twos['Two']['code'].'<br/>';
	}
	$total_st = count($two) * $st;
?>
<?php 
	foreach($three as $threes){
		echo $threes['Three']['code'].'<br>';
	}
	$total_nd = count($three) * $nd;
?>
<?php 
	foreach($four as $fours){
		echo $fours['Four']['code'].'<br>';
	}
	$total_rd = count($four) * $rd;	
?>
<p>Total benefit from all referals: </p>
<?php 
	echo $total_pr = $total_st + $total_nd + $total_rd. ' %';
?>

<?php unset($customer); ?>