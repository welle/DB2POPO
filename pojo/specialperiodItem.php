<?php

require_once('d:\\www\\pojo\\model.php');

class specialperiodItem
{

	// déclarations des variables
		private $idSpecialPeriod;
    	private $idBusinessUnit;
    	private $exercise;
    	private $fromDate;
    	private $toDate;
    	private $type;
    	private $state;
    	private $name;
    	private $description;
    	private $method;
    	private $rate;
    
	// constructeur
	function specialperiodItem() {
			$this->idSpecialPeriod = new Model("idSpecialPeriod");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->exercise = new Model("exercise");
    		$this->fromDate = new Model("fromDate");
    		$this->toDate = new Model("toDate");
    		$this->type = new Model("type");
    		$this->state = new Model("state");
    		$this->name = new Model("name");
    		$this->description = new Model("description");
    		$this->method = new Model("method");
    		$this->rate = new Model("rate");
    	}

	// déclarations des fonctions get
		function getIdSpecialPeriod(){
		return $this->idSpecialPeriod->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getExercise(){
		return $this->exercise->getValue();
	}	
	
    	function getFromDate(){
		return $this->fromDate->getValue();
	}	
	
    	function getToDate(){
		return $this->toDate->getValue();
	}	
	
    	function getType(){
		return $this->type->getValue();
	}	
	
    	function getState(){
		return $this->state->getValue();
	}	
	
    	function getName(){
		return $this->name->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getMethod(){
		return $this->method->getValue();
	}	
	
    	function getRate(){
		return $this->rate->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdSpecialPeriod($idSpecialPeriod){
	 		$this->idSpecialPeriod->setValue($idSpecialPeriod);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setExercise($exercise){
	 		$this->exercise->setValue($exercise);
	 	}	
	
    	function setFromDate($fromDate){
	 		$this->fromDate->setValue($fromDate);
	 	}	
	
    	function setToDate($toDate){
	 		$this->toDate->setValue($toDate);
	 	}	
	
    	function setType($type){
	 		$this->type->setValue(substr($type, 0, 45));
	 	}	
	
    	function setState($state){
	 		$this->state->setValue(substr($state, 0, 45));
	 	}	
	
    	function setName($name){
	 		$this->name->setValue(substr($name, 0, 45));
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 255));
	 	}	
	
    	function setMethod($method){
	 		$this->method->setValue($method);
	 	}	
	
    	function setRate($rate){
	 		$this->rate->setValue($rate);
	 	}	
	
        
    function isNotNullable() {
			    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->exercise->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->fromDate->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->toDate->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->type->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->state->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->name->getValue())) {
				return false;
			}
			
		    		    		 
			if (is_null($this->method->getValue())) {
				return false;
			}
			
		    		        return true;
	}


}
?>
