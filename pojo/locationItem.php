<?php

require_once('d:\\www\\pojo\\model.php');

class locationItem
{

	// déclarations des variables
		private $idLocation;
    	private $name;
    	private $description;
    	private $idBusinessUnit;
    
	// constructeur
	function locationItem() {
			$this->idLocation = new Model("idLocation");
    		$this->name = new Model("name");
    		$this->description = new Model("description");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    	}

	// déclarations des fonctions get
		function getIdLocation(){
		return $this->idLocation->getValue();
	}	
	
    	function getName(){
		return $this->name->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdLocation($idLocation){
	 		$this->idLocation->setValue($idLocation);
	 	}	
	
    	function setName($name){
	 		$this->name->setValue(substr($name, 0, 45));
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 255));
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
        
    function isNotNullable() {
			    		 
			if (is_null($this->name->getValue())) {
				return false;
			}
			
		    		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
