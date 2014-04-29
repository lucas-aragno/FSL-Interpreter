<?php
	class Substract extends MathematicalOperation implements Operation{

		public function execute(){
			return $this -> _operands[0] - $this -> _operands[1];
		}
	}
?>