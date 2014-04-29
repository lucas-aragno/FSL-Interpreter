<?php
	require('Factories/OperationFactory.php');
	$holis = new OperationFactory(); 
	$a = $holis -> getOperation("Print",[4]);

	echo $a -> execute();
?>