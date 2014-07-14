<?php

require_once('d:\\www\\pojo\\model.php');

class contactemployeeItem
{

	// déclarations des variables
		private $idContact;
    	private $idBusinessUnit;
    	private $validityFrom;
    	private $validityTo;
    	private $dateOfBirth;
    	private $sex;
    	private $maritalStatus;
    	private $nationality;
    	private $townOfBirth;
    
	// constructeur
	function contactemployeeItem() {
			$this->idContact = new Model("idContact");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->validityFrom = new Model("validityFrom");
    		$this->validityTo = new Model("validityTo");
    		$this->dateOfBirth = new Model("dateOfBirth");
    		$this->sex = new Model("sex");
    		$this->maritalStatus = new Model("maritalStatus");
    		$this->nationality = new Model("nationality");
    		$this->townOfBirth = new Model("townOfBirth");
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
	
    	function getValidityTo(){
		return $this->validityTo->getValue();
	}	
	
    	function getDateOfBirth(){
		return $this->dateOfBirth->getValue();
	}	
	
    	function getSex(){
		return $this->sex->getValue();
	}	
	
    	function getMaritalStatus(){
		return $this->maritalStatus->getValue();
	}	
	
    	function getNationality(){
		return $this->nationality->getValue();
	}	
	
    	function getTownOfBirth(){
		return $this->townOfBirth->getValue();
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
	
    	function setValidityTo($validityTo){
	 		$this->validityTo->setValue($validityTo);
	 	}	
	
    	function setDateOfBirth($dateOfBirth){
	 		$this->dateOfBirth->setValue($dateOfBirth);
	 	}	
	
    	function setSex($sex){
	 		$this->sex->setValue($sex);
	 	}	
	
    	function setMaritalStatus($maritalStatus){
	 		$this->maritalStatus->setValue($maritalStatus);
	 	}	
	
    	function setNationality($nationality){
	 		$this->nationality->setValue(substr($nationality, 0, 3));
	 	}	
	
    	function setTownOfBirth($townOfBirth){
	 		$this->townOfBirth->setValue(substr($townOfBirth, 0, 45));
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
			
		    		    		    		    		    		    		        return true;
	}


}
?>
