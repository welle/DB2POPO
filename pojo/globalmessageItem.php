<?php

require_once('d:\\www\\pojo\\model.php');

class globalmessageItem
{

	// déclarations des variables
		private $idTaskMessage;
    	private $status;
    
	// constructeur
	function globalmessageItem() {
			$this->idTaskMessage = new Model("idTaskMessage");
    		$this->status = new Model("status");
    	}

	// déclarations des fonctions get
		function getIdTaskMessage(){
		return $this->idTaskMessage->getValue();
	}	
	
    	function getStatus(){
		return $this->status->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdTaskMessage($idTaskMessage){
	 		$this->idTaskMessage->setValue($idTaskMessage);
	 	}	
	
    	function setStatus($status){
	 		$this->status->setValue($status);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idTaskMessage->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->status->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
