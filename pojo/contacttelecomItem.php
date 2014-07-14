<?php

require_once('d:\\www\\pojo\\model.php');

class contacttelecomItem
{

	// déclarations des variables
		private $idContact;
    	private $idBusinessUnit;
    	private $idTelecom;
    	private $validityFrom;
    	private $validityTo;
    	private $telecomMode;
    	private $telecomType;
    	private $telecomValue;
    
	// constructeur
	function contacttelecomItem() {
			$this->idContact = new Model("idContact");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->idTelecom = new Model("idTelecom");
    		$this->validityFrom = new Model("validityFrom");
    		$this->validityTo = new Model("validityTo");
    		$this->telecomMode = new Model("telecomMode");
    		$this->telecomType = new Model("telecomType");
    		$this->telecomValue = new Model("telecomValue");
    	}

	// déclarations des fonctions get
		function getIdContact(){
		return $this->idContact->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getIdTelecom(){
		return $this->idTelecom->getValue();
	}	
	
    	function getValidityFrom(){
		return $this->validityFrom->getValue();
	}	
	
    	function getValidityTo(){
		return $this->validityTo->getValue();
	}	
	
    	function getTelecomMode(){
		return $this->telecomMode->getValue();
	}	
	
    	function getTelecomType(){
		return $this->telecomType->getValue();
	}	
	
    	function getTelecomValue(){
		return $this->telecomValue->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdContact($idContact){
	 		$this->idContact->setValue($idContact);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setIdTelecom($idTelecom){
	 		$this->idTelecom->setValue($idTelecom);
	 	}	
	
    	function setValidityFrom($validityFrom){
	 		$this->validityFrom->setValue($validityFrom);
	 	}	
	
    	function setValidityTo($validityTo){
	 		$this->validityTo->setValue($validityTo);
	 	}	
	
    	function setTelecomMode($telecomMode){
	 		$this->telecomMode->setValue(substr($telecomMode, 0, 5));
	 	}	
	
    	function setTelecomType($telecomType){
	 		$this->telecomType->setValue(substr($telecomType, 0, 5));
	 	}	
	
    	function setTelecomValue($telecomValue){
	 		$this->telecomValue->setValue(substr($telecomValue, 0, 255));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idContact->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idTelecom->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->validityFrom->getValue())) {
				return false;
			}
			
		    		    		    		    		        return true;
	}


}
?>
