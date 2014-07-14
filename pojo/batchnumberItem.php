<?php

require_once('d:\\www\\pojo\\model.php');

class batchnumberItem
{

	// déclarations des variables
		private $batchNumber;
    	private $companyId;
    	private $creationDate;
    	private $batchType;
    	private $description;
    	private $state;
    
	// constructeur
	function batchnumberItem() {
			$this->batchNumber = new Model("batchNumber");
    		$this->companyId = new Model("companyId");
    		$this->creationDate = new Model("creationDate");
    		$this->batchType = new Model("batchType");
    		$this->description = new Model("description");
    		$this->state = new Model("state");
    	}

	// déclarations des fonctions get
		function getBatchNumber(){
		return $this->batchNumber->getValue();
	}	
	
    	function getCompanyId(){
		return $this->companyId->getValue();
	}	
	
    	function getCreationDate(){
		return $this->creationDate->getValue();
	}	
	
    	function getBatchType(){
		return $this->batchType->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getState(){
		return $this->state->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setBatchNumber($batchNumber){
	 		$this->batchNumber->setValue(substr($batchNumber, 0, 30));
	 	}	
	
    	function setCompanyId($companyId){
	 		$this->companyId->setValue($companyId);
	 	}	
	
    	function setCreationDate($creationDate){
	 		$this->creationDate->setValue($creationDate);
	 	}	
	
    	function setBatchType($batchType){
	 		$this->batchType->setValue($batchType);
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 100));
	 	}	
	
    	function setState($state){
	 		$this->state->setValue($state);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->batchNumber->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->companyId->getValue())) {
				return false;
			}
			
		    		    		    		    		 
			if (is_null($this->state->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
