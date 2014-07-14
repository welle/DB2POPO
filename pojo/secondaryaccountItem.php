<?php

require_once('d:\\www\\pojo\\model.php');

class secondaryaccountItem
{

	// déclarations des variables
		private $idSecondaryAccount;
    	private $idParentAccountPlan;
    	private $number;
    	private $name;
    	private $description;
    	private $internalType;
    	private $type;
    	private $currencyCode;
    	private $status;
    	private $modifiable;
    	private $linkedAccount;
    	private $linkedAccountPlan;
    	private $accountBusinessUnit;
    	private $accountExercise;
    
	// constructeur
	function secondaryaccountItem() {
			$this->idSecondaryAccount = new Model("idSecondaryAccount");
    		$this->idParentAccountPlan = new Model("idParentAccountPlan");
    		$this->number = new Model("number");
    		$this->name = new Model("name");
    		$this->description = new Model("description");
    		$this->internalType = new Model("internalType");
    		$this->type = new Model("type");
    		$this->currencyCode = new Model("currencyCode");
    		$this->status = new Model("status");
    		$this->modifiable = new Model("modifiable");
    		$this->linkedAccount = new Model("linkedAccount");
    		$this->linkedAccountPlan = new Model("linkedAccountPlan");
    		$this->accountBusinessUnit = new Model("accountBusinessUnit");
    		$this->accountExercise = new Model("accountExercise");
    	}

	// déclarations des fonctions get
		function getIdSecondaryAccount(){
		return $this->idSecondaryAccount->getValue();
	}	
	
    	function getIdParentAccountPlan(){
		return $this->idParentAccountPlan->getValue();
	}	
	
    	function getNumber(){
		return $this->number->getValue();
	}	
	
    	function getName(){
		return $this->name->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getInternalType(){
		return $this->internalType->getValue();
	}	
	
    	function getType(){
		return $this->type->getValue();
	}	
	
    	function getCurrencyCode(){
		return $this->currencyCode->getValue();
	}	
	
    	function getStatus(){
		return $this->status->getValue();
	}	
	
    	function getModifiable(){
		return $this->modifiable->getValue();
	}	
	
    	function getLinkedAccount(){
		return $this->linkedAccount->getValue();
	}	
	
    	function getLinkedAccountPlan(){
		return $this->linkedAccountPlan->getValue();
	}	
	
    	function getAccountBusinessUnit(){
		return $this->accountBusinessUnit->getValue();
	}	
	
    	function getAccountExercise(){
		return $this->accountExercise->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdSecondaryAccount($idSecondaryAccount){
	 		$this->idSecondaryAccount->setValue($idSecondaryAccount);
	 	}	
	
    	function setIdParentAccountPlan($idParentAccountPlan){
	 		$this->idParentAccountPlan->setValue($idParentAccountPlan);
	 	}	
	
    	function setNumber($number){
	 		$this->number->setValue(substr($number, 0, 20));
	 	}	
	
    	function setName($name){
	 		$this->name->setValue(substr($name, 0, 45));
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 255));
	 	}	
	
    	function setInternalType($internalType){
	 		$this->internalType->setValue(substr($internalType, 0, 45));
	 	}	
	
    	function setType($type){
	 		$this->type->setValue(substr($type, 0, 45));
	 	}	
	
    	function setCurrencyCode($currencyCode){
	 		$this->currencyCode->setValue(substr($currencyCode, 0, 10));
	 	}	
	
    	function setStatus($status){
	 		$this->status->setValue(substr($status, 0, 45));
	 	}	
	
    	function setModifiable($modifiable){
	 		$this->modifiable->setValue($modifiable);
	 	}	
	
    	function setLinkedAccount($linkedAccount){
	 		$this->linkedAccount->setValue(substr($linkedAccount, 0, 20));
	 	}	
	
    	function setLinkedAccountPlan($linkedAccountPlan){
	 		$this->linkedAccountPlan->setValue(substr($linkedAccountPlan, 0, 20));
	 	}	
	
    	function setAccountBusinessUnit($accountBusinessUnit){
	 		$this->accountBusinessUnit->setValue($accountBusinessUnit);
	 	}	
	
    	function setAccountExercise($accountExercise){
	 		$this->accountExercise->setValue($accountExercise);
	 	}	
	
        
    function isNotNullable() {
			    		 
			if (is_null($this->idParentAccountPlan->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->number->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->name->getValue())) {
				return false;
			}
			
		    		    		    		    		    		 
			if (is_null($this->status->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->modifiable->getValue())) {
				return false;
			}
			
		    		    		    		 
			if (is_null($this->accountBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->accountExercise->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
