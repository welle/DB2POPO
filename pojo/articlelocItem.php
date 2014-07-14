<?php

require_once('d:\\www\\pojo\\model.php');

class articlelocItem
{

	// déclarations des variables
		private $idArticle;
    	private $locale;
    	private $nameLoc;
    	private $descriptionLoc;
    	private $notesLoc;
    
	// constructeur
	function articlelocItem() {
			$this->idArticle = new Model("idArticle");
    		$this->locale = new Model("locale");
    		$this->nameLoc = new Model("nameLoc");
    		$this->descriptionLoc = new Model("descriptionLoc");
    		$this->notesLoc = new Model("notesLoc");
    	}

	// déclarations des fonctions get
		function getIdArticle(){
		return $this->idArticle->getValue();
	}	
	
    	function getLocale(){
		return $this->locale->getValue();
	}	
	
    	function getNameLoc(){
		return $this->nameLoc->getValue();
	}	
	
    	function getDescriptionLoc(){
		return $this->descriptionLoc->getValue();
	}	
	
    	function getNotesLoc(){
		return $this->notesLoc->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdArticle($idArticle){
	 		$this->idArticle->setValue($idArticle);
	 	}	
	
    	function setLocale($locale){
	 		$this->locale->setValue(substr($locale, 0, 50));
	 	}	
	
    	function setNameLoc($nameLoc){
	 		$this->nameLoc->setValue(substr($nameLoc, 0, 45));
	 	}	
	
    	function setDescriptionLoc($descriptionLoc){
	 		$this->descriptionLoc->setValue(substr($descriptionLoc, 0, 1000));
	 	}	
	
    	function setNotesLoc($notesLoc){
	 		$this->notesLoc->setValue(substr($notesLoc, 0, 4000));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idArticle->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->locale->getValue())) {
				return false;
			}
			
		    		    		    		        return true;
	}


}
?>
