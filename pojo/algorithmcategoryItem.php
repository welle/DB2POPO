<?php

require_once('d:\\www\\pojo\\model.php');

class algorithmcategoryItem
{

	// déclarations des variables
		private $idAlgorithmCategory;
    	private $idBusinessUnit;
    	private $name;
    	private $description;
    
	// constructeur
	function algorithmcategoryItem() {
			$this->idAlgorithmCategory = new Model("idAlgorithmCategory");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->name = new Model("name");
    		$this->description = new Model("description");
    	}

	// déclarations des fonctions get
		function getIdAlgorithmCategory(){
		return $this->idAlgorithmCategory->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getName(){
		return $this->name->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdAlgorithmCategory($idAlgorithmCategory){
	 		$this->idAlgorithmCategory->setValue($idAlgorithmCategory);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setName($name){
	 		$this->name->setValue(substr($name, 0, 45));
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 1000));
	 	}	
	
        
    function isNotNullable() {
			    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->name->getValue())) {
				return false;
			}
			
		    		        return true;
	}


}
?>
