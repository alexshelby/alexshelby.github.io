<?php 
	$top=$_GET['top'];
	if (isset($top)) {
		require('./page/top.php');
	}$new=$_GET['new'];
	if (isset($new)) {
		require('./page/new.php');
	}$add=$_GET['add'];
	if (isset($add)) {
		require('./page/add.php');
	}
?>