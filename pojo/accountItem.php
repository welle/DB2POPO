<?php

require_once('d:\\www\\pojo\\model.php');

class accountItem
{

	// déclarations des variables
		private $number;
    	private $idBusinessUnit;
    	private $exercise;
    	private $name;
    	private $description;
    	private $taxCode;
    	private $parentAccountNumber;
    	private $sortNumber;
    	private $currencyCode;
    	private $status;
    	private $carryForward;
    	private $reconcile;
    	private $linkedAccount;
    	private $zeroBalance;
    	private $type;
    	private $manual;
    	private $category;
    
	// constructeur
	function accountItem() {
			$this->number = new Model("number");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->exercise = new Model("exercise");
    		$this->name = new Model("name");
    		$this->description = new Model("description");
    		$this->taxCode = new Model("taxCode");
    		$this->parentAccountNumber = new Model("parentAccountNumber");
    		$this->sortNumber = new Model("sortNumber");
    		$this->currencyCode = new Model("currencyCode");
    		$this->status = new Model("status");
    		$this->carryForward = new Model("carryForward");
    		$this->reconcile = new Model("reconcile");
    		$this->linkedAccount = new Model("linkedAccount");
    		$this->zeroBalance = new Model("zeroBalance");
    		$this->type = new Model("type");
    		$this->manual = new Model("manual");
    		$this->category = new Model("category");
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
	
    	function getName(){
		return $this->name->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getTaxCode(){
		return $this->taxCode->getValue();
	}	
	
    	function getParentAccountNumber(){
		return $this->parentAccountNumber->getValue();
	}	
	
    	function getSortNumber(){
		return $this->sortNumber->getValue();
	}	
	
    	function getCurrencyCode(){
		return $this->currencyCode->getValue();
	}	
	
    	function getStatus(){
		return $this->status->getValue();
	}	
	
    	function getCarryForward(){
		return $this->carryForward->getValue();
	}	
	
    	function getReconcile(){
		return $this->reconcile->getValue();
	}	
	
    	function getLinkedAccount(){
		return $this->linkedAccount->getValue();
	}	
	
    	function getZeroBalance(){
		return $this->zeroBalance->getValue();
	}	
	
    	function getType(){
		return $this->type->getValue();
	}	
	
    	function getManual(){
		return $this->manual->getValue();
	}	
	
    	function getCategory(){
		return $this->category->getValue();
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
	
    	function setName($name){
	 		$this->name->setValue(substr($name, 0, 45));
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 255));
	 	}	
	
    	function setTaxCode($taxCode){
	 		$this->taxCode->setValue(substr($taxCode, 0, 10));
	 	}	
	
    	function setParentAccountNumber($parentAccountNumber){
	 		$this->parentAccountNumber->setValue(substr($parentAccountNumber, 0, 20));
	 	}	
	
    	function setSortNumber($sortNumber){
	 		$this->sortNumber->setValue(substr($sortNumber, 0, 20));
	 	}	
	
    	function setCurrencyCode($currencyCode){
	 		$this->currencyCode->setValue(substr($currencyCode, 0, 10));
	 	}	
	
    	function setStatus($status){
	 		$this->status->setValue(substr($status, 0, 45));
	 	}	
	
    	function setCarryForward($carryForward){
	 		$this->carryForward->setValue($carryForward);
	 	}	
	
    	function setReconcile($reconcile){
	 		$this->reconcile->setValue($reconcile);
	 	}	
	
    	function setLinkedAccount($linkedAccount){
	 		$this->linkedAccount->setValue(substr($linkedAccount, 0, 20));
	 	}	
	
    	function setZeroBalance($zeroBalance){
	 		$this->zeroBalance->setValue($zeroBalance);
	 	}	
	
    	function setType($type){
	 		$this->type->setValue(substr($type, 0, 45));
	 	}	
	
    	function setManual($manual){
	 		$this->manual->setValue($manual);
	 	}	
	
    	function setCategory($category){
	 		$this->category->setValue(substr($category, 0, 45));
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
			
		    		    		    		    		 
			if (is_null($this->parentAccountNumber->getValue())) {
				return false;
			}
			
		    		    		 
			if (is_null($this->currencyCode->getValue())) {
				return false;
			}
			
		    		    		    		    		    		    		    		    		        return true;
	}


}
?>
