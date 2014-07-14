<?php

require_once('d:\\www\\pojo\\model.php');

class paymentlineItem
{

	// déclarations des variables
		private $paymentName;
    	private $companyId;
    	private $lineNumber;
    	private $invoiceName;
    	private $description;
    	private $currencyCode;
    	private $amount;
    	private $payOff;
    	private $payOffAmount;
    	private $customerId;
    
	// constructeur
	function paymentlineItem() {
			$this->paymentName = new Model("paymentName");
    		$this->companyId = new Model("companyId");
    		$this->lineNumber = new Model("lineNumber");
    		$this->invoiceName = new Model("invoiceName");
    		$this->description = new Model("description");
    		$this->currencyCode = new Model("currencyCode");
    		$this->amount = new Model("amount");
    		$this->payOff = new Model("payOff");
    		$this->payOffAmount = new Model("payOffAmount");
    		$this->customerId = new Model("customerId");
    	}

	// déclarations des fonctions get
		function getPaymentName(){
		return $this->paymentName->getValue();
	}	
	
    	function getCompanyId(){
		return $this->companyId->getValue();
	}	
	
    	function getLineNumber(){
		return $this->lineNumber->getValue();
	}	
	
    	function getInvoiceName(){
		return $this->invoiceName->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getCurrencyCode(){
		return $this->currencyCode->getValue();
	}	
	
    	function getAmount(){
		return $this->amount->getValue();
	}	
	
    	function getPayOff(){
		return $this->payOff->getValue();
	}	
	
    	function getPayOffAmount(){
		return $this->payOffAmount->getValue();
	}	
	
    	function getCustomerId(){
		return $this->customerId->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setPaymentName($paymentName){
	 		$this->paymentName->setValue(substr($paymentName, 0, 30));
	 	}	
	
    	function setCompanyId($companyId){
	 		$this->companyId->setValue($companyId);
	 	}	
	
    	function setLineNumber($lineNumber){
	 		$this->lineNumber->setValue($lineNumber);
	 	}	
	
    	function setInvoiceName($invoiceName){
	 		$this->invoiceName->setValue(substr($invoiceName, 0, 30));
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 4000));
	 	}	
	
    	function setCurrencyCode($currencyCode){
	 		$this->currencyCode->setValue(substr($currencyCode, 0, 10));
	 	}	
	
    	function setAmount($amount){
	 		$this->amount->setValue($amount);
	 	}	
	
    	function setPayOff($payOff){
	 		$this->payOff->setValue($payOff);
	 	}	
	
    	function setPayOffAmount($payOffAmount){
	 		$this->payOffAmount->setValue($payOffAmount);
	 	}	
	
    	function setCustomerId($customerId){
	 		$this->customerId->setValue($customerId);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->paymentName->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->companyId->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->lineNumber->getValue())) {
				return false;
			}
			
		    		    		    		    		    		 
			if (is_null($this->payOff->getValue())) {
				return false;
			}
			
		    		    		        return true;
	}


}
?>
