<?php

require_once('d:\\www\\pojo\\model.php');

class algorithmresultItem
{

	// déclarations des variables
		private $idBusinessUnit;
    	private $batchNumber;
    	private $sequenceNumber;
    	private $resultDate;
    	private $algorithmName;
    	private $idContact;
    	private $text;
    	private $valueDouble;
    	private $valueInt;
    	private $valueString;
    	private $state;
    
	// constructeur
	function algorithmresultItem() {
			$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->batchNumber = new Model("batchNumber");
    		$this->sequenceNumber = new Model("sequenceNumber");
    		$this->resultDate = new Model("resultDate");
    		$this->algorithmName = new Model("algorithmName");
    		$this->idContact = new Model("idContact");
    		$this->text = new Model("text");
    		$this->valueDouble = new Model("valueDouble");
    		$this->valueInt = new Model("valueInt");
    		$this->valueString = new Model("valueString");
    		$this->state = new Model("state");
    	}

	// déclarations des fonctions get
		function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getBatchNumber(){
		return $this->batchNumber->getValue();
	}	
	
    	function getSequenceNumber(){
		return $this->sequenceNumber->getValue();
	}	
	
    	function getResultDate(){
		return $this->resultDate->getValue();
	}	
	
    	function getAlgorithmName(){
		return $this->algorithmName->getValue();
	}	
	
    	function getIdContact(){
		return $this->idContact->getValue();
	}	
	
    	function getText(){
		return $this->text->getValue();
	}	
	
    	function getValueDouble(){
		return $this->valueDouble->getValue();
	}	
	
    	function getValueInt(){
		return $this->valueInt->getValue();
	}	
	
    	function getValueString(){
		return $this->valueString->getValue();
	}	
	
    	function getState(){
		return $this->state->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setBatchNumber($batchNumber){
	 		$this->batchNumber->setValue(substr($batchNumber, 0, 30));
	 	}	
	
    	function setSequenceNumber($sequenceNumber){
	 		$this->sequenceNumber->setValue($sequenceNumber);
	 	}	
	
    	function setResultDate($resultDate){
	 		$this->resultDate->setValue($resultDate);
	 	}	
	
    	function setAlgorithmName($algorithmName){
	 		$this->algorithmName->setValue(substr($algorithmName, 0, 100));
	 	}	
	
    	function setIdContact($idContact){
	 		$this->idContact->setValue($idContact);
	 	}	
	
    	function setText($text){
	 		$this->text->setValue(substr($text, 0, 4000));
	 	}	
	
    	function setValueDouble($valueDouble){
	 		$this->valueDouble->setValue($valueDouble);
	 	}	
	
    	function setValueInt($valueInt){
	 		$this->valueInt->setValue($valueInt);
	 	}	
	
    	function setValueString($valueString){
	 		$this->valueString->setValue(substr($valueString, 0, 255));
	 	}	
	
    	function setState($state){
	 		$this->state->setValue($state);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->batchNumber->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->sequenceNumber->getValue())) {
				return false;
			}
			
		    		    		 
			if (is_null($this->algorithmName->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idContact->getValue())) {
				return false;
			}
			
		    		    		    		    		    		 
			if (is_null($this->state->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
