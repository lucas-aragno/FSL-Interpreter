<?php
class MathematicalOperation
{
    protected $_operands;

		function __construct($operands) {
	       $_operands = array();
	       try
			{
				$this -> _operands[0] = $operands[0];
				$this -> _operands[1] = $operands[1];
			}
			catch (Exception $e)
			{
			 throw new Exception( 'Operands are missing', 0, $e);
			}
	   	}
}

?>