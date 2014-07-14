<?php

require_once('d:\\www\\pojo\\model.php');

class statementItem
{

	// déclarations des variables
		private $idStatement;
    	private $idBusinessUnit;
    	private $account;
    	private $accountExercise;
    	private $statementDate;
    	private $reference;
    	private $openingBalance;
    	private $closingBalance;
    	private $movement;
    	private $reconciliedAmount;
    	private $difference;
    	private $status;
    	private $type;
    
	// constructeur
	function statementItem() {
			$this->idStatement = new Model("idStatement");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->account = new Model("account");
    		$this->accountExercise = new Model("accountExercise");
    		$this->statementDate = new Model("statementDate");
    		$this->reference = new Model("reference");
    		$this->openingBalance = new Model("openingBalance");
    		$this->closingBalance = new Model("closingBalance");
    		$this->movement = new Model("movement");
    		$this->reconciliedAmount = new Model("reconciliedAmount");
    		$this->difference = new Model("difference");
    		$this->status = new Model("status");
    		$this->type = new Model("type");
    	}

	// déclarations des fonctions get
		function getIdStatement(){
		return $this->idStatement->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getAccount(){
		return $this->account->getValue();
	}	
	
    	function getAccountExercise(){
		return $this->accountExercise->getValue();
	}	
	
    	function getStatementDate(){
		return $this->statementDate->getValue();
	}	
	
    	function getReference(){
		return $this->reference->getValue();
	}	
	
    	function getOpeningBalance(){
		return $this->openingBalance->getValue();
	}	
	
    	function getClosingBalance(){
		return $this->closingBalance->getValue();
	}	
	
    	function getMovement(){
		return $this->movement->getValue();
	}	
	
    	function getReconciliedAmount(){
		return $this->reconciliedAmount->getValue();
	}	
	
    	function getDifference(){
		return $this->difference->getValue();
	}	
	
    	function getStatus(){
		return $this->status->getValue();
	}	
	
    	function getType(){
		return $this->type->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdStatement($idStatement){
	 		$this->idStatement->setValue($idStatement);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setAccount($account){
	 		$this->account->setValue(substr($account, 0, 20));
	 	}	
	
    	function setAccountExercise($accountExercise){
	 		$this->accountExercise->setValue($accountExercise);
	 	}	
	
    	function setStatementDate($statementDate){
	 		$this->statementDate->setValue($statementDate);
	 	}	
	
    	function setReference($reference){
	 		$this->reference->setValue(substr($reference, 0, 45));
	 	}	
	
    	function setOpeningBalance($openingBalance){
	 		$this->openingBalance->setValue($openingBalance);
	 	}	
	
    	function setClosingBalance($closingBalance){
	 		$this->closingBalance->setValue($closingBalance);
	 	}	
	
    	function setMovement($movement){
	 		$this->movement->setValue($movement);
	 	}	
	
    	function setReconciliedAmount($reconciliedAmount){
	 		$this->reconciliedAmount->setValue($reconciliedAmount);
	 	}	
	
    	function setDifference($difference){
	 		$this->difference->setValue($difference);
	 	}	
	
    	function setStatus($status){
	 		$this->status->setValue(substr($status, 0, 45));
	 	}	
	
    	function setType($type){
	 		$this->type->setValue(substr($type, 0, 45));
	 	}	
	
        
    function isNotNullable() {
			    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->account->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->accountExercise->getValue())) {
				return false;
			}
			
		    		    		    		    		    		    		    		    		    		        return true;
	}


}
?>
