<?php

require_once('d:\\www\\pojo\\model.php');

class paymentaccountItem
{

	// déclarations des variables
		private $number;
    	private $idBusinessUnit;
    	private $exercise;
    	private $inputAccess;
    	private $outputAccess;
    	private $type;
    	private $sortCode;
    	private $accountNumber;
    	private $iban;
    	private $bic;
    	private $swift;
    	private $name;
    	private $address;
    	private $postalCode;
    	private $town;
    	private $country;
    
	// constructeur
	function paymentaccountItem() {
			$this->number = new Model("number");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->exercise = new Model("exercise");
    		$this->inputAccess = new Model("inputAccess");
    		$this->outputAccess = new Model("outputAccess");
    		$this->type = new Model("type");
    		$this->sortCode = new Model("sortCode");
    		$this->accountNumber = new Model("accountNumber");
    		$this->iban = new Model("iban");
    		$this->bic = new Model("bic");
    		$this->swift = new Model("swift");
    		$this->name = new Model("name");
    		$this->address = new Model("address");
    		$this->postalCode = new Model("postalCode");
    		$this->town = new Model("town");
    		$this->country = new Model("country");
    	}

	// déclarations des fonctions get
		function getNumber(){
		return $this->number->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getExercise(){
		return $this->exercise->getValue();
	}	
	
    	function getInputAccess(){
		return $this->inputAccess->getValue();
	}	
	
    	function getOutputAccess(){
		return $this->outputAccess->getValue();
	}	
	
    	function getType(){
		return $this->type->getValue();
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
	
    	function getName(){
		return $this->name->getValue();
	}	
	
    	function getAddress(){
		return $this->address->getValue();
	}	
	
    	function getPostalCode(){
		return $this->postalCode->getValue();
	}	
	
    	function getTown(){
		return $this->town->getValue();
	}	
	
    	function getCountry(){
		return $this->country->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setNumber($number){
	 		$this->number->setValue(substr($number, 0, 20));
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setExercise($exercise){
	 		$this->exercise->setValue($exercise);
	 	}	
	
    	function setInputAccess($inputAccess){
	 		$this->inputAccess->setValue(substr($inputAccess, 0, 45));
	 	}	
	
    	function setOutputAccess($outputAccess){
	 		$this->outputAccess->setValue(substr($outputAccess, 0, 45));
	 	}	
	
    	function setType($type){
	 		$this->type->setValue($type);
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
	
    	function setName($name){
	 		$this->name->setValue(substr($name, 0, 255));
	 	}	
	
    	function setAddress($address){
	 		$this->address->setValue(substr($address, 0, 255));
	 	}	
	
    	function setPostalCode($postalCode){
	 		$this->postalCode->setValue(substr($postalCode, 0, 20));
	 	}	
	
    	function setTown($town){
	 		$this->town->setValue(substr($town, 0, 45));
	 	}	
	
    	function setCountry($country){
	 		$this->country->setValue(substr($country, 0, 45));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->number->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->exercise->getValue())) {
				return false;
			}
			
		    		    		    		    		    		    		    		    		    		    		    		    		    		        return true;
	}


}
?>
