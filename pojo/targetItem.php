<?php

require_once('d:\\www\\pojo\\model.php');

class targetItem
{

	// déclarations des variables
		private $targetCode;
    	private $idBusinessUnit;
    	private $targetName;
    
	// constructeur
	function targetItem() {
			$this->targetCode = new Model("targetCode");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->targetName = new Model("targetName");
    	}

	// déclarations des fonctions get
		function getTargetCode(){
		return $this->targetCode->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getTargetName(){
		return $this->targetName->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setTargetCode($targetCode){
	 		$this->targetCode->setValue(substr($targetCode, 0, 10));
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setTargetName($targetName){
	 		$this->targetName->setValue(substr($targetName, 0, 45));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->targetCode->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		        return true;
	}


}
?>
