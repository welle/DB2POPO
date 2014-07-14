<?php

require_once('d:\\www\\pojo\\model.php');

class activityItem
{

	// déclarations des variables
		private $idActivity;
    	private $idContact;
    	private $idBusinessUnit;
    	private $validityFrom;
    	private $jobName;
    	private $startTime;
    	private $quantity;
    	private $unitType;
    	private $description;
    	private $status;
    
	// constructeur
	function activityItem() {
			$this->idActivity = new Model("idActivity");
    		$this->idContact = new Model("idContact");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->validityFrom = new Model("validityFrom");
    		$this->jobName = new Model("jobName");
    		$this->startTime = new Model("startTime");
    		$this->quantity = new Model("quantity");
    		$this->unitType = new Model("unitType");
    		$this->description = new Model("description");
    		$this->status = new Model("status");
    	}

	// déclarations des fonctions get
		function getIdActivity(){
		return $this->idActivity->getValue();
	}	
	
    	function getIdContact(){
		return $this->idContact->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getValidityFrom(){
		return $this->validityFrom->getValue();
	}	
	
    	function getJobName(){
		return $this->jobName->getValue();
	}	
	
    	function getStartTime(){
		return $this->startTime->getValue();
	}	
	
    	function getQuantity(){
		return $this->quantity->getValue();
	}	
	
    	function getUnitType(){
		return $this->unitType->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getStatus(){
		return $this->status->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdActivity($idActivity){
	 		$this->idActivity->setValue($idActivity);
	 	}	
	
    	function setIdContact($idContact){
	 		$this->idContact->setValue($idContact);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setValidityFrom($validityFrom){
	 		$this->validityFrom->setValue($validityFrom);
	 	}	
	
    	function setJobName($jobName){
	 		$this->jobName->setValue(substr($jobName, 0, 45));
	 	}	
	
    	function setStartTime($startTime){
	 		$this->startTime->setValue($startTime);
	 	}	
	
    	function setQuantity($quantity){
	 		$this->quantity->setValue($quantity);
	 	}	
	
    	function setUnitType($unitType){
	 		$this->unitType->setValue($unitType);
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 255));
	 	}	
	
    	function setStatus($status){
	 		$this->status->setValue($status);
	 	}	
	
        
    function isNotNullable() {
			    		 
			if (is_null($this->idContact->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->validityFrom->getValue())) {
				return false;
			}
			
		    		    		 
			if (is_null($this->startTime->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->quantity->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->unitType->getValue())) {
				return false;
			}
			
		    		    		 
			if (is_null($this->status->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
