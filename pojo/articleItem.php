<?php

require_once('d:\\www\\pojo\\model.php');

class articleItem
{

	// déclarations des variables
		private $idArticle;
    	private $idCatalog;
    	private $code;
    	private $name;
    	private $description;
    	private $accountBusinessUnit;
    	private $accountExercise;
    	private $supplierAccount;
    	private $supplierVatCode;
    	private $supplierCurrency;
    	private $supplierAmount;
    	private $customerAccount;
    	private $customerVatCode;
    	private $customerCurrency;
    	private $customerAmount;
    	private $tagCategoryId;
    	private $genericIdArticle;
    	private $hasVariantFlag;
    
	// constructeur
	function articleItem() {
			$this->idArticle = new Model("idArticle");
    		$this->idCatalog = new Model("idCatalog");
    		$this->code = new Model("code");
    		$this->name = new Model("name");
    		$this->description = new Model("description");
    		$this->accountBusinessUnit = new Model("accountBusinessUnit");
    		$this->accountExercise = new Model("accountExercise");
    		$this->supplierAccount = new Model("supplierAccount");
    		$this->supplierVatCode = new Model("supplierVatCode");
    		$this->supplierCurrency = new Model("supplierCurrency");
    		$this->supplierAmount = new Model("supplierAmount");
    		$this->customerAccount = new Model("customerAccount");
    		$this->customerVatCode = new Model("customerVatCode");
    		$this->customerCurrency = new Model("customerCurrency");
    		$this->customerAmount = new Model("customerAmount");
    		$this->tagCategoryId = new Model("tagCategoryId");
    		$this->genericIdArticle = new Model("genericIdArticle");
    		$this->hasVariantFlag = new Model("hasVariantFlag");
    	}

	// déclarations des fonctions get
		function getIdArticle(){
		return $this->idArticle->getValue();
	}	
	
    	function getIdCatalog(){
		return $this->idCatalog->getValue();
	}	
	
    	function getCode(){
		return $this->code->getValue();
	}	
	
    	function getName(){
		return $this->name->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getAccountBusinessUnit(){
		return $this->accountBusinessUnit->getValue();
	}	
	
    	function getAccountExercise(){
		return $this->accountExercise->getValue();
	}	
	
    	function getSupplierAccount(){
		return $this->supplierAccount->getValue();
	}	
	
    	function getSupplierVatCode(){
		return $this->supplierVatCode->getValue();
	}	
	
    	function getSupplierCurrency(){
		return $this->supplierCurrency->getValue();
	}	
	
    	function getSupplierAmount(){
		return $this->supplierAmount->getValue();
	}	
	
    	function getCustomerAccount(){
		return $this->customerAccount->getValue();
	}	
	
    	function getCustomerVatCode(){
		return $this->customerVatCode->getValue();
	}	
	
    	function getCustomerCurrency(){
		return $this->customerCurrency->getValue();
	}	
	
    	function getCustomerAmount(){
		return $this->customerAmount->getValue();
	}	
	
    	function getTagCategoryId(){
		return $this->tagCategoryId->getValue();
	}	
	
    	function getGenericIdArticle(){
		return $this->genericIdArticle->getValue();
	}	
	
    	function getHasVariantFlag(){
		return $this->hasVariantFlag->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdArticle($idArticle){
	 		$this->idArticle->setValue($idArticle);
	 	}	
	
    	function setIdCatalog($idCatalog){
	 		$this->idCatalog->setValue($idCatalog);
	 	}	
	
    	function setCode($code){
	 		$this->code->setValue(substr($code, 0, 20));
	 	}	
	
    	function setName($name){
	 		$this->name->setValue(substr($name, 0, 45));
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 1000));
	 	}	
	
    	function setAccountBusinessUnit($accountBusinessUnit){
	 		$this->accountBusinessUnit->setValue($accountBusinessUnit);
	 	}	
	
    	function setAccountExercise($accountExercise){
	 		$this->accountExercise->setValue($accountExercise);
	 	}	
	
    	function setSupplierAccount($supplierAccount){
	 		$this->supplierAccount->setValue(substr($supplierAccount, 0, 20));
	 	}	
	
    	function setSupplierVatCode($supplierVatCode){
	 		$this->supplierVatCode->setValue(substr($supplierVatCode, 0, 10));
	 	}	
	
    	function setSupplierCurrency($supplierCurrency){
	 		$this->supplierCurrency->setValue(substr($supplierCurrency, 0, 10));
	 	}	
	
    	function setSupplierAmount($supplierAmount){
	 		$this->supplierAmount->setValue($supplierAmount);
	 	}	
	
    	function setCustomerAccount($customerAccount){
	 		$this->customerAccount->setValue(substr($customerAccount, 0, 20));
	 	}	
	
    	function setCustomerVatCode($customerVatCode){
	 		$this->customerVatCode->setValue(substr($customerVatCode, 0, 10));
	 	}	
	
    	function setCustomerCurrency($customerCurrency){
	 		$this->customerCurrency->setValue(substr($customerCurrency, 0, 10));
	 	}	
	
    	function setCustomerAmount($customerAmount){
	 		$this->customerAmount->setValue($customerAmount);
	 	}	
	
    	function setTagCategoryId($tagCategoryId){
	 		$this->tagCategoryId->setValue($tagCategoryId);
	 	}	
	
    	function setGenericIdArticle($genericIdArticle){
	 		$this->genericIdArticle->setValue($genericIdArticle);
	 	}	
	
    	function setHasVariantFlag($hasVariantFlag){
	 		$this->hasVariantFlag->setValue($hasVariantFlag);
	 	}	
	
        
    function isNotNullable() {
			    		 
			if (is_null($this->idCatalog->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->code->getValue())) {
				return false;
			}
			
		    		    		    		 
			if (is_null($this->accountBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->accountExercise->getValue())) {
				return false;
			}
			
		    		    		    		    		    		    		    		    		    		    		    		 
			if (is_null($this->hasVariantFlag->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
