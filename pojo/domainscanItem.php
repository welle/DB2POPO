<?php

require_once('d:\\www\\pojo\\model.php');

class domainscanItem
{

	// déclarations des variables
		private $idDomain;
    	private $idScan;
    
	// constructeur
	function domainscanItem() {
			$this->idDomain = new Model("idDomain");
    		$this->idScan = new Model("idScan");
    	}

	// déclarations des fonctions get
		function getIdDomain(){
		return $this->idDomain->getValue();
	}	
	
    	function getIdScan(){
		return $this->idScan->getValue();
	}	
	
    
	// déclarations des fonctions set
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
