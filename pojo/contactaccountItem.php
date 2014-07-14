<?php

require_once('d:\\www\\pojo\\model.php');

class contactaccountItem
{

	// déclarations des variables
		private $idContact;
    	private $idBusinessUnit;
    	private $idAccount;
    	private $validityFrom;
    	private $validityTo;
    	private $name;
    	private $description;
    	private $sortCode;
    	private $accountNumber;
    	private $iban;
    	private $bic;
    	private $swift;
    	private $paymentType;
    	private $paymentForm;
    
	// constructeur
	function contactaccountItem() {
			$this->idContact = new Model("idContact");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->idAccount = new Model("idAccount");
    		$this->validityFrom = new Model("validityFrom");
    		$this->validityTo = new Model("validityTo");
    		$this->name = new Model("name");
    		$this->description = new Model("description");
    		$this->sortCode = new Model("sortCode");
    		$this->accountNumber = new Model("accountNumber");
    		$this->iban = new Model("iban");
    		$this->bic = new Model("bic");
    		$this->swift = new Model("swift");
    		$this->paymentType = new Model("paymentType");
    		$this->paymentForm = new Model("paymentForm");
    	}

	// déclarations des fonctions get
		function getIdContact(){
		return $this->idContact->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getIdAccount(){
		return $this->idAccount->getValue();
	}	
	
    	function getValidityFrom(){
		return $this->validityFrom->getValue();
	}	
	
    	function getValidityTo(){
		return $this->validityTo->getValue();
	}	
	
    	function getName(){
		return $this->name->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getSortCode(){
		return $this->sortCode->getValue();
	}	
	
    	function getAccountNumber(){
		return $this->accountNumber->getValue();
	}	
	
    	function getIban(){
		return $this->iban->getValue();
	}	
	
    	function getBic(){
		return $this->bic->getValue();
	}	
	
    	function getSwift(){
		return $this->swift->getValue();
	}	
	
    	function getPaymentType(){
		return $this->paymentType->getValue();
	}	
	
    	function getPaymentForm(){
		return $this->paymentForm->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdContact($idContact){
	 		$this->idContact->setValue($idContact);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setIdAccount($idAccount){
	 		$this->idAccount->setValue($idAccount);
	 	}	
	
    	function setValidityFrom($validityFrom){
	 		$this->validityFrom->setValue($validityFrom);
	 	}	
	
    	function setValidityTo($validityTo){
	 		$this->validityTo->setValue($validityTo);
	 	}	
	
    	function setName($name){
	 		$this->name->setValue(substr($name, 0, 45));
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 250));
	 	}	
	
    	function setSortCode($sortCode){
	 		$this->sortCode->setValue(substr($sortCode, 0, 45));
	 	}	
	
    	function setAccountNumber($accountNumber){
	 		$this->accountNumber->setValue(substr($accountNumber, 0, 45));
	 	}	
	
    	function setIban($iban){
	 		$this->iban->setValue(substr($iban, 0, 255));
	 	}	
	
    	function setBic($bic){
	 		$this->bic->setValue(substr($bic, 0, 45));
	 	}	
	
    	function setSwift($swift){
	 		$this->swift->setValue(substr($swift, 0, 255));
	 	}	
	
    	function setPaymentType($paymentType){
	 		$this->paymentType->setValue($paymentType);
	 	}	
	
    	function setPaymentForm($paymentForm){
	 		$this->paymentForm->setValue($paymentForm);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idContact->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idAccount->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->validityFrom->getValue())) {
				return false;
			}
			
		    		    		    		    		    		    		    		    		    		    		        return true;
	}


}
?>
