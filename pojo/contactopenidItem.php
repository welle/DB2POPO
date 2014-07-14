<?php

require_once('d:\\www\\pojo\\model.php');

class contactopenidItem
{

	// déclarations des variables
		private $idContact;
    	private $idBusinessUnit;
    	private $validityFrom;
    	private $openId;
    	private $openIdType;
    	private $displayName;
    	private $roles;
    
	// constructeur
	function contactopenidItem() {
			$this->idContact = new Model("idContact");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->validityFrom = new Model("validityFrom");
    		$this->openId = new Model("openId");
    		$this->openIdType = new Model("openIdType");
    		$this->displayName = new Model("displayName");
    		$this->roles = new Model("roles");
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
	
    	function getOpenId(){
		return $this->openId->getValue();
	}	
	
    	function getOpenIdType(){
		return $this->openIdType->getValue();
	}	
	
    	function getDisplayName(){
		return $this->displayName->getValue();
	}	
	
    	function getRoles(){
		return $this->roles->getValue();
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
	
    	function setOpenId($openId){
	 		$this->openId->setValue(substr($openId, 0, 255));
	 	}	
	
    	function setOpenIdType($openIdType){
	 		$this->openIdType->setValue(substr($openIdType, 0, 45));
	 	}	
	
    	function setDisplayName($displayName){
	 		$this->displayName->setValue(substr($displayName, 0, 255));
	 	}	
	
    	function setRoles($roles){
	 		$this->roles->setValue(substr($roles, 0, 500));
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
			
		    		 
			if (is_null($this->openId->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->openIdType->getValue())) {
				return false;
			}
			
		    		    		        return true;
	}


}
?>
