<?php

require_once('d:\\www\\pojo\\model.php');

class contactdocdefaultsItem
{

	// déclarations des variables
		private $idContact;
    	private $idBusinessUnit;
    	private $validityFrom;
    	private $docState;
    	private $type;
    	private $title;
    	private $lineText;
    	private $account;
    	private $vatCode;
    	private $quantity;
    	private $unitPrice;
    	private $rebate;
    
	// constructeur
	function contactdocdefaultsItem() {
			$this->idContact = new Model("idContact");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->validityFrom = new Model("validityFrom");
    		$this->docState = new Model("docState");
    		$this->type = new Model("type");
    		$this->title = new Model("title");
    		$this->lineText = new Model("lineText");
    		$this->account = new Model("account");
    		$this->vatCode = new Model("vatCode");
    		$this->quantity = new Model("quantity");
    		$this->unitPrice = new Model("unitPrice");
    		$this->rebate = new Model("rebate");
    	}

	// déclarations des fonctions get
		function getIdContact(){
		return $this->idContact->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getValidityFrom(){
		return $this->validityFrom->getValue();
	}	
	
    	function getDocState(){
		return $this->docState->getValue();
	}	
	
    	function getType(){
		return $this->type->getValue();
	}	
	
    	function getTitle(){
		return $this->title->getValue();
	}	
	
    	function getLineText(){
		return $this->lineText->getValue();
	}	
	
    	function getAccount(){
		return $this->account->getValue();
	}	
	
    	function getVatCode(){
		return $this->vatCode->getValue();
	}	
	
    	function getQuantity(){
		return $this->quantity->getValue();
	}	
	
    	function getUnitPrice(){
		return $this->unitPrice->getValue();
	}	
	
    	function getRebate(){
		return $this->rebate->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdContact($idContact){
	 		$this->idContact->setValue($idContact);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setValidityFrom($validityFrom){
	 		$this->validityFrom->setValue($validityFrom);
	 	}	
	
    	function setDocState($docState){
	 		$this->docState->setValue($docState);
	 	}	
	
    	function setType($type){
	 		$this->type->setValue($type);
	 	}	
	
    	function setTitle($title){
	 		$this->title->setValue(substr($title, 0, 4000));
	 	}	
	
    	function setLineText($lineText){
	 		$this->lineText->setValue(substr($lineText, 0, 4000));
	 	}	
	
    	function setAccount($account){
	 		$this->account->setValue(substr($account, 0, 20));
	 	}	
	
    	function setVatCode($vatCode){
	 		$this->vatCode->setValue(substr($vatCode, 0, 10));
	 	}	
	
    	function setQuantity($quantity){
	 		$this->quantity->setValue($quantity);
	 	}	
	
    	function setUnitPrice($unitPrice){
	 		$this->unitPrice->setValue($unitPrice);
	 	}	
	
    	function setRebate($rebate){
	 		$this->rebate->setValue($rebate);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idContact->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->validityFrom->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->docState->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->type->getValue())) {
				return false;
			}
			
		    		    		    		    		    		    		    		        return true;
	}


}
?>
