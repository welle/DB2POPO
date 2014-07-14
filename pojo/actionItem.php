<?php

require_once('d:\\www\\pojo\\model.php');

class actionItem
{

	// déclarations des variables
		private $actionCode;
    	private $idBusinessUnit;
    	private $actionName;
    
	// constructeur
	function actionItem() {
			$this->actionCode = new Model("actionCode");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->actionName = new Model("actionName");
    	}

	// déclarations des fonctions get
		function getActionCode(){
		return $this->actionCode->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getActionName(){
		return $this->actionName->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setActionCode($actionCode){
	 		$this->actionCode->setValue(substr($actionCode, 0, 10));
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setActionName($actionName){
	 		$this->actionName->setValue(substr($actionName, 0, 45));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->actionCode->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		        return true;
	}


}
?>
