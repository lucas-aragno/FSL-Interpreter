<?php
	require('Factories/OperationFactory.php');
	require('db/RedisConnection.php');
	
	$holis = new OperationFactory(); 
	$a = $holis -> getOperation("Print",[4]);

	echo $a -> execute();
?>