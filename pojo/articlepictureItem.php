<?php

require_once('d:\\www\\pojo\\model.php');

class articlepictureItem
{

	// déclarations des variables
		private $idArticlePicture;
    	private $idArticle;
    	private $locale;
    	private $name;
    	private $description;
    	private $picture;
    	private $pictureThumbnail;
    	private $pictureMedium;
    
	// constructeur
	function articlepictureItem() {
			$this->idArticlePicture = new Model("idArticlePicture");
    		$this->idArticle = new Model("idArticle");
    		$this->locale = new Model("locale");
    		$this->name = new Model("name");
    		$this->description = new Model("description");
    		$this->picture = new Model("picture");
    		$this->pictureThumbnail = new Model("pictureThumbnail");
    		$this->pictureMedium = new Model("pictureMedium");
    	}

	// déclarations des fonctions get
		function getIdArticlePicture(){
		return $this->idArticlePicture->getValue();
	}	
	
    	function getIdArticle(){
		return $this->idArticle->getValue();
	}	
	
    	function getLocale(){
		return $this->locale->getValue();
	}	
	
    	function getName(){
		return $this->name->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getPicture(){
		return $this->picture->getValue();
	}	
	
    	function getPictureThumbnail(){
		return $this->pictureThumbnail->getValue();
	}	
	
    	function getPictureMedium(){
		return $this->pictureMedium->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdArticlePicture($idArticlePicture){
	 		$this->idArticlePicture->setValue($idArticlePicture);
	 	}	
	
    	function setIdArticle($idArticle){
	 		$this->idArticle->setValue($idArticle);
	 	}	
	
    	function setLocale($locale){
	 		$this->locale->setValue(substr($locale, 0, 50));
	 	}	
	
    	function setName($name){
	 		$this->name->setValue(substr($name, 0, 45));
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 1000));
	 	}	
	
    	function setPicture($picture){
	 		$this->picture->setValue($picture);
	 	}	
	
    	function setPictureThumbnail($pictureThumbnail){
	 		$this->pictureThumbnail->setValue($pictureThumbnail);
	 	}	
	
    	function setPictureMedium($pictureMedium){
	 		$this->pictureMedium->setValue($pictureMedium);
	 	}	
	
        
    function isNotNullable() {
			    		 
			if (is_null($this->idArticle->getValue())) {
				return false;
			}
			
		    		    		    		    		 
			if (is_null($this->picture->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->pictureThumbnail->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->pictureMedium->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
