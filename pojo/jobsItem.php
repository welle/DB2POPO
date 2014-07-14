<?php

require_once('d:\\www\\pojo\\model.php');

class jobsItem
{

	// déclarations des variables
		private $idBusinessUnit;
    	private $jobName;
    	private $idContact;
    	private $idContactContract;
    	private $contractCode;
    	private $idUserContact;
    	private $creationDate;
    	private $description;
    	private $state;
    	private $idCatalog;
    	private $idArticle;
    
	// constructeur
	function jobsItem() {
			$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->jobName = new Model("jobName");
    		$this->idContact = new Model("idContact");
    		$this->idContactContract = new Model("idContactContract");
    		$this->contractCode = new Model("contractCode");
    		$this->idUserContact = new Model("idUserContact");
    		$this->creationDate = new Model("creationDate");
    		$this->description = new Model("description");
    		$this->state = new Model("state");
    		$this->idCatalog = new Model("idCatalog");
    		$this->idArticle = new Model("idArticle");
    	}

	// déclarations des fonctions get
		function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getJobName(){
		return $this->jobName->getValue();
	}	
	
    	function getIdContact(){
		return $this->idContact->getValue();
	}	
	
    	function getIdContactContract(){
		return $this->idContactContract->getValue();
	}	
	
    	function getContractCode(){
		return $this->contractCode->getValue();
	}	
	
    	function getIdUserContact(){
		return $this->idUserContact->getValue();
	}	
	
    	function getCreationDate(){
		return $this->creationDate->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getState(){
		return $this->state->getValue();
	}	
	
    	function getIdCatalog(){
		return $this->idCatalog->getValue();
	}	
	
    	function getIdArticle(){
		return $this->idArticle->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setJobName($jobName){
	 		$this->jobName->setValue(substr($jobName, 0, 45));
	 	}	
	
    	function setIdContact($idContact){
	 		$this->idContact->setValue($idContact);
	 	}	
	
    	function setIdContactContract($idContactContract){
	 		$this->idContactContract->setValue($idContactContract);
	 	}	
	
    	function setContractCode($contractCode){
	 		$this->contractCode->setValue(substr($contractCode, 0, 10));
	 	}	
	
    	function setIdUserContact($idUserContact){
	 		$this->idUserContact->setValue($idUserContact);
	 	}	
	
    	function setCreationDate($creationDate){
	 		$this->creationDate->setValue($creationDate);
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 255));
	 	}	
	
    	function setState($state){
	 		$this->state->setValue($state);
	 	}	
	
    	function setIdCatalog($idCatalog){
	 		$this->idCatalog->setValue($idCatalog);
	 	}	
	
    	function setIdArticle($idArticle){
	 		$this->idArticle->setValue($idArticle);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->jobName->getValue())) {
				return false;
			}
			
		    		    		    		    		 
			if (is_null($this->idUserContact->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->creationDate->getValue())) {
				return false;
			}
			
		    		    		 
			if (is_null($this->state->getValue())) {
				return false;
			}
			
		    		    		        return true;
	}


}
?>
