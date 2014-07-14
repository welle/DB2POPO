<?php

require_once('d:\\www\\pojo\\model.php');

class invoiceItem
{

	// déclarations des variables
		private $invoiceName;
    	private $companyId;
    	private $invoiceExercise;
    	private $ownerModule;
    	private $ownerModuleFunction;
    	private $startDate;
    	private $closingDate;
    	private $deadlineDate;
    	private $expectedDate;
    	private $state;
    	private $subState;
    	private $description;
    	private $comments;
    	private $customerRef;
    	private $customerId;
    	private $businessUnitId;
    	private $invoiceAddressId;
    	private $invContactId;
    	private $invContactAddressId;
    	private $deliveryAddressId;
    	private $delContactId;
    	private $delContactAddressId;
    	private $businessContact;
    	private $technicalContact;
    	private $defaultTaxCode;
    	private $vatIncluded;
    	private $currencyCode;
    	private $priceInCurrency;
    	private $priceInCompanyCurrency;
    	private $vatAmountInCurrency;
    	private $vatAmountInCompanyCurrency;
    	private $original;
    	private $lastReminder;
    	private $alreadyPaidAmount;
    	private $flgManualDeadline;
    	private $paymentAccount;
    	private $reference;
    	private $vatPeriod;
    	private $accountExercise;
    	private $invoiceType;
    	private $jobNumber;
    	private $thirdPartyBank;
    	private $format;
    	private $parentInvoice;
    
	// constructeur
	function invoiceItem() {
			$this->invoiceName = new Model("invoiceName");
    		$this->companyId = new Model("companyId");
    		$this->invoiceExercise = new Model("invoiceExercise");
    		$this->ownerModule = new Model("ownerModule");
    		$this->ownerModuleFunction = new Model("ownerModuleFunction");
    		$this->startDate = new Model("startDate");
    		$this->closingDate = new Model("closingDate");
    		$this->deadlineDate = new Model("deadlineDate");
    		$this->expectedDate = new Model("expectedDate");
    		$this->state = new Model("state");
    		$this->subState = new Model("subState");
    		$this->description = new Model("description");
    		$this->comments = new Model("comments");
    		$this->customerRef = new Model("customerRef");
    		$this->customerId = new Model("customerId");
    		$this->businessUnitId = new Model("businessUnitId");
    		$this->invoiceAddressId = new Model("invoiceAddressId");
    		$this->invContactId = new Model("invContactId");
    		$this->invContactAddressId = new Model("invContactAddressId");
    		$this->deliveryAddressId = new Model("deliveryAddressId");
    		$this->delContactId = new Model("delContactId");
    		$this->delContactAddressId = new Model("delContactAddressId");
    		$this->businessContact = new Model("businessContact");
    		$this->technicalContact = new Model("technicalContact");
    		$this->defaultTaxCode = new Model("defaultTaxCode");
    		$this->vatIncluded = new Model("vatIncluded");
    		$this->currencyCode = new Model("currencyCode");
    		$this->priceInCurrency = new Model("priceInCurrency");
    		$this->priceInCompanyCurrency = new Model("priceInCompanyCurrency");
    		$this->vatAmountInCurrency = new Model("vatAmountInCurrency");
    		$this->vatAmountInCompanyCurrency = new Model("vatAmountInCompanyCurrency");
    		$this->original = new Model("original");
    		$this->lastReminder = new Model("lastReminder");
    		$this->alreadyPaidAmount = new Model("alreadyPaidAmount");
    		$this->flgManualDeadline = new Model("flgManualDeadline");
    		$this->paymentAccount = new Model("paymentAccount");
    		$this->reference = new Model("reference");
    		$this->vatPeriod = new Model("vatPeriod");
    		$this->accountExercise = new Model("accountExercise");
    		$this->invoiceType = new Model("invoiceType");
    		$this->jobNumber = new Model("jobNumber");
    		$this->thirdPartyBank = new Model("thirdPartyBank");
    		$this->format = new Model("format");
    		$this->parentInvoice = new Model("parentInvoice");
    	}

	// déclarations des fonctions get
		function getInvoiceName(){
		return $this->invoiceName->getValue();
	}	
	
    	function getCompanyId(){
		return $this->companyId->getValue();
	}	
	
    	function getInvoiceExercise(){
		return $this->invoiceExercise->getValue();
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
	
    	function getDeadlineDate(){
		return $this->deadlineDate->getValue();
	}	
	
    	function getExpectedDate(){
		return $this->expectedDate->getValue();
	}	
	
    	function getState(){
		return $this->state->getValue();
	}	
	
    	function getSubState(){
		return $this->subState->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getComments(){
		return $this->comments->getValue();
	}	
	
    	function getCustomerRef(){
		return $this->customerRef->getValue();
	}	
	
    	function getCustomerId(){
		return $this->customerId->getValue();
	}	
	
    	function getBusinessUnitId(){
		return $this->businessUnitId->getValue();
	}	
	
    	function getInvoiceAddressId(){
		return $this->invoiceAddressId->getValue();
	}	
	
    	function getInvContactId(){
		return $this->invContactId->getValue();
	}	
	
    	function getInvContactAddressId(){
		return $this->invContactAddressId->getValue();
	}	
	
    	function getDeliveryAddressId(){
		return $this->deliveryAddressId->getValue();
	}	
	
    	function getDelContactId(){
		return $this->delContactId->getValue();
	}	
	
    	function getDelContactAddressId(){
		return $this->delContactAddressId->getValue();
	}	
	
    	function getBusinessContact(){
		return $this->businessContact->getValue();
	}	
	
    	function getTechnicalContact(){
		return $this->technicalContact->getValue();
	}	
	
    	function getDefaultTaxCode(){
		return $this->defaultTaxCode->getValue();
	}	
	
    	function getVatIncluded(){
		return $this->vatIncluded->getValue();
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
	
    	function getVatAmountInCurrency(){
		return $this->vatAmountInCurrency->getValue();
	}	
	
    	function getVatAmountInCompanyCurrency(){
		return $this->vatAmountInCompanyCurrency->getValue();
	}	
	
    	function getOriginal(){
		return $this->original->getValue();
	}	
	
    	function getLastReminder(){
		return $this->lastReminder->getValue();
	}	
	
    	function getAlreadyPaidAmount(){
		return $this->alreadyPaidAmount->getValue();
	}	
	
    	function getFlgManualDeadline(){
		return $this->flgManualDeadline->getValue();
	}	
	
    	function getPaymentAccount(){
		return $this->paymentAccount->getValue();
	}	
	
    	function getReference(){
		return $this->reference->getValue();
	}	
	
    	function getVatPeriod(){
		return $this->vatPeriod->getValue();
	}	
	
    	function getAccountExercise(){
		return $this->accountExercise->getValue();
	}	
	
    	function getInvoiceType(){
		return $this->invoiceType->getValue();
	}	
	
    	function getJobNumber(){
		return $this->jobNumber->getValue();
	}	
	
    	function getThirdPartyBank(){
		return $this->thirdPartyBank->getValue();
	}	
	
    	function getFormat(){
		return $this->format->getValue();
	}	
	
    	function getParentInvoice(){
		return $this->parentInvoice->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setInvoiceName($invoiceName){
	 		$this->invoiceName->setValue(substr($invoiceName, 0, 30));
	 	}	
	
    	function setCompanyId($companyId){
	 		$this->companyId->setValue($companyId);
	 	}	
	
    	function setInvoiceExercise($invoiceExercise){
	 		$this->invoiceExercise->setValue($invoiceExercise);
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
	
    	function setDeadlineDate($deadlineDate){
	 		$this->deadlineDate->setValue($deadlineDate);
	 	}	
	
    	function setExpectedDate($expectedDate){
	 		$this->expectedDate->setValue($expectedDate);
	 	}	
	
    	function setState($state){
	 		$this->state->setValue($state);
	 	}	
	
    	function setSubState($subState){
	 		$this->subState->setValue($subState);
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 4000));
	 	}	
	
    	function setComments($comments){
	 		$this->comments->setValue(substr($comments, 0, 4000));
	 	}	
	
    	function setCustomerRef($customerRef){
	 		$this->customerRef->setValue(substr($customerRef, 0, 45));
	 	}	
	
    	function setCustomerId($customerId){
	 		$this->customerId->setValue($customerId);
	 	}	
	
    	function setBusinessUnitId($businessUnitId){
	 		$this->businessUnitId->setValue($businessUnitId);
	 	}	
	
    	function setInvoiceAddressId($invoiceAddressId){
	 		$this->invoiceAddressId->setValue($invoiceAddressId);
	 	}	
	
    	function setInvContactId($invContactId){
	 		$this->invContactId->setValue($invContactId);
	 	}	
	
    	function setInvContactAddressId($invContactAddressId){
	 		$this->invContactAddressId->setValue($invContactAddressId);
	 	}	
	
    	function setDeliveryAddressId($deliveryAddressId){
	 		$this->deliveryAddressId->setValue($deliveryAddressId);
	 	}	
	
    	function setDelContactId($delContactId){
	 		$this->delContactId->setValue($delContactId);
	 	}	
	
    	function setDelContactAddressId($delContactAddressId){
	 		$this->delContactAddressId->setValue($delContactAddressId);
	 	}	
	
    	function setBusinessContact($businessContact){
	 		$this->businessContact->setValue(substr($businessContact, 0, 30));
	 	}	
	
    	function setTechnicalContact($technicalContact){
	 		$this->technicalContact->setValue(substr($technicalContact, 0, 30));
	 	}	
	
    	function setDefaultTaxCode($defaultTaxCode){
	 		$this->defaultTaxCode->setValue(substr($defaultTaxCode, 0, 5));
	 	}	
	
    	function setVatIncluded($vatIncluded){
	 		$this->vatIncluded->setValue($vatIncluded);
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
	
    	function setVatAmountInCurrency($vatAmountInCurrency){
	 		$this->vatAmountInCurrency->setValue($vatAmountInCurrency);
	 	}	
	
    	function setVatAmountInCompanyCurrency($vatAmountInCompanyCurrency){
	 		$this->vatAmountInCompanyCurrency->setValue($vatAmountInCompanyCurrency);
	 	}	
	
    	function setOriginal($original){
	 		$this->original->setValue(substr($original, 0, 255));
	 	}	
	
    	function setLastReminder($lastReminder){
	 		$this->lastReminder->setValue($lastReminder);
	 	}	
	
    	function setAlreadyPaidAmount($alreadyPaidAmount){
	 		$this->alreadyPaidAmount->setValue($alreadyPaidAmount);
	 	}	
	
    	function setFlgManualDeadline($flgManualDeadline){
	 		$this->flgManualDeadline->setValue($flgManualDeadline);
	 	}	
	
    	function setPaymentAccount($paymentAccount){
	 		$this->paymentAccount->setValue(substr($paymentAccount, 0, 20));
	 	}	
	
    	function setReference($reference){
	 		$this->reference->setValue(substr($reference, 0, 45));
	 	}	
	
    	function setVatPeriod($vatPeriod){
	 		$this->vatPeriod->setValue($vatPeriod);
	 	}	
	
    	function setAccountExercise($accountExercise){
	 		$this->accountExercise->setValue($accountExercise);
	 	}	
	
    	function setInvoiceType($invoiceType){
	 		$this->invoiceType->setValue($invoiceType);
	 	}	
	
    	function setJobNumber($jobNumber){
	 		$this->jobNumber->setValue(substr($jobNumber, 0, 45));
	 	}	
	
    	function setThirdPartyBank($thirdPartyBank){
	 		$this->thirdPartyBank->setValue($thirdPartyBank);
	 	}	
	
    	function setFormat($format){
	 		$this->format->setValue(substr($format, 0, 10));
	 	}	
	
    	function setParentInvoice($parentInvoice){
	 		$this->parentInvoice->setValue(substr($parentInvoice, 0, 30));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->invoiceName->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->companyId->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->invoiceExercise->getValue())) {
				return false;
			}
			
		    		    		    		 
			if (is_null($this->startDate->getValue())) {
				return false;
			}
			
		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		 
			if (is_null($this->lastReminder->getValue())) {
				return false;
			}
			
		    		    		    		    		    		    		 
			if (is_null($this->accountExercise->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->invoiceType->getValue())) {
				return false;
			}
			
		    		    		    		    		        return true;
	}


}
?>
