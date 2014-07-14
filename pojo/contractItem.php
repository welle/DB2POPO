<?php

require_once('d:\\www\\pojo\\model.php');

class contractItem
{

	// déclarations des variables
		private $code;
    	private $idBusinessUnit;
    	private $idContact;
    	private $validityFrom;
    	private $validityTo;
    	private $name;
    	private $description;
    	private $algorithmName;
    	private $queryDefinition;
    	private $periodicity;
    	private $text;
    
	// constructeur
	function contractItem() {
			$this->code = new Model("code");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->idContact = new Model("idContact");
    		$this->validityFrom = new Model("validityFrom");
    		$this->validityTo = new Model("validityTo");
    		$this->name = new Model("name");
    		$this->description = new Model("description");
    		$this->algorithmName = new Model("algorithmName");
    		$this->queryDefinition = new Model("queryDefinition");
    		$this->periodicity = new Model("periodicity");
    		$this->text = new Model("text");
    	}

	// déclarations des fonctions get
		function getCode(){
		return $this->code->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getIdContact(){
		return $this->idContact->getValue();
	}	
	
    	function getValidityFrom(){
		return $this->validityFrom->getValue();
	}	
	
    	function getValidityTo(){
		return $this->validityTo->getValue();
	}	
	
    	function getName(){
		return $this->name->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getAlgorithmName(){
		return $this->algorithmName->getValue();
	}	
	
    	function getQueryDefinition(){
		return $this->queryDefinition->getValue();
	}	
	
    	function getPeriodicity(){
		return $this->periodicity->getValue();
	}	
	
    	function getText(){
		return $this->text->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setCode($code){
	 		$this->code->setValue(substr($code, 0, 10));
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setIdContact($idContact){
	 		$this->idContact->setValue($idContact);
	 	}	
	
    	function setValidityFrom($validityFrom){
	 		$this->validityFrom->setValue($validityFrom);
	 	}	
	
    	function setValidityTo($validityTo){
	 		$this->validityTo->setValue($validityTo);
	 	}	
	
    	function setName($name){
	 		$this->name->setValue(substr($name, 0, 45));
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 255));
	 	}	
	
    	function setAlgorithmName($algorithmName){
	 		$this->algorithmName->setValue(substr($algorithmName, 0, 100));
	 	}	
	
    	function setQueryDefinition($queryDefinition){
	 		$this->queryDefinition->setValue(substr($queryDefinition, 0, 100));
	 	}	
	
    	function setPeriodicity($periodicity){
	 		$this->periodicity->setValue($periodicity);
	 	}	
	
    	function setText($text){
	 		$this->text->setValue($text);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->code->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idContact->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->validityFrom->getValue())) {
				return false;
			}
			
		    		    		    		    		    		    		    		        return true;
	}


}
?>
