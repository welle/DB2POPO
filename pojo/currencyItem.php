<?php

require_once('d:\\www\\pojo\\model.php');

class currencyItem
{

	// déclarations des variables
		private $idBusinessUnit;
    	private $isoCode;
    	private $label;
    
	// constructeur
	function currencyItem() {
			$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->isoCode = new Model("isoCode");
    		$this->label = new Model("label");
    	}

	// déclarations des fonctions get
		function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getIsoCode(){
		return $this->isoCode->getValue();
	}	
	
    	function getLabel(){
		return $this->label->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setIsoCode($isoCode){
	 		$this->isoCode->setValue(substr($isoCode, 0, 10));
	 	}	
	
    	function setLabel($label){
	 		$this->label->setValue(substr($label, 0, 45));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->isoCode->getValue())) {
				return false;
			}
			
		    		        return true;
	}


}
?>
