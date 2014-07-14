<?php

require_once('d:\\www\\pojo\\model.php');

class invoicelogItem
{

	// déclarations des variables
		private $invoiceName;
    	private $companyId;
    	private $logNumber;
    	private $lineNumber;
    	private $batchNumber;
    	private $state;
    	private $subState;
    	private $timeStamp;
    	private $startDate;
    	private $expectedDate;
    	private $fieldName;
    	private $oldValue;
    	private $newValue;
    
	// constructeur
	function invoicelogItem() {
			$this->invoiceName = new Model("invoiceName");
    		$this->companyId = new Model("companyId");
    		$this->logNumber = new Model("logNumber");
    		$this->lineNumber = new Model("lineNumber");
    		$this->batchNumber = new Model("batchNumber");
    		$this->state = new Model("state");
    		$this->subState = new Model("subState");
    		$this->timeStamp = new Model("timeStamp");
    		$this->startDate = new Model("startDate");
    		$this->expectedDate = new Model("expectedDate");
    		$this->fieldName = new Model("fieldName");
    		$this->oldValue = new Model("oldValue");
    		$this->newValue = new Model("newValue");
    	}

	// déclarations des fonctions get
		function getInvoiceName(){
		return $this->invoiceName->getValue();
	}	
	
    	function getCompanyId(){
		return $this->companyId->getValue();
	}	
	
    	function getLogNumber(){
		return $this->logNumber->getValue();
	}	
	
    	function getLineNumber(){
		return $this->lineNumber->getValue();
	}	
	
    	function getBatchNumber(){
		return $this->batchNumber->getValue();
	}	
	
    	function getState(){
		return $this->state->getValue();
	}	
	
    	function getSubState(){
		return $this->subState->getValue();
	}	
	
    	function getTimeStamp(){
		return $this->timeStamp->getValue();
	}	
	
    	function getStartDate(){
		return $this->startDate->getValue();
	}	
	
    	function getExpectedDate(){
		return $this->expectedDate->getValue();
	}	
	
    	function getFieldName(){
		return $this->fieldName->getValue();
	}	
	
    	function getOldValue(){
		return $this->oldValue->getValue();
	}	
	
    	function getNewValue(){
		return $this->newValue->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setInvoiceName($invoiceName){
	 		$this->invoiceName->setValue(substr($invoiceName, 0, 30));
	 	}	
	
    	function setCompanyId($companyId){
	 		$this->companyId->setValue($companyId);
	 	}	
	
    	function setLogNumber($logNumber){
	 		$this->logNumber->setValue($logNumber);
	 	}	
	
    	function setLineNumber($lineNumber){
	 		$this->lineNumber->setValue($lineNumber);
	 	}	
	
    	function setBatchNumber($batchNumber){
	 		$this->batchNumber->setValue(substr($batchNumber, 0, 30));
	 	}	
	
    	function setState($state){
	 		$this->state->setValue($state);
	 	}	
	
    	function setSubState($subState){
	 		$this->subState->setValue($subState);
	 	}	
	
    	function setTimeStamp($timeStamp){
	 		$this->timeStamp->setValue($timeStamp);
	 	}	
	
    	function setStartDate($startDate){
	 		$this->startDate->setValue($startDate);
	 	}	
	
    	function setExpectedDate($expectedDate){
	 		$this->expectedDate->setValue($expectedDate);
	 	}	
	
    	function setFieldName($fieldName){
	 		$this->fieldName->setValue(substr($fieldName, 0, 30));
	 	}	
	
    	function setOldValue($oldValue){
	 		$this->oldValue->setValue(substr($oldValue, 0, 30));
	 	}	
	
    	function setNewValue($newValue){
	 		$this->newValue->setValue(substr($newValue, 0, 30));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->invoiceName->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->companyId->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->logNumber->getValue())) {
				return false;
			}
			
		    		    		    		    		    		    		    		    		    		    		        return true;
	}


}
?>
