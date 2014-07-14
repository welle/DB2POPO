<?php

require_once('d:\\www\\pojo\\model.php');

class accounttypeItem
{

	// déclarations des variables
		private $accountType;
    
	// constructeur
	function accounttypeItem() {
			$this->accountType = new Model("accountType");
    	}

	// déclarations des fonctions get
		function getAccountType(){
		return $this->accountType->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setAccountType($accountType){
	 		$this->accountType->setValue(substr($accountType, 0, 45));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->accountType->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
