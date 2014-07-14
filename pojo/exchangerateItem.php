<?php

require_once('d:\\www\\pojo\\model.php');

class exchangerateItem
{

	// déclarations des variables
		private $idBusinessUnit;
    	private $isoCode;
    	private $fromDate;
    	private $rate;
    
	// constructeur
	function exchangerateItem() {
			$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->isoCode = new Model("isoCode");
    		$this->fromDate = new Model("fromDate");
    		$this->rate = new Model("rate");
    	}

	// déclarations des fonctions get
		function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getIsoCode(){
		return $this->isoCode->getValue();
	}	
	
    	function getFromDate(){
		return $this->fromDate->getValue();
	}	
	
    	function getRate(){
		return $this->rate->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setIsoCode($isoCode){
	 		$this->isoCode->setValue(substr($isoCode, 0, 10));
	 	}	
	
    	function setFromDate($fromDate){
	 		$this->fromDate->setValue($fromDate);
	 	}	
	
    	function setRate($rate){
	 		$this->rate->setValue($rate);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->isoCode->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->fromDate->getValue())) {
				return false;
			}
			
		    		        return true;
	}


}
?>
