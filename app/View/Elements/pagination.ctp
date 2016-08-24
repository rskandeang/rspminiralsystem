<html>
<head>
	<title></title>
	<style type="text/css"> 

			.badge:hover {
			  color: #ffffff;
			  text-decoration: none;
			  cursor: pointer;
			}

			.badge-success {
			  background-color: #468847;
			}
			.badge-success:hover {
			  background-color: #356635;
			}
			.label {
			  background-color:#ABB2B9;
			}
	</style>
</head>
<body style="text-align:center;" >
<?php
			echo $this->Paginator->counter('<label>'.'Total'.' <span class="badge badge-success">{:count}</span>&nbsp;'.'page'.'&nbsp;<span class="label label-default">{:page}</span>&nbsp;'. 'of'.'&nbsp; <span  class="label label-default">{:pages}</span></label><br/>');
			echo '<div class="paging">';
			echo $this->Paginator->prev('< ' . __('Previous'), array('class'=>'btn btn-default','style'=>'color:green'), null, array('class' => 'prev hide btn btn-default'));
			echo $this->Paginator->numbers(array('separator' => '', 'modulus' => 3,'class'=>'btn btn-default','style'=>'color:green'));
			echo $this->Paginator->next(__('Next') . ' >', array('class'=>'btn btn-default','style'=>'color:green'), null, array('class' => 'next hide btn btn-default',));
			echo '<br/><br/>';
			echo '</div>';

			?>
</body>
</html>