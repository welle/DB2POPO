<?php

require_once('d:\\www\\pojo\\model.php');

class contactthirdpartyaccountsItem
{

	// déclarations des variables
		private $idContact;
    	private $idBusinessUnit;
    	private $validityFrom;
    	private $exercise;
    	private $custAccount;
    	private $supAccount;
    
	// constructeur
	function contactthirdpartyaccountsItem() {
			$this->idContact = new Model("idContact");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->validityFrom = new Model("validityFrom");
    		$this->exercise = new Model("exercise");
    		$this->custAccount = new Model("custAccount");
    		$this->supAccount = new Model("supAccount");
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
	
    	function getExercise(){
		return $this->exercise->getValue();
	}	
	
    	function getCustAccount(){
		return $this->custAccount->getValue();
	}	
	
    	function getSupAccount(){
		return $this->supAccount->getValue();
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
	
    	function setExercise($exercise){
	 		$this->exercise->setValue($exercise);
	 	}	
	
    	function setCustAccount($custAccount){
	 		$this->custAccount->setValue(substr($custAccount, 0, 20));
	 	}	
	
    	function setSupAccount($supAccount){
	 		$this->supAccount->setValue(substr($supAccount, 0, 20));
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
			
		    		 
			if (is_null($this->exercise->getValue())) {
				return false;
			}
			
		    		    		        return true;
	}


}
?>
