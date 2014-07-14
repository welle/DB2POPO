<?php

require_once('d:\\www\\pojo\\model.php');

class tagItem
{

	// déclarations des variables
		private $idTag;
    	private $idTagCategory;
    	private $name;
    	private $shortName;
    	private $longName;
    	private $description;
    	private $type;
    	private $pk;
    	private $constraints;
    
	// constructeur
	function tagItem() {
			$this->idTag = new Model("idTag");
    		$this->idTagCategory = new Model("idTagCategory");
    		$this->name = new Model("name");
    		$this->shortName = new Model("shortName");
    		$this->longName = new Model("longName");
    		$this->description = new Model("description");
    		$this->type = new Model("type");
    		$this->pk = new Model("pk");
    		$this->constraints = new Model("constraints");
    	}

	// déclarations des fonctions get
		function getIdTag(){
		return $this->idTag->getValue();
	}	
	
    	function getIdTagCategory(){
		return $this->idTagCategory->getValue();
	}	
	
    	function getName(){
		return $this->name->getValue();
	}	
	
    	function getShortName(){
		return $this->shortName->getValue();
	}	
	
    	function getLongName(){
		return $this->longName->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getType(){
		return $this->type->getValue();
	}	
	
    	function getPk(){
		return $this->pk->getValue();
	}	
	
    	function getConstraints(){
		return $this->constraints->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdTag($idTag){
	 		$this->idTag->setValue($idTag);
	 	}	
	
    	function setIdTagCategory($idTagCategory){
	 		$this->idTagCategory->setValue($idTagCategory);
	 	}	
	
    	function setName($name){
	 		$this->name->setValue(substr($name, 0, 45));
	 	}	
	
    	function setShortName($shortName){
	 		$this->shortName->setValue(substr($shortName, 0, 45));
	 	}	
	
    	function setLongName($longName){
	 		$this->longName->setValue(substr($longName, 0, 255));
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 255));
	 	}	
	
    	function setType($type){
	 		$this->type->setValue($type);
	 	}	
	
    	function setPk($pk){
	 		$this->pk->setValue($pk);
	 	}	
	
    	function setConstraints($constraints){
	 		$this->constraints->setValue(substr($constraints, 0, 45));
	 	}	
	
        
    function isNotNullable() {
			    		 
			if (is_null($this->idTagCategory->getValue())) {
				return false;
			}
			
		    		    		    		    		    		 
			if (is_null($this->type->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->pk->getValue())) {
				return false;
			}
			
		    		        return true;
	}


}
?>
