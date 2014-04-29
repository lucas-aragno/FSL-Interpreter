<?php
	require('Factories/OperationFactory.php');
	require('db/RedisConnection.php');
	require('Variables/Variable.php');
	require('Interpreter/Script.php');
	$holis = new OperationFactory(); 
	$a = $holis -> getOperation("Print",[4]);
	echo $a -> execute();

?>