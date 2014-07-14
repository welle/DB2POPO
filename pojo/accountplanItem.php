<?php

require_once('d:\\www\\pojo\\model.php');

class accountplanItem
{

	// déclarations des variables
		private $number;
    	private $idBusinessUnit;
    	private $exercise;
    	private $sortNumber;
    	private $name;
    	private $description;
    	private $parentAccountNumber;
    	private $currencyCode;
    	private $status;
    	private $category;
    
	// constructeur
	function accountplanItem() {
			$this->number = new Model("number");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->exercise = new Model("exercise");
    		$this->sortNumber = new Model("sortNumber");
    		$this->name = new Model("name");
    		$this->description = new Model("description");
    		$this->parentAccountNumber = new Model("parentAccountNumber");
    		$this->currencyCode = new Model("currencyCode");
    		$this->status = new Model("status");
    		$this->category = new Model("category");
    	}

	// déclarations des fonctions get
		function getNumber(){
		return $this->number->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getExercise(){
		return $this->exercise->getValue();
	}	
	
    	function getSortNumber(){
		return $this->sortNumber->getValue();
	}	
	
    	function getName(){
		return $this->name->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getParentAccountNumber(){
		return $this->parentAccountNumber->getValue();
	}	
	
    	function getCurrencyCode(){
		return $this->currencyCode->getValue();
	}	
	
    	function getStatus(){
		return $this->status->getValue();
	}	
	
    	function getCategory(){
		return $this->category->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setNumber($number){
	 		$this->number->setValue(substr($number, 0, 20));
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setExercise($exercise){
	 		$this->exercise->setValue($exercise);
	 	}	
	
    	function setSortNumber($sortNumber){
	 		$this->sortNumber->setValue(substr($sortNumber, 0, 20));
	 	}	
	
    	function setName($name){
	 		$this->name->setValue(substr($name, 0, 45));
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 255));
	 	}	
	
    	function setParentAccountNumber($parentAccountNumber){
	 		$this->parentAccountNumber->setValue(substr($parentAccountNumber, 0, 20));
	 	}	
	
    	function setCurrencyCode($currencyCode){
	 		$this->currencyCode->setValue(substr($currencyCode, 0, 10));
	 	}	
	
    	function setStatus($status){
	 		$this->status->setValue(substr($status, 0, 45));
	 	}	
	
    	function setCategory($category){
	 		$this->category->setValue(substr($category, 0, 45));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->number->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->exercise->getValue())) {
				return false;
			}
			
		    		    		    		    		    		 
			if (is_null($this->currencyCode->getValue())) {
				return false;
			}
			
		    		    		        return true;
	}


}
?>
