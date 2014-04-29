<?php
	require('Factories/OperationFactory.php');
	$holis = new OperationFactory(); 
	$a = $holis -> getOperation("Divide",[4,2]);

	echo $a -> execute();
?>