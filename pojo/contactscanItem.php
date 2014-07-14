<?php

require_once('d:\\www\\pojo\\model.php');

class contactscanItem
{

	// déclarations des variables
		private $idContact;
    	private $idBusinessUnit;
    	private $idScan;
    
	// constructeur
	function contactscanItem() {
			$this->idContact = new Model("idContact");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->idScan = new Model("idScan");
    	}

	// déclarations des fonctions get
		function getIdContact(){
		return $this->idContact->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getIdScan(){
		return $this->idScan->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdContact($idContact){
	 		$this->idContact->setValue($idContact);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setIdScan($idScan){
	 		$this->idScan->setValue($idScan);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idContact->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idScan->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
