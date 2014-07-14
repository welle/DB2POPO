<?php

require_once('d:\\www\\pojo\\model.php');

class taxmappingaccountsItem
{

	// déclarations des variables
		private $taxCode;
    	private $companyId;
    	private $exercise;
    	private $debitAccount;
    	private $creditAccount;
    
	// constructeur
	function taxmappingaccountsItem() {
			$this->taxCode = new Model("taxCode");
    		$this->companyId = new Model("companyId");
    		$this->exercise = new Model("exercise");
    		$this->debitAccount = new Model("debitAccount");
    		$this->creditAccount = new Model("creditAccount");
    	}

	// déclarations des fonctions get
		function getTaxCode(){
		return $this->taxCode->getValue();
	}	
	
    	function getCompanyId(){
		return $this->companyId->getValue();
	}	
	
    	function getExercise(){
		return $this->exercise->getValue();
	}	
	
    	function getDebitAccount(){
		return $this->debitAccount->getValue();
	}	
	
    	function getCreditAccount(){
		return $this->creditAccount->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setTaxCode($taxCode){
	 		$this->taxCode->setValue(substr($taxCode, 0, 10));
	 	}	
	
    	function setCompanyId($companyId){
	 		$this->companyId->setValue($companyId);
	 	}	
	
    	function setExercise($exercise){
	 		$this->exercise->setValue($exercise);
	 	}	
	
    	function setDebitAccount($debitAccount){
	 		$this->debitAccount->setValue(substr($debitAccount, 0, 20));
	 	}	
	
    	function setCreditAccount($creditAccount){
	 		$this->creditAccount->setValue(substr($creditAccount, 0, 20));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->taxCode->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->companyId->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->exercise->getValue())) {
				return false;
			}
			
		    		    		        return true;
	}


}
?>
