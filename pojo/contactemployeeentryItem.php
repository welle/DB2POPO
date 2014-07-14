<?php

require_once('d:\\www\\pojo\\model.php');

class contactemployeeentryItem
{

	// déclarations des variables
		private $idContactEmployeeEntry;
    	private $idContact;
    	private $idBusinessUnit;
    	private $startDate;
    	private $endDate;
    
	// constructeur
	function contactemployeeentryItem() {
			$this->idContactEmployeeEntry = new Model("idContactEmployeeEntry");
    		$this->idContact = new Model("idContact");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->startDate = new Model("startDate");
    		$this->endDate = new Model("endDate");
    	}

	// déclarations des fonctions get
		function getIdContactEmployeeEntry(){
		return $this->idContactEmployeeEntry->getValue();
	}	
	
    	function getIdContact(){
		return $this->idContact->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getStartDate(){
		return $this->startDate->getValue();
	}	
	
    	function getEndDate(){
		return $this->endDate->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdContactEmployeeEntry($idContactEmployeeEntry){
	 		$this->idContactEmployeeEntry->setValue($idContactEmployeeEntry);
	 	}	
	
    	function setIdContact($idContact){
	 		$this->idContact->setValue($idContact);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setStartDate($startDate){
	 		$this->startDate->setValue($startDate);
	 	}	
	
    	function setEndDate($endDate){
	 		$this->endDate->setValue($endDate);
	 	}	
	
        
    function isNotNullable() {
			    		 
			if (is_null($this->idContact->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		    		        return true;
	}


}
?>
