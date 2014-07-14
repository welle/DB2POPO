<?php

require_once('d:\\www\\pojo\\model.php');

class tagcategoryItem
{

	// déclarations des variables
		private $idTagCategory;
    	private $name;
    	private $description;
    	private $idBusinessUnit;
    	private $pkFlag;
    
	// constructeur
	function tagcategoryItem() {
			$this->idTagCategory = new Model("idTagCategory");
    		$this->name = new Model("name");
    		$this->description = new Model("description");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->pkFlag = new Model("pkFlag");
    	}

	// déclarations des fonctions get
		function getIdTagCategory(){
		return $this->idTagCategory->getValue();
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
	
    	function getPkFlag(){
		return $this->pkFlag->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdTagCategory($idTagCategory){
	 		$this->idTagCategory->setValue($idTagCategory);
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
	
    	function setPkFlag($pkFlag){
	 		$this->pkFlag->setValue($pkFlag);
	 	}	
	
        
    function isNotNullable() {
			    		 
			if (is_null($this->name->getValue())) {
				return false;
			}
			
		    		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->pkFlag->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
