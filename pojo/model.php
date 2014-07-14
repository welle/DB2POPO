<?php
class Model
{
	private $name;
	private $value;
	private $canBeNull;
	
	function Model($name) {
		$this->name = $name;
		$this->canBeNull = true;
	}
	
	function setName($name) {
		$this->name = $name;
	}
	
	function setValue($value) {
		$this->value = $value;
	}
	
	function setCanBeNull($canBeNull) {
		$this->canBeNull = $canBeNull;
	}
	
	function getName() {
		return $this->name;
	}
	
	function getValue() {
		return $this->value;
	}
	
	function getCanBeNull() {
		return $this->value;
	}
}