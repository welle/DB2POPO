<?php

require_once('d:\\www\\pojo\\model.php');

class exerciseItem
{

	// déclarations des variables
		private $exercise;
    	private $companyId;
    	private $fromDate;
    	private $toDate;
    	private $status;
    	private $description;
    	private $type;
    	private $referenceExercise;
    
	// constructeur
	function exerciseItem() {
			$this->exercise = new Model("exercise");
    		$this->companyId = new Model("companyId");
    		$this->fromDate = new Model("fromDate");
    		$this->toDate = new Model("toDate");
    		$this->status = new Model("status");
    		$this->description = new Model("description");
    		$this->type = new Model("type");
    		$this->referenceExercise = new Model("referenceExercise");
    	}

	// déclarations des fonctions get
		function getExercise(){
		return $this->exercise->getValue();
	}	
	
    	function getCompanyId(){
		return $this->companyId->getValue();
	}	
	
    	function getFromDate(){
		return $this->fromDate->getValue();
	}	
	
    	function getToDate(){
		return $this->toDate->getValue();
	}	
	
    	function getStatus(){
		return $this->status->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getType(){
		return $this->type->getValue();
	}	
	
    	function getReferenceExercise(){
		return $this->referenceExercise->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setExercise($exercise){
	 		$this->exercise->setValue($exercise);
	 	}	
	
    	function setCompanyId($companyId){
	 		$this->companyId->setValue($companyId);
	 	}	
	
    	function setFromDate($fromDate){
	 		$this->fromDate->setValue($fromDate);
	 	}	
	
    	function setToDate($toDate){
	 		$this->toDate->setValue($toDate);
	 	}	
	
    	function setStatus($status){
	 		$this->status->setValue(substr($status, 0, 45));
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 255));
	 	}	
	
    	function setType($type){
	 		$this->type->setValue($type);
	 	}	
	
    	function setReferenceExercise($referenceExercise){
	 		$this->referenceExercise->setValue($referenceExercise);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->exercise->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->companyId->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->fromDate->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->toDate->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->status->getValue())) {
				return false;
			}
			
		    		    		 
			if (is_null($this->type->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->referenceExercise->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
