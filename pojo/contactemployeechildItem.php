<?php

require_once('d:\\www\\pojo\\model.php');

class contactemployeechildItem
{

	// déclarations des variables
		private $idContactEmployee;
    	private $idBusinessUnit;
    	private $idChild;
    	private $validityFrom;
    	private $validityTo;
    	private $name;
    	private $givenName;
    	private $dateOfBirth;
    	private $administrativeData;
    
	// constructeur
	function contactemployeechildItem() {
			$this->idContactEmployee = new Model("idContactEmployee");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->idChild = new Model("idChild");
    		$this->validityFrom = new Model("validityFrom");
    		$this->validityTo = new Model("validityTo");
    		$this->name = new Model("name");
    		$this->givenName = new Model("givenName");
    		$this->dateOfBirth = new Model("dateOfBirth");
    		$this->administrativeData = new Model("administrativeData");
    	}

	// déclarations des fonctions get
		function getIdContactEmployee(){
		return $this->idContactEmployee->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getIdChild(){
		return $this->idChild->getValue();
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
	
    	function getGivenName(){
		return $this->givenName->getValue();
	}	
	
    	function getDateOfBirth(){
		return $this->dateOfBirth->getValue();
	}	
	
    	function getAdministrativeData(){
		return $this->administrativeData->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdContactEmployee($idContactEmployee){
	 		$this->idContactEmployee->setValue($idContactEmployee);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setIdChild($idChild){
	 		$this->idChild->setValue($idChild);
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
	
    	function setGivenName($givenName){
	 		$this->givenName->setValue(substr($givenName, 0, 45));
	 	}	
	
    	function setDateOfBirth($dateOfBirth){
	 		$this->dateOfBirth->setValue($dateOfBirth);
	 	}	
	
    	function setAdministrativeData($administrativeData){
	 		$this->administrativeData->setValue(substr($administrativeData, 0, 250));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idContactEmployee->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idChild->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->validityFrom->getValue())) {
				return false;
			}
			
		    		    		    		    		    		        return true;
	}


}
?>
