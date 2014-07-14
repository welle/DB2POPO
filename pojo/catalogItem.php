<?php

require_once('d:\\www\\pojo\\model.php');

class catalogItem
{

	// déclarations des variables
		private $idCatalog;
    	private $name;
    	private $description;
    	private $idBusinessUnit;
    	private $idTagCategory;
    
	// constructeur
	function catalogItem() {
			$this->idCatalog = new Model("idCatalog");
    		$this->name = new Model("name");
    		$this->description = new Model("description");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->idTagCategory = new Model("idTagCategory");
    	}

	// déclarations des fonctions get
		function getIdCatalog(){
		return $this->idCatalog->getValue();
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
	
    	function getIdTagCategory(){
		return $this->idTagCategory->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdCatalog($idCatalog){
	 		$this->idCatalog->setValue($idCatalog);
	 	}	
	
    	function setName($name){
	 		$this->name->setValue(substr($name, 0, 45));
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 1000));
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setIdTagCategory($idTagCategory){
	 		$this->idTagCategory->setValue($idTagCategory);
	 	}	
	
        
    function isNotNullable() {
			    		    		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		        return true;
	}


}
?>
