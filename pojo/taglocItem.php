<?php

require_once('d:\\www\\pojo\\model.php');

class taglocItem
{

	// déclarations des variables
		private $idTag;
    	private $locale;
    	private $shortNameLoc;
    	private $longNameLoc;
    	private $descriptionLoc;
    
	// constructeur
	function taglocItem() {
			$this->idTag = new Model("idTag");
    		$this->locale = new Model("locale");
    		$this->shortNameLoc = new Model("shortNameLoc");
    		$this->longNameLoc = new Model("longNameLoc");
    		$this->descriptionLoc = new Model("descriptionLoc");
    	}

	// déclarations des fonctions get
		function getIdTag(){
		return $this->idTag->getValue();
	}	
	
    	function getLocale(){
		return $this->locale->getValue();
	}	
	
    	function getShortNameLoc(){
		return $this->shortNameLoc->getValue();
	}	
	
    	function getLongNameLoc(){
		return $this->longNameLoc->getValue();
	}	
	
    	function getDescriptionLoc(){
		return $this->descriptionLoc->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdTag($idTag){
	 		$this->idTag->setValue($idTag);
	 	}	
	
    	function setLocale($locale){
	 		$this->locale->setValue(substr($locale, 0, 50));
	 	}	
	
    	function setShortNameLoc($shortNameLoc){
	 		$this->shortNameLoc->setValue(substr($shortNameLoc, 0, 45));
	 	}	
	
    	function setLongNameLoc($longNameLoc){
	 		$this->longNameLoc->setValue(substr($longNameLoc, 0, 255));
	 	}	
	
    	function setDescriptionLoc($descriptionLoc){
	 		$this->descriptionLoc->setValue(substr($descriptionLoc, 0, 255));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idTag->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->locale->getValue())) {
				return false;
			}
			
		    		    		    		        return true;
	}


}
?>
