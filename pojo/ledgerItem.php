<?php

require_once('d:\\www\\pojo\\model.php');

class ledgerItem
{

	// déclarations des variables
		private $idBusinessUnit;
    	private $ledgerName;
    	private $exercise;
    	private $ownerBusinessUnit;
    	private $state;
    	private $currencyCode;
    	private $creationDate;
    	private $lastModified;
    	private $closeDate;
    	private $description;
    	private $comments;
    	private $totalDebit;
    	private $startDate;
    	private $endDate;
    	private $ownerModule;
    	private $ownerModuleFunction;
    
	// constructeur
	function ledgerItem() {
			$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->ledgerName = new Model("ledgerName");
    		$this->exercise = new Model("exercise");
    		$this->ownerBusinessUnit = new Model("ownerBusinessUnit");
    		$this->state = new Model("state");
    		$this->currencyCode = new Model("currencyCode");
    		$this->creationDate = new Model("creationDate");
    		$this->lastModified = new Model("lastModified");
    		$this->closeDate = new Model("closeDate");
    		$this->description = new Model("description");
    		$this->comments = new Model("comments");
    		$this->totalDebit = new Model("totalDebit");
    		$this->startDate = new Model("startDate");
    		$this->endDate = new Model("endDate");
    		$this->ownerModule = new Model("ownerModule");
    		$this->ownerModuleFunction = new Model("ownerModuleFunction");
    	}

	// déclarations des fonctions get
		function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getLedgerName(){
		return $this->ledgerName->getValue();
	}	
	
    	function getExercise(){
		return $this->exercise->getValue();
	}	
	
    	function getOwnerBusinessUnit(){
		return $this->ownerBusinessUnit->getValue();
	}	
	
    	function getState(){
		return $this->state->getValue();
	}	
	
    	function getCurrencyCode(){
		return $this->currencyCode->getValue();
	}	
	
    	function getCreationDate(){
		return $this->creationDate->getValue();
	}	
	
    	function getLastModified(){
		return $this->lastModified->getValue();
	}	
	
    	function getCloseDate(){
		return $this->closeDate->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getComments(){
		return $this->comments->getValue();
	}	
	
    	function getTotalDebit(){
		return $this->totalDebit->getValue();
	}	
	
    	function getStartDate(){
		return $this->startDate->getValue();
	}	
	
    	function getEndDate(){
		return $this->endDate->getValue();
	}	
	
    	function getOwnerModule(){
		return $this->ownerModule->getValue();
	}	
	
    	function getOwnerModuleFunction(){
		return $this->ownerModuleFunction->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setLedgerName($ledgerName){
	 		$this->ledgerName->setValue(substr($ledgerName, 0, 45));
	 	}	
	
    	function setExercise($exercise){
	 		$this->exercise->setValue($exercise);
	 	}	
	
    	function setOwnerBusinessUnit($ownerBusinessUnit){
	 		$this->ownerBusinessUnit->setValue($ownerBusinessUnit);
	 	}	
	
    	function setState($state){
	 		$this->state->setValue($state);
	 	}	
	
    	function setCurrencyCode($currencyCode){
	 		$this->currencyCode->setValue(substr($currencyCode, 0, 10));
	 	}	
	
    	function setCreationDate($creationDate){
	 		$this->creationDate->setValue($creationDate);
	 	}	
	
    	function setLastModified($lastModified){
	 		$this->lastModified->setValue($lastModified);
	 	}	
	
    	function setCloseDate($closeDate){
	 		$this->closeDate->setValue($closeDate);
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 4000));
	 	}	
	
    	function setComments($comments){
	 		$this->comments->setValue(substr($comments, 0, 4000));
	 	}	
	
    	function setTotalDebit($totalDebit){
	 		$this->totalDebit->setValue($totalDebit);
	 	}	
	
    	function setStartDate($startDate){
	 		$this->startDate->setValue($startDate);
	 	}	
	
    	function setEndDate($endDate){
	 		$this->endDate->setValue($endDate);
	 	}	
	
    	function setOwnerModule($ownerModule){
	 		$this->ownerModule->setValue(substr($ownerModule, 0, 45));
	 	}	
	
    	function setOwnerModuleFunction($ownerModuleFunction){
	 		$this->ownerModuleFunction->setValue(substr($ownerModuleFunction, 0, 45));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->ledgerName->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->exercise->getValue())) {
				return false;
			}
			
		    		    		    		    		    		    		    		    		    		    		    		    		 
			if (is_null($this->ownerModule->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->ownerModuleFunction->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
