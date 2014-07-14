<?php

require_once('d:\\www\\pojo\\model.php');

class contactmessageItem
{

	// déclarations des variables
		private $idTaskMessage;
    	private $idContact;
    	private $idBusinessUnit;
    	private $validityFrom;
    	private $status;
    	private $buFlag;
    
	// constructeur
	function contactmessageItem() {
			$this->idTaskMessage = new Model("idTaskMessage");
    		$this->idContact = new Model("idContact");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->validityFrom = new Model("validityFrom");
    		$this->status = new Model("status");
    		$this->buFlag = new Model("buFlag");
    	}

	// déclarations des fonctions get
		function getIdTaskMessage(){
		return $this->idTaskMessage->getValue();
	}	
	
    	function getIdContact(){
		return $this->idContact->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getValidityFrom(){
		return $this->validityFrom->getValue();
	}	
	
    	function getStatus(){
		return $this->status->getValue();
	}	
	
    	function getBuFlag(){
		return $this->buFlag->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdTaskMessage($idTaskMessage){
	 		$this->idTaskMessage->setValue($idTaskMessage);
	 	}	
	
    	function setIdContact($idContact){
	 		$this->idContact->setValue($idContact);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setValidityFrom($validityFrom){
	 		$this->validityFrom->setValue($validityFrom);
	 	}	
	
    	function setStatus($status){
	 		$this->status->setValue($status);
	 	}	
	
    	function setBuFlag($buFlag){
	 		$this->buFlag->setValue($buFlag);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idTaskMessage->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idContact->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->validityFrom->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->status->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->buFlag->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
