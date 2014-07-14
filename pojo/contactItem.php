<?php

require_once('d:\\www\\pojo\\model.php');

class contactItem
{

	// déclarations des variables
		private $idContact;
    	private $idBusinessUnit;
    	private $validityFrom;
    	private $validityTo;
    	private $contactCode;
    	private $title;
    	private $name1;
    	private $name2;
    	private $name3;
    	private $abbreviation;
    	private $entityType;
    	private $entitySubType;
    	private $category;
    	private $temporary;
    	private $language;
    	private $contactPerson;
    	private $locale;
    	private $comments;
    
	// constructeur
	function contactItem() {
			$this->idContact = new Model("idContact");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->validityFrom = new Model("validityFrom");
    		$this->validityTo = new Model("validityTo");
    		$this->contactCode = new Model("contactCode");
    		$this->title = new Model("title");
    		$this->name1 = new Model("name1");
    		$this->name2 = new Model("name2");
    		$this->name3 = new Model("name3");
    		$this->abbreviation = new Model("abbreviation");
    		$this->entityType = new Model("entityType");
    		$this->entitySubType = new Model("entitySubType");
    		$this->category = new Model("category");
    		$this->temporary = new Model("temporary");
    		$this->language = new Model("language");
    		$this->contactPerson = new Model("contactPerson");
    		$this->locale = new Model("locale");
    		$this->comments = new Model("comments");
    	}

	// déclarations des fonctions get
		function getIdContact(){
		return $this->idContact->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getValidityFrom(){
		return $this->validityFrom->getValue();
	}	
	
    	function getValidityTo(){
		return $this->validityTo->getValue();
	}	
	
    	function getContactCode(){
		return $this->contactCode->getValue();
	}	
	
    	function getTitle(){
		return $this->title->getValue();
	}	
	
    	function getname1(){
		return $this->name1->getValue();
	}	
	
    	function getname2(){
		return $this->name2->getValue();
	}	
	
    	function getname3(){
		return $this->name3->getValue();
	}	
	
    	function getAbbreviation(){
		return $this->abbreviation->getValue();
	}	
	
    	function getEntityType(){
		return $this->entityType->getValue();
	}	
	
    	function getEntitySubType(){
		return $this->entitySubType->getValue();
	}	
	
    	function getCategory(){
		return $this->category->getValue();
	}	
	
    	function getTemporary(){
		return $this->temporary->getValue();
	}	
	
    	function getLanguage(){
		return $this->language->getValue();
	}	
	
    	function getContactPerson(){
		return $this->contactPerson->getValue();
	}	
	
    	function getLocale(){
		return $this->locale->getValue();
	}	
	
    	function getComments(){
		return $this->comments->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdContact($idContact){
	 		$this->idContact->setValue($idContact);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setValidityFrom($validityFrom){
	 		$this->validityFrom->setValue($validityFrom);
	 	}	
	
    	function setValidityTo($validityTo){
	 		$this->validityTo->setValue($validityTo);
	 	}	
	
    	function setContactCode($contactCode){
	 		$this->contactCode->setValue(substr($contactCode, 0, 20));
	 	}	
	
    	function setTitle($title){
	 		$this->title->setValue(substr($title, 0, 10));
	 	}	
	
    	function setname1($name1){
	 		$this->name1->setValue(substr($name1, 0, 255));
	 	}	
	
    	function setname2($name2){
	 		$this->name2->setValue(substr($name2, 0, 255));
	 	}	
	
    	function setname3($name3){
	 		$this->name3->setValue(substr($name3, 0, 255));
	 	}	
	
    	function setAbbreviation($abbreviation){
	 		$this->abbreviation->setValue(substr($abbreviation, 0, 10));
	 	}	
	
    	function setEntityType($entityType){
	 		$this->entityType->setValue($entityType);
	 	}	
	
    	function setEntitySubType($entitySubType){
	 		$this->entitySubType->setValue($entitySubType);
	 	}	
	
    	function setCategory($category){
	 		$this->category->setValue(substr($category, 0, 45));
	 	}	
	
    	function setTemporary($temporary){
	 		$this->temporary->setValue($temporary);
	 	}	
	
    	function setLanguage($language){
	 		$this->language->setValue(substr($language, 0, 5));
	 	}	
	
    	function setContactPerson($contactPerson){
	 		$this->contactPerson->setValue(substr($contactPerson, 0, 255));
	 	}	
	
    	function setLocale($locale){
	 		$this->locale->setValue(substr($locale, 0, 5));
	 	}	
	
    	function setComments($comments){
	 		$this->comments->setValue(substr($comments, 0, 4000));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idContact->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->validityFrom->getValue())) {
				return false;
			}
			
		    		    		    		    		    		    		    		    		 
			if (is_null($this->entityType->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->entitySubType->getValue())) {
				return false;
			}
			
		    		    		 
			if (is_null($this->temporary->getValue())) {
				return false;
			}
			
		    		    		    		    		        return true;
	}


}
?>
