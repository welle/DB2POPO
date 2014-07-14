<?php

require_once('d:\\www\\pojo\\model.php');

class contactdashboardItem
{

	// déclarations des variables
		private $idContact;
    	private $idBusinessUnit;
    	private $dashboardName;
    	private $columnCount;
    
	// constructeur
	function contactdashboardItem() {
			$this->idContact = new Model("idContact");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->dashboardName = new Model("dashboardName");
    		$this->columnCount = new Model("columnCount");
    	}

	// déclarations des fonctions get
		function getIdContact(){
		return $this->idContact->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getDashboardName(){
		return $this->dashboardName->getValue();
	}	
	
    	function getColumnCount(){
		return $this->columnCount->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdContact($idContact){
	 		$this->idContact->setValue($idContact);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setDashboardName($dashboardName){
	 		$this->dashboardName->setValue(substr($dashboardName, 0, 45));
	 	}	
	
    	function setColumnCount($columnCount){
	 		$this->columnCount->setValue($columnCount);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idContact->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->dashboardName->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->columnCount->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
