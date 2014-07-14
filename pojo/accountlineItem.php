<?php

require_once('d:\\www\\pojo\\model.php');

class accountlineItem
{

	// déclarations des variables
		private $idBusinessUnit;
    	private $ledgerName;
    	private $exercise;
    	private $lineNumber;
    	private $subLineNumber;
    	private $debitCredit;
    	private $transactionDate;
    	private $jobNumber;
    	private $businessUnit;
    	private $account;
    	private $counterpartBU;
    	private $counterpartAccount;
    	private $accountExercise;
    	private $amount;
    	private $description;
    	private $reference;
    	private $vatCode;
    	private $vatIncluded;
    	private $vatRate;
    	private $draft;
    	private $state;
    	private $vatPeriod;
    	private $idStatement;
    
	// constructeur
	function accountlineItem() {
			$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->ledgerName = new Model("ledgerName");
    		$this->exercise = new Model("exercise");
    		$this->lineNumber = new Model("lineNumber");
    		$this->subLineNumber = new Model("subLineNumber");
    		$this->debitCredit = new Model("debitCredit");
    		$this->transactionDate = new Model("transactionDate");
    		$this->jobNumber = new Model("jobNumber");
    		$this->businessUnit = new Model("businessUnit");
    		$this->account = new Model("account");
    		$this->counterpartBU = new Model("counterpartBU");
    		$this->counterpartAccount = new Model("counterpartAccount");
    		$this->accountExercise = new Model("accountExercise");
    		$this->amount = new Model("amount");
    		$this->description = new Model("description");
    		$this->reference = new Model("reference");
    		$this->vatCode = new Model("vatCode");
    		$this->vatIncluded = new Model("vatIncluded");
    		$this->vatRate = new Model("vatRate");
    		$this->draft = new Model("draft");
    		$this->state = new Model("state");
    		$this->vatPeriod = new Model("vatPeriod");
    		$this->idStatement = new Model("idStatement");
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
	
    	function getLineNumber(){
		return $this->lineNumber->getValue();
	}	
	
    	function getSubLineNumber(){
		return $this->subLineNumber->getValue();
	}	
	
    	function getDebitCredit(){
		return $this->debitCredit->getValue();
	}	
	
    	function getTransactionDate(){
		return $this->transactionDate->getValue();
	}	
	
    	function getJobNumber(){
		return $this->jobNumber->getValue();
	}	
	
    	function getBusinessUnit(){
		return $this->businessUnit->getValue();
	}	
	
    	function getAccount(){
		return $this->account->getValue();
	}	
	
    	function getCounterpartBU(){
		return $this->counterpartBU->getValue();
	}	
	
    	function getCounterpartAccount(){
		return $this->counterpartAccount->getValue();
	}	
	
    	function getAccountExercise(){
		return $this->accountExercise->getValue();
	}	
	
    	function getAmount(){
		return $this->amount->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getReference(){
		return $this->reference->getValue();
	}	
	
    	function getVatCode(){
		return $this->vatCode->getValue();
	}	
	
    	function getVatIncluded(){
		return $this->vatIncluded->getValue();
	}	
	
    	function getVatRate(){
		return $this->vatRate->getValue();
	}	
	
    	function getDraft(){
		return $this->draft->getValue();
	}	
	
    	function getState(){
		return $this->state->getValue();
	}	
	
    	function getVatPeriod(){
		return $this->vatPeriod->getValue();
	}	
	
    	function getIdStatement(){
		return $this->idStatement->getValue();
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
	
    	function setLineNumber($lineNumber){
	 		$this->lineNumber->setValue($lineNumber);
	 	}	
	
    	function setSubLineNumber($subLineNumber){
	 		$this->subLineNumber->setValue($subLineNumber);
	 	}	
	
    	function setDebitCredit($debitCredit){
	 		$this->debitCredit->setValue($debitCredit);
	 	}	
	
    	function setTransactionDate($transactionDate){
	 		$this->transactionDate->setValue($transactionDate);
	 	}	
	
    	function setJobNumber($jobNumber){
	 		$this->jobNumber->setValue(substr($jobNumber, 0, 45));
	 	}	
	
    	function setBusinessUnit($businessUnit){
	 		$this->businessUnit->setValue($businessUnit);
	 	}	
	
    	function setAccount($account){
	 		$this->account->setValue(substr($account, 0, 20));
	 	}	
	
    	function setCounterpartBU($counterpartBU){
	 		$this->counterpartBU->setValue($counterpartBU);
	 	}	
	
    	function setCounterpartAccount($counterpartAccount){
	 		$this->counterpartAccount->setValue(substr($counterpartAccount, 0, 20));
	 	}	
	
    	function setAccountExercise($accountExercise){
	 		$this->accountExercise->setValue($accountExercise);
	 	}	
	
    	function setAmount($amount){
	 		$this->amount->setValue($amount);
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 4000));
	 	}	
	
    	function setReference($reference){
	 		$this->reference->setValue(substr($reference, 0, 45));
	 	}	
	
    	function setVatCode($vatCode){
	 		$this->vatCode->setValue(substr($vatCode, 0, 10));
	 	}	
	
    	function setVatIncluded($vatIncluded){
	 		$this->vatIncluded->setValue($vatIncluded);
	 	}	
	
    	function setVatRate($vatRate){
	 		$this->vatRate->setValue($vatRate);
	 	}	
	
    	function setDraft($draft){
	 		$this->draft->setValue($draft);
	 	}	
	
    	function setState($state){
	 		$this->state->setValue($state);
	 	}	
	
    	function setVatPeriod($vatPeriod){
	 		$this->vatPeriod->setValue($vatPeriod);
	 	}	
	
    	function setIdStatement($idStatement){
	 		$this->idStatement->setValue($idStatement);
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
			
		    		 
			if (is_null($this->lineNumber->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->subLineNumber->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->debitCredit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->transactionDate->getValue())) {
				return false;
			}
			
		    		    		 
			if (is_null($this->businessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->account->getValue())) {
				return false;
			}
			
		    		    		    		 
			if (is_null($this->accountExercise->getValue())) {
				return false;
			}
			
		    		    		    		    		    		    		    		    		    		    		        return true;
	}


}
?>
