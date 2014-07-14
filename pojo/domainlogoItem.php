<?php

require_once('d:\\www\\pojo\\model.php');

class domainlogoItem
{

	// déclarations des variables
		private $idDomain;
    	private $type;
    	private $logo;
    	private $logoThumbnail;
    	private $name;
    
	// constructeur
	function domainlogoItem() {
			$this->idDomain = new Model("idDomain");
    		$this->type = new Model("type");
    		$this->logo = new Model("logo");
    		$this->logoThumbnail = new Model("logoThumbnail");
    		$this->name = new Model("name");
    	}

	// déclarations des fonctions get
		function getIdDomain(){
		return $this->idDomain->getValue();
	}	
	
    	function getType(){
		return $this->type->getValue();
	}	
	
    	function getLogo(){
		return $this->logo->getValue();
	}	
	
    	function getLogoThumbnail(){
		return $this->logoThumbnail->getValue();
	}	
	
    	function getName(){
		return $this->name->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdDomain($idDomain){
	 		$this->idDomain->setValue($idDomain);
	 	}	
	
    	function setType($type){
	 		$this->type->setValue($type);
	 	}	
	
    	function setLogo($logo){
	 		$this->logo->setValue($logo);
	 	}	
	
    	function setLogoThumbnail($logoThumbnail){
	 		$this->logoThumbnail->setValue($logoThumbnail);
	 	}	
	
    	function setName($name){
	 		$this->name->setValue(substr($name, 0, 45));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idDomain->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->type->getValue())) {
				return false;
			}
			
		    		    		    		        return true;
	}


}
?>
