<?php
	class Variable {
		private $_name;
		private $_value;

		function __construct($name,$value) {
	       $this -> _name = $name;
	       $this -> _value = $value;
	   	}

	   	public function getName(){
	   		return $this -> _name;
	   	}

	   	public function getValue(){
	   		return $this -> _value;
	   	}

	   	public function store(){
	   		$redis -> set($this -> _name, $this -> _value);
	   	}		
	}
?>