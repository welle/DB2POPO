<?php

require_once('d:\\www\\pojo\\model.php');

class contactdataItem
{

	// déclarations des variables
		private $idContact;
    	private $idBusinessUnit;
    	private $validityFrom;
    	private $fieldName;
    	private $fieldValue;
    
	// constructeur
	function contactdataItem() {
			$this->idContact = new Model("idContact");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->validityFrom = new Model("validityFrom");
    		$this->fieldName = new Model("fieldName");
    		$this->fieldValue = new Model("fieldValue");
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
	
    	function getFieldName(){
		return $this->fieldName->getValue();
	}	
	
    	function getFieldValue(){
		return $this->fieldValue->getValue();
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
	
    	function setFieldName($fieldName){
	 		$this->fieldName->setValue(substr($fieldName, 0, 255));
	 	}	
	
    	function setFieldValue($fieldValue){
	 		$this->fieldValue->setValue(substr($fieldValue, 0, 255));
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
			
		    		 
			if (is_null($this->fieldName->getValue())) {
				return false;
			}
			
		    		        return true;
	}


}
?>
