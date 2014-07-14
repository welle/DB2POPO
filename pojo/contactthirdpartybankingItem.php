<?php

require_once('d:\\www\\pojo\\model.php');

class contactthirdpartybankingItem
{

	// déclarations des variables
		private $idContactThirdPartyBanking;
    	private $idContact;
    	private $idBusinessUnit;
    	private $name;
    	private $address;
    	private $postCode;
    	private $town;
    	private $iban;
    	private $bic;
    	private $account;
    	private $owner;
    	private $paymentForm;
    
	// constructeur
	function contactthirdpartybankingItem() {
			$this->idContactThirdPartyBanking = new Model("idContactThirdPartyBanking");
    		$this->idContact = new Model("idContact");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->name = new Model("name");
    		$this->address = new Model("address");
    		$this->postCode = new Model("postCode");
    		$this->town = new Model("town");
    		$this->iban = new Model("iban");
    		$this->bic = new Model("bic");
    		$this->account = new Model("account");
    		$this->owner = new Model("owner");
    		$this->paymentForm = new Model("paymentForm");
    	}

	// déclarations des fonctions get
		function getIdContactThirdPartyBanking(){
		return $this->idContactThirdPartyBanking->getValue();
	}	
	
    	function getIdContact(){
		return $this->idContact->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getName(){
		return $this->name->getValue();
	}	
	
    	function getAddress(){
		return $this->address->getValue();
	}	
	
    	function getPostCode(){
		return $this->postCode->getValue();
	}	
	
    	function getTown(){
		return $this->town->getValue();
	}	
	
    	function getIban(){
		return $this->iban->getValue();
	}	
	
    	function getBic(){
		return $this->bic->getValue();
	}	
	
    	function getAccount(){
		return $this->account->getValue();
	}	
	
    	function getOwner(){
		return $this->owner->getValue();
	}	
	
    	function getPaymentForm(){
		return $this->paymentForm->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdContactThirdPartyBanking($idContactThirdPartyBanking){
	 		$this->idContactThirdPartyBanking->setValue($idContactThirdPartyBanking);
	 	}	
	
    	function setIdContact($idContact){
	 		$this->idContact->setValue($idContact);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setName($name){
	 		$this->name->setValue(substr($name, 0, 255));
	 	}	
	
    	function setAddress($address){
	 		$this->address->setValue(substr($address, 0, 255));
	 	}	
	
    	function setPostCode($postCode){
	 		$this->postCode->setValue(substr($postCode, 0, 20));
	 	}	
	
    	function setTown($town){
	 		$this->town->setValue(substr($town, 0, 45));
	 	}	
	
    	function setIban($iban){
	 		$this->iban->setValue(substr($iban, 0, 100));
	 	}	
	
    	function setBic($bic){
	 		$this->bic->setValue(substr($bic, 0, 20));
	 	}	
	
    	function setAccount($account){
	 		$this->account->setValue(substr($account, 0, 100));
	 	}	
	
    	function setOwner($owner){
	 		$this->owner->setValue(substr($owner, 0, 255));
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
			
		    		    		    		    		    		    		    		    		    		        return true;
	}


}
?>
