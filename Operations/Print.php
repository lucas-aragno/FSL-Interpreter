<?php
	class PrintOperation implements Operation{
		private $_operands;

		function __construct($operands) {
	       $_operands = array();
	       try
			{
				$this -> _operands[0] = $operands[0];
			}
			catch (Exception $e)
			{
			 throw new Exception( 'Operands are missing', 0, $e);
			}
	   	}

		public function execute(){
			echo $this -> _operands[0];
		}
	}
?>