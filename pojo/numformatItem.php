<?php

require_once('d:\\www\\pojo\\model.php');

class numformatItem
{

	// déclarations des variables
		private $code;
    	private $idBusinessUnit;
    	private $pattern;
    	private $periodicity;
    
	// constructeur
	function numformatItem() {
			$this->code = new Model("code");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->pattern = new Model("pattern");
    		$this->periodicity = new Model("periodicity");
    	}

	// déclarations des fonctions get
		function getCode(){
		return $this->code->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getPattern(){
		return $this->pattern->getValue();
	}	
	
    	function getPeriodicity(){
		return $this->periodicity->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setCode($code){
	 		$this->code->setValue(substr($code, 0, 15));
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setPattern($pattern){
	 		$this->pattern->setValue(substr($pattern, 0, 100));
	 	}	
	
    	function setPeriodicity($periodicity){
	 		$this->periodicity->setValue($periodicity);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->code->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->pattern->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->periodicity->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
