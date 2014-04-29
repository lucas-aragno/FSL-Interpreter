<?php
	require_once('Operations/Operation.php');
	require_once('Operations/MathematicalOperation.php');
	require_once('Operations/RegularOperation.php');
	require_once('Operations/Add.php');
	require_once('Operations/Multiplication.php');
    require_once('Operations/Divide.php');
	require_once('Operations/Substract.php');
	require_once('Operations/Print.php');

	class OperationFactory{
		public function getOperation($operationType,$operands){
			switch ($operationType) {
			    case "Add":
			        return new Add($operands);
			        break;
			    case "Substraction":
			        return new Substract($operands);
			        break;
			    case "Multiplication":
			        return new Multiplication($operands);
			        break;
			    case "Divide":
			        return new Divide($operands);
			        break;
			    case "Print":
			        return new PrintOperation($operands);
			        break;
			    default:
			       return null;
			}			
		}
	}
?>