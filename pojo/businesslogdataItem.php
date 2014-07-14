<?php

require_once('d:\\www\\pojo\\model.php');

class businesslogdataItem
{

	// d�clarations des variables
		private $idBusinessLog;
    	private $functionName;
    	private $value;
    
	// constructeur
	function businesslogdataItem() {
			$this->idBusinessLog = new Model("idBusinessLog");
    		$this->functionName = new Model("functionName");
    		$this->value = new Model("value");
    	}

	// d�clarations des fonctions get
		function getIdBusinessLog(){
		return $this->idBusinessLog->getValue();
	}	
	
    	function getFunctionName(){
		return $this->functionName->getValue();
	}	
	
    	function getValue(){
		return $this->value->getValue();
	}	
	
    
	// d�clarations des fonctions set
		function setIdBusinessLog($idBusinessLog){
	 		$this->idBusinessLog->setValue($idBusinessLog);
	 	}	
	
    	function setFunctionName($functionName){
	 		$this->functionName->setValue(substr($functionName, 0, 45));
	 	}	
	
    	function setValue($value){
	 		$this->value->setValue(substr($value, 0, 45));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idBusinessLog->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->functionName->getValue())) {
				return false;
			}
			
		    		        return true;
	}


}
?>
