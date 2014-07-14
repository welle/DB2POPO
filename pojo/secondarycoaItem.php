<?php

require_once('d:\\www\\pojo\\model.php');

class secondarycoaItem
{

	// déclarations des variables
		private $idSecondaryCOA;
    	private $idBusinessUnit;
    	private $accountExercise;
    	private $name;
    	private $title;
    	private $description;
    	private $linkedApplication;
    	private $compFlag;
    
	// constructeur
	function secondarycoaItem() {
			$this->idSecondaryCOA = new Model("idSecondaryCOA");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->accountExercise = new Model("accountExercise");
    		$this->name = new Model("name");
    		$this->title = new Model("title");
    		$this->description = new Model("description");
    		$this->linkedApplication = new Model("linkedApplication");
    		$this->compFlag = new Model("compFlag");
    	}

	// déclarations des fonctions get
		function getIdSecondaryCOA(){
		return $this->idSecondaryCOA->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getAccountExercise(){
		return $this->accountExercise->getValue();
	}	
	
    	function getName(){
		return $this->name->getValue();
	}	
	
    	function getTitle(){
		return $this->title->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getLinkedApplication(){
		return $this->linkedApplication->getValue();
	}	
	
    	function getCompFlag(){
		return $this->compFlag->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdSecondaryCOA($idSecondaryCOA){
	 		$this->idSecondaryCOA->setValue($idSecondaryCOA);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setAccountExercise($accountExercise){
	 		$this->accountExercise->setValue($accountExercise);
	 	}	
	
    	function setName($name){
	 		$this->name->setValue(substr($name, 0, 45));
	 	}	
	
    	function setTitle($title){
	 		$this->title->setValue(substr($title, 0, 45));
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 255));
	 	}	
	
    	function setLinkedApplication($linkedApplication){
	 		$this->linkedApplication->setValue(substr($linkedApplication, 0, 45));
	 	}	
	
    	function setCompFlag($compFlag){
	 		$this->compFlag->setValue($compFlag);
	 	}	
	
        
    function isNotNullable() {
			    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->accountExercise->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->name->getValue())) {
				return false;
			}
			
		    		    		    		    		 
			if (is_null($this->compFlag->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
