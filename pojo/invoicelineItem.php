<?php

require_once('d:\\www\\pojo\\model.php');

class invoicelineItem
{

	// déclarations des variables
		private $invoiceName;
    	private $companyId;
    	private $lineNumber;
    	private $sequenceNumber;
    	private $state;
    	private $subState;
    	private $lineDate;
    	private $description;
    	private $comments;
    	private $productReference;
    	private $productAccount;
    	private $externalReference;
    	private $quantity1;
    	private $quantity2;
    	private $quantity3;
    	private $currencyCode;
    	private $exchangeRate;
    	private $unitPrice;
    	private $price;
    	private $taxCode;
    	private $manualTaxAmount;
    	private $catalogId;
    	private $articleId;
    	private $jobNumber;
    
	// constructeur
	function invoicelineItem() {
			$this->invoiceName = new Model("invoiceName");
    		$this->companyId = new Model("companyId");
    		$this->lineNumber = new Model("lineNumber");
    		$this->sequenceNumber = new Model("sequenceNumber");
    		$this->state = new Model("state");
    		$this->subState = new Model("subState");
    		$this->lineDate = new Model("lineDate");
    		$this->description = new Model("description");
    		$this->comments = new Model("comments");
    		$this->productReference = new Model("productReference");
    		$this->productAccount = new Model("productAccount");
    		$this->externalReference = new Model("externalReference");
    		$this->quantity1 = new Model("quantity1");
    		$this->quantity2 = new Model("quantity2");
    		$this->quantity3 = new Model("quantity3");
    		$this->currencyCode = new Model("currencyCode");
    		$this->exchangeRate = new Model("exchangeRate");
    		$this->unitPrice = new Model("unitPrice");
    		$this->price = new Model("price");
    		$this->taxCode = new Model("taxCode");
    		$this->manualTaxAmount = new Model("manualTaxAmount");
    		$this->catalogId = new Model("catalogId");
    		$this->articleId = new Model("articleId");
    		$this->jobNumber = new Model("jobNumber");
    	}

	// déclarations des fonctions get
		function getInvoiceName(){
		return $this->invoiceName->getValue();
	}	
	
    	function getCompanyId(){
		return $this->companyId->getValue();
	}	
	
    	function getLineNumber(){
		return $this->lineNumber->getValue();
	}	
	
    	function getSequenceNumber(){
		return $this->sequenceNumber->getValue();
	}	
	
    	function getState(){
		return $this->state->getValue();
	}	
	
    	function getSubState(){
		return $this->subState->getValue();
	}	
	
    	function getLineDate(){
		return $this->lineDate->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getComments(){
		return $this->comments->getValue();
	}	
	
    	function getProductReference(){
		return $this->productReference->getValue();
	}	
	
    	function getProductAccount(){
		return $this->productAccount->getValue();
	}	
	
    	function getExternalReference(){
		return $this->externalReference->getValue();
	}	
	
    	function getquantity1(){
		return $this->quantity1->getValue();
	}	
	
    	function getquantity2(){
		return $this->quantity2->getValue();
	}	
	
    	function getquantity3(){
		return $this->quantity3->getValue();
	}	
	
    	function getCurrencyCode(){
		return $this->currencyCode->getValue();
	}	
	
    	function getExchangeRate(){
		return $this->exchangeRate->getValue();
	}	
	
    	function getUnitPrice(){
		return $this->unitPrice->getValue();
	}	
	
    	function getPrice(){
		return $this->price->getValue();
	}	
	
    	function getTaxCode(){
		return $this->taxCode->getValue();
	}	
	
    	function getManualTaxAmount(){
		return $this->manualTaxAmount->getValue();
	}	
	
    	function getCatalogId(){
		return $this->catalogId->getValue();
	}	
	
    	function getArticleId(){
		return $this->articleId->getValue();
	}	
	
    	function getJobNumber(){
		return $this->jobNumber->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setInvoiceName($invoiceName){
	 		$this->invoiceName->setValue(substr($invoiceName, 0, 30));
	 	}	
	
    	function setCompanyId($companyId){
	 		$this->companyId->setValue($companyId);
	 	}	
	
    	function setLineNumber($lineNumber){
	 		$this->lineNumber->setValue($lineNumber);
	 	}	
	
    	function setSequenceNumber($sequenceNumber){
	 		$this->sequenceNumber->setValue($sequenceNumber);
	 	}	
	
    	function setState($state){
	 		$this->state->setValue($state);
	 	}	
	
    	function setSubState($subState){
	 		$this->subState->setValue($subState);
	 	}	
	
    	function setLineDate($lineDate){
	 		$this->lineDate->setValue($lineDate);
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 4000));
	 	}	
	
    	function setComments($comments){
	 		$this->comments->setValue(substr($comments, 0, 4000));
	 	}	
	
    	function setProductReference($productReference){
	 		$this->productReference->setValue(substr($productReference, 0, 45));
	 	}	
	
    	function setProductAccount($productAccount){
	 		$this->productAccount->setValue(substr($productAccount, 0, 20));
	 	}	
	
    	function setExternalReference($externalReference){
	 		$this->externalReference->setValue(substr($externalReference, 0, 45));
	 	}	
	
    	function setquantity1($quantity1){
	 		$this->quantity1->setValue($quantity1);
	 	}	
	
    	function setquantity2($quantity2){
	 		$this->quantity2->setValue($quantity2);
	 	}	
	
    	function setquantity3($quantity3){
	 		$this->quantity3->setValue($quantity3);
	 	}	
	
    	function setCurrencyCode($currencyCode){
	 		$this->currencyCode->setValue(substr($currencyCode, 0, 10));
	 	}	
	
    	function setExchangeRate($exchangeRate){
	 		$this->exchangeRate->setValue($exchangeRate);
	 	}	
	
    	function setUnitPrice($unitPrice){
	 		$this->unitPrice->setValue($unitPrice);
	 	}	
	
    	function setPrice($price){
	 		$this->price->setValue($price);
	 	}	
	
    	function setTaxCode($taxCode){
	 		$this->taxCode->setValue(substr($taxCode, 0, 10));
	 	}	
	
    	function setManualTaxAmount($manualTaxAmount){
	 		$this->manualTaxAmount->setValue($manualTaxAmount);
	 	}	
	
    	function setCatalogId($catalogId){
	 		$this->catalogId->setValue($catalogId);
	 	}	
	
    	function setArticleId($articleId){
	 		$this->articleId->setValue($articleId);
	 	}	
	
    	function setJobNumber($jobNumber){
	 		$this->jobNumber->setValue(substr($jobNumber, 0, 45));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->invoiceName->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->companyId->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->lineNumber->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->sequenceNumber->getValue())) {
				return false;
			}
			
		    		    		    		 
			if (is_null($this->lineDate->getValue())) {
				return false;
			}
			
		    		    		    		    		    		    		 
			if (is_null($this->quantity1->getValue())) {
				return false;
			}
			
		    		    		    		    		    		 
			if (is_null($this->unitPrice->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->price->getValue())) {
				return false;
			}
			
		    		    		    		    		    		        return true;
	}


}
?>
