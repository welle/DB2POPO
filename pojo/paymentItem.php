<?php

require_once('d:\\www\\pojo\\model.php');

class paymentItem
{

	// déclarations des variables
		private $paymentName;
    	private $companyId;
    	private $exercise;
    	private $ownerModule;
    	private $ownerModuleFunction;
    	private $startDate;
    	private $closingDate;
    	private $state;
    	private $subState;
    	private $logNumber;
    	private $description;
    	private $customerId;
    	private $payerRef;
    	private $accountExercise;
    	private $paymentAccount;
    	private $paymentContact;
    	private $paymentType;
    	private $currencyCode;
    	private $priceInCurrency;
    	private $priceInCompanyCurrency;
    	private $original;
    	private $vatPeriod;
    	private $flgIsBatch;
    
	// constructeur
	function paymentItem() {
			$this->paymentName = new Model("paymentName");
    		$this->companyId = new Model("companyId");
    		$this->exercise = new Model("exercise");
    		$this->ownerModule = new Model("ownerModule");
    		$this->ownerModuleFunction = new Model("ownerModuleFunction");
    		$this->startDate = new Model("startDate");
    		$this->closingDate = new Model("closingDate");
    		$this->state = new Model("state");
    		$this->subState = new Model("subState");
    		$this->logNumber = new Model("logNumber");
    		$this->description = new Model("description");
    		$this->customerId = new Model("customerId");
    		$this->payerRef = new Model("payerRef");
    		$this->accountExercise = new Model("accountExercise");
    		$this->paymentAccount = new Model("paymentAccount");
    		$this->paymentContact = new Model("paymentContact");
    		$this->paymentType = new Model("paymentType");
    		$this->currencyCode = new Model("currencyCode");
    		$this->priceInCurrency = new Model("priceInCurrency");
    		$this->priceInCompanyCurrency = new Model("priceInCompanyCurrency");
    		$this->original = new Model("original");
    		$this->vatPeriod = new Model("vatPeriod");
    		$this->flgIsBatch = new Model("flgIsBatch");
    	}

	// déclarations des fonctions get
		function getPaymentName(){
		return $this->paymentName->getValue();
	}	
	
    	function getCompanyId(){
		return $this->companyId->getValue();
	}	
	
    	function getExercise(){
		return $this->exercise->getValue();
	}	
	
    	function getOwnerModule(){
		return $this->ownerModule->getValue();
	}	
	
    	function getOwnerModuleFunction(){
		return $this->ownerModuleFunction->getValue();
	}	
	
    	function getStartDate(){
		return $this->startDate->getValue();
	}	
	
    	function getClosingDate(){
		return $this->closingDate->getValue();
	}	
	
    	function getState(){
		return $this->state->getValue();
	}	
	
    	function getSubState(){
		return $this->subState->getValue();
	}	
	
    	function getLogNumber(){
		return $this->logNumber->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getCustomerId(){
		return $this->customerId->getValue();
	}	
	
    	function getPayerRef(){
		return $this->payerRef->getValue();
	}	
	
    	function getAccountExercise(){
		return $this->accountExercise->getValue();
	}	
	
    	function getPaymentAccount(){
		return $this->paymentAccount->getValue();
	}	
	
    	function getPaymentContact(){
		return $this->paymentContact->getValue();
	}	
	
    	function getPaymentType(){
		return $this->paymentType->getValue();
	}	
	
    	function getCurrencyCode(){
		return $this->currencyCode->getValue();
	}	
	
    	function getPriceInCurrency(){
		return $this->priceInCurrency->getValue();
	}	
	
    	function getPriceInCompanyCurrency(){
		return $this->priceInCompanyCurrency->getValue();
	}	
	
    	function getOriginal(){
		return $this->original->getValue();
	}	
	
    	function getVatPeriod(){
		return $this->vatPeriod->getValue();
	}	
	
    	function getFlgIsBatch(){
		return $this->flgIsBatch->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setPaymentName($paymentName){
	 		$this->paymentName->setValue(substr($paymentName, 0, 30));
	 	}	
	
    	function setCompanyId($companyId){
	 		$this->companyId->setValue($companyId);
	 	}	
	
    	function setExercise($exercise){
	 		$this->exercise->setValue($exercise);
	 	}	
	
    	function setOwnerModule($ownerModule){
	 		$this->ownerModule->setValue(substr($ownerModule, 0, 45));
	 	}	
	
    	function setOwnerModuleFunction($ownerModuleFunction){
	 		$this->ownerModuleFunction->setValue(substr($ownerModuleFunction, 0, 45));
	 	}	
	
    	function setStartDate($startDate){
	 		$this->startDate->setValue($startDate);
	 	}	
	
    	function setClosingDate($closingDate){
	 		$this->closingDate->setValue($closingDate);
	 	}	
	
    	function setState($state){
	 		$this->state->setValue($state);
	 	}	
	
    	function setSubState($subState){
	 		$this->subState->setValue($subState);
	 	}	
	
    	function setLogNumber($logNumber){
	 		$this->logNumber->setValue($logNumber);
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 4000));
	 	}	
	
    	function setCustomerId($customerId){
	 		$this->customerId->setValue($customerId);
	 	}	
	
    	function setPayerRef($payerRef){
	 		$this->payerRef->setValue(substr($payerRef, 0, 45));
	 	}	
	
    	function setAccountExercise($accountExercise){
	 		$this->accountExercise->setValue($accountExercise);
	 	}	
	
    	function setPaymentAccount($paymentAccount){
	 		$this->paymentAccount->setValue(substr($paymentAccount, 0, 20));
	 	}	
	
    	function setPaymentContact($paymentContact){
	 		$this->paymentContact->setValue($paymentContact);
	 	}	
	
    	function setPaymentType($paymentType){
	 		$this->paymentType->setValue(substr($paymentType, 0, 2));
	 	}	
	
    	function setCurrencyCode($currencyCode){
	 		$this->currencyCode->setValue(substr($currencyCode, 0, 10));
	 	}	
	
    	function setPriceInCurrency($priceInCurrency){
	 		$this->priceInCurrency->setValue($priceInCurrency);
	 	}	
	
    	function setPriceInCompanyCurrency($priceInCompanyCurrency){
	 		$this->priceInCompanyCurrency->setValue($priceInCompanyCurrency);
	 	}	
	
    	function setOriginal($original){
	 		$this->original->setValue(substr($original, 0, 255));
	 	}	
	
    	function setVatPeriod($vatPeriod){
	 		$this->vatPeriod->setValue($vatPeriod);
	 	}	
	
    	function setFlgIsBatch($flgIsBatch){
	 		$this->flgIsBatch->setValue($flgIsBatch);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->paymentName->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->companyId->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->exercise->getValue())) {
				return false;
			}
			
		    		    		    		    		    		    		    		    		    		    		    		    		    		    		 
			if (is_null($this->paymentType->getValue())) {
				return false;
			}
			
		    		    		    		    		    		    		 
			if (is_null($this->flgIsBatch->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
