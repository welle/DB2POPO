<?php

require_once('d:\\www\\pojo\\model.php');

class taskmessageItem
{

	// déclarations des variables
		private $idTaskMessage;
    	private $senderContactId;
    	private $idBusinessUnit;
    	private $validityFrom;
    	private $sentDate;
    	private $dueDate;
    	private $message;
    	private $type;
    	private $docReference;
    	private $status;
    
	// constructeur
	function taskmessageItem() {
			$this->idTaskMessage = new Model("idTaskMessage");
    		$this->senderContactId = new Model("senderContactId");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->validityFrom = new Model("validityFrom");
    		$this->sentDate = new Model("sentDate");
    		$this->dueDate = new Model("dueDate");
    		$this->message = new Model("message");
    		$this->type = new Model("type");
    		$this->docReference = new Model("docReference");
    		$this->status = new Model("status");
    	}

	// déclarations des fonctions get
		function getIdTaskMessage(){
		return $this->idTaskMessage->getValue();
	}	
	
    	function getSenderContactId(){
		return $this->senderContactId->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getValidityFrom(){
		return $this->validityFrom->getValue();
	}	
	
    	function getSentDate(){
		return $this->sentDate->getValue();
	}	
	
    	function getDueDate(){
		return $this->dueDate->getValue();
	}	
	
    	function getMessage(){
		return $this->message->getValue();
	}	
	
    	function getType(){
		return $this->type->getValue();
	}	
	
    	function getDocReference(){
		return $this->docReference->getValue();
	}	
	
    	function getStatus(){
		return $this->status->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdTaskMessage($idTaskMessage){
	 		$this->idTaskMessage->setValue($idTaskMessage);
	 	}	
	
    	function setSenderContactId($senderContactId){
	 		$this->senderContactId->setValue($senderContactId);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setValidityFrom($validityFrom){
	 		$this->validityFrom->setValue($validityFrom);
	 	}	
	
    	function setSentDate($sentDate){
	 		$this->sentDate->setValue($sentDate);
	 	}	
	
    	function setDueDate($dueDate){
	 		$this->dueDate->setValue($dueDate);
	 	}	
	
    	function setMessage($message){
	 		$this->message->setValue(substr($message, 0, 500));
	 	}	
	
    	function setType($type){
	 		$this->type->setValue(substr($type, 0, 45));
	 	}	
	
    	function setDocReference($docReference){
	 		$this->docReference->setValue(substr($docReference, 0, 500));
	 	}	
	
    	function setStatus($status){
	 		$this->status->setValue($status);
	 	}	
	
        
    function isNotNullable() {
			    		 
			if (is_null($this->senderContactId->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->validityFrom->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->sentDate->getValue())) {
				return false;
			}
			
		    		    		 
			if (is_null($this->message->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->type->getValue())) {
				return false;
			}
			
		    		    		 
			if (is_null($this->status->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
