<?php

require_once('d:\\www\\pojo\\model.php');

class contactcontractItem
{

	// déclarations des variables
		private $idContact;
    	private $idBusinessUnit;
    	private $validityFrom;
    	private $contractCode;
    	private $idCompanyContact;
    
	// constructeur
	function contactcontractItem() {
			$this->idContact = new Model("idContact");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->validityFrom = new Model("validityFrom");
    		$this->contractCode = new Model("contractCode");
    		$this->idCompanyContact = new Model("idCompanyContact");
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
	
    	function getContractCode(){
		return $this->contractCode->getValue();
	}	
	
    	function getIdCompanyContact(){
		return $this->idCompanyContact->getValue();
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
	
    	function setContractCode($contractCode){
	 		$this->contractCode->setValue(substr($contractCode, 0, 10));
	 	}	
	
    	function setIdCompanyContact($idCompanyContact){
	 		$this->idCompanyContact->setValue($idCompanyContact);
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
			
		    		 
			if (is_null($this->contractCode->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idCompanyContact->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
