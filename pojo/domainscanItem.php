<?php

require_once('d:\\www\\pojo\\model.php');

class domainscanItem
{

	// d�clarations des variables
		private $idDomain;
    	private $idScan;
    
	// constructeur
	function domainscanItem() {
			$this->idDomain = new Model("idDomain");
    		$this->idScan = new Model("idScan");
    	}

	// d�clarations des fonctions get
		function getIdDomain(){
		return $this->idDomain->getValue();
	}	
	
    	function getIdScan(){
		return $this->idScan->getValue();
	}	
	
    
	// d�clarations des fonctions set
		function setIdDomain($idDomain){
	 		$this->idDomain->setValue($idDomain);
	 	}	
	
    	function setIdScan($idScan){
	 		$this->idScan->setValue($idScan);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idDomain->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idScan->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
