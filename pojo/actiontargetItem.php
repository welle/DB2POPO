<?php

require_once('d:\\www\\pojo\\model.php');

class actiontargetItem
{

	// déclarations des variables
		private $idActionTarget;
    	private $idBusinessUnit;
    	private $actionCode;
    	private $targetCode;
    
	// constructeur
	function actiontargetItem() {
			$this->idActionTarget = new Model("idActionTarget");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->actionCode = new Model("actionCode");
    		$this->targetCode = new Model("targetCode");
    	}

	// déclarations des fonctions get
		function getIdActionTarget(){
		return $this->idActionTarget->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getActionCode(){
		return $this->actionCode->getValue();
	}	
	
    	function getTargetCode(){
		return $this->targetCode->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdActionTarget($idActionTarget){
	 		$this->idActionTarget->setValue($idActionTarget);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setActionCode($actionCode){
	 		$this->actionCode->setValue(substr($actionCode, 0, 10));
	 	}	
	
    	function setTargetCode($targetCode){
	 		$this->targetCode->setValue(substr($targetCode, 0, 10));
	 	}	
	
        
    function isNotNullable() {
			    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->actionCode->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->targetCode->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
