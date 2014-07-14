<?php

require_once('d:\\www\\pojo\\model.php');

class businesslogItem
{

	// déclarations des variables
		private $idBusinessLog;
    	private $idContact;
    	private $idBusinessUnit;
    	private $logDate;
    	private $keyName;
    	private $subKeyName;
    	private $message;
    	private $sessionId;
    
	// constructeur
	function businesslogItem() {
			$this->idBusinessLog = new Model("idBusinessLog");
    		$this->idContact = new Model("idContact");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->logDate = new Model("logDate");
    		$this->keyName = new Model("keyName");
    		$this->subKeyName = new Model("subKeyName");
    		$this->message = new Model("message");
    		$this->sessionId = new Model("sessionId");
    	}

	// déclarations des fonctions get
		function getIdBusinessLog(){
		return $this->idBusinessLog->getValue();
	}	
	
    	function getIdContact(){
		return $this->idContact->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getLogDate(){
		return $this->logDate->getValue();
	}	
	
    	function getKeyName(){
		return $this->keyName->getValue();
	}	
	
    	function getSubKeyName(){
		return $this->subKeyName->getValue();
	}	
	
    	function getMessage(){
		return $this->message->getValue();
	}	
	
    	function getSessionId(){
		return $this->sessionId->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdBusinessLog($idBusinessLog){
	 		$this->idBusinessLog->setValue($idBusinessLog);
	 	}	
	
    	function setIdContact($idContact){
	 		$this->idContact->setValue($idContact);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setLogDate($logDate){
	 		$this->logDate->setValue($logDate);
	 	}	
	
    	function setKeyName($keyName){
	 		$this->keyName->setValue(substr($keyName, 0, 45));
	 	}	
	
    	function setSubKeyName($subKeyName){
	 		$this->subKeyName->setValue(substr($subKeyName, 0, 45));
	 	}	
	
    	function setMessage($message){
	 		$this->message->setValue(substr($message, 0, 1000));
	 	}	
	
    	function setSessionId($sessionId){
	 		$this->sessionId->setValue(substr($sessionId, 0, 255));
	 	}	
	
        
    function isNotNullable() {
			    		 
			if (is_null($this->idContact->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->logDate->getValue())) {
				return false;
			}
			
		    		    		    		    		 
			if (is_null($this->sessionId->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
