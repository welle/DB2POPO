<?php

require_once('d:\\www\\pojo\\model.php');

class domainmessageItem
{

	// déclarations des variables
		private $idTaskMessage;
    	private $idDomain;
    	private $status;
    
	// constructeur
	function domainmessageItem() {
			$this->idTaskMessage = new Model("idTaskMessage");
    		$this->idDomain = new Model("idDomain");
    		$this->status = new Model("status");
    	}

	// déclarations des fonctions get
		function getIdTaskMessage(){
		return $this->idTaskMessage->getValue();
	}	
	
    	function getIdDomain(){
		return $this->idDomain->getValue();
	}	
	
    	function getStatus(){
		return $this->status->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdTaskMessage($idTaskMessage){
	 		$this->idTaskMessage->setValue($idTaskMessage);
	 	}	
	
    	function setIdDomain($idDomain){
	 		$this->idDomain->setValue($idDomain);
	 	}	
	
    	function setStatus($status){
	 		$this->status->setValue($status);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idTaskMessage->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idDomain->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->status->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
