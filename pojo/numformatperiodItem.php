<?php

require_once('d:\\www\\pojo\\model.php');

class numformatperiodItem
{

	// déclarations des variables
		private $code;
    	private $idBusinessUnit;
    	private $periodYear;
    	private $periodMonth;
    	private $counter;
    
	// constructeur
	function numformatperiodItem() {
			$this->code = new Model("code");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->periodYear = new Model("periodYear");
    		$this->periodMonth = new Model("periodMonth");
    		$this->counter = new Model("counter");
    	}

	// déclarations des fonctions get
		function getCode(){
		return $this->code->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getPeriodYear(){
		return $this->periodYear->getValue();
	}	
	
    	function getPeriodMonth(){
		return $this->periodMonth->getValue();
	}	
	
    	function getCounter(){
		return $this->counter->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setCode($code){
	 		$this->code->setValue(substr($code, 0, 15));
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setPeriodYear($periodYear){
	 		$this->periodYear->setValue($periodYear);
	 	}	
	
    	function setPeriodMonth($periodMonth){
	 		$this->periodMonth->setValue($periodMonth);
	 	}	
	
    	function setCounter($counter){
	 		$this->counter->setValue($counter);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->code->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->periodYear->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->periodMonth->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->counter->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
