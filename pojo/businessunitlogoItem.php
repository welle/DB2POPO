<?php

require_once('d:\\www\\pojo\\model.php');

class businessunitlogoItem
{

	// déclarations des variables
		private $idBusinessUnit;
    	private $type;
    	private $logo;
    	private $logoThumbnail;
    	private $name;
    
	// constructeur
	function businessunitlogoItem() {
			$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->type = new Model("type");
    		$this->logo = new Model("logo");
    		$this->logoThumbnail = new Model("logoThumbnail");
    		$this->name = new Model("name");
    	}

	// déclarations des fonctions get
		function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
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
		function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
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
			 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->type->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->logo->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->logoThumbnail->getValue())) {
				return false;
			}
			
		    		        return true;
	}


}
?>
