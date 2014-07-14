<?php

require_once('d:\\www\\pojo\\model.php');

class specialperioddataItem
{

	// déclarations des variables
		private $idSpecialPeriod;
    	private $idBusinessUnit;
    	private $dataName;
    	private $value;
    
	// constructeur
	function specialperioddataItem() {
			$this->idSpecialPeriod = new Model("idSpecialPeriod");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->dataName = new Model("dataName");
    		$this->value = new Model("value");
    	}

	// déclarations des fonctions get
		function getIdSpecialPeriod(){
		return $this->idSpecialPeriod->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getDataName(){
		return $this->dataName->getValue();
	}	
	
    	function getValue(){
		return $this->value->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdSpecialPeriod($idSpecialPeriod){
	 		$this->idSpecialPeriod->setValue($idSpecialPeriod);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setDataName($dataName){
	 		$this->dataName->setValue(substr($dataName, 0, 45));
	 	}	
	
    	function setValue($value){
	 		$this->value->setValue(substr($value, 0, 300));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idSpecialPeriod->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->dataName->getValue())) {
				return false;
			}
			
		    		        return true;
	}


}
?>
