<?php
	class PrintOperation extends RegularOperation implements Operation{

		public function execute(){
			echo $this -> _operands[0];
		}
	}
?>