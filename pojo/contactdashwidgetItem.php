<?php

require_once('d:\\www\\pojo\\model.php');

class contactdashwidgetItem
{

	// déclarations des variables
		private $idContact;
    	private $idBusinessUnit;
    	private $dashboardName;
    	private $widgetName;
    	private $gridX;
    	private $gridY;
    	private $weightX;
    	private $weightY;
    	private $gridWidth;
    	private $gridHeight;
    
	// constructeur
	function contactdashwidgetItem() {
			$this->idContact = new Model("idContact");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->dashboardName = new Model("dashboardName");
    		$this->widgetName = new Model("widgetName");
    		$this->gridX = new Model("gridX");
    		$this->gridY = new Model("gridY");
    		$this->weightX = new Model("weightX");
    		$this->weightY = new Model("weightY");
    		$this->gridWidth = new Model("gridWidth");
    		$this->gridHeight = new Model("gridHeight");
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
	
    	function getWidgetName(){
		return $this->widgetName->getValue();
	}	
	
    	function getGridX(){
		return $this->gridX->getValue();
	}	
	
    	function getGridY(){
		return $this->gridY->getValue();
	}	
	
    	function getWeightX(){
		return $this->weightX->getValue();
	}	
	
    	function getWeightY(){
		return $this->weightY->getValue();
	}	
	
    	function getGridWidth(){
		return $this->gridWidth->getValue();
	}	
	
    	function getGridHeight(){
		return $this->gridHeight->getValue();
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
	
    	function setWidgetName($widgetName){
	 		$this->widgetName->setValue(substr($widgetName, 0, 255));
	 	}	
	
    	function setGridX($gridX){
	 		$this->gridX->setValue($gridX);
	 	}	
	
    	function setGridY($gridY){
	 		$this->gridY->setValue($gridY);
	 	}	
	
    	function setWeightX($weightX){
	 		$this->weightX->setValue($weightX);
	 	}	
	
    	function setWeightY($weightY){
	 		$this->weightY->setValue($weightY);
	 	}	
	
    	function setGridWidth($gridWidth){
	 		$this->gridWidth->setValue($gridWidth);
	 	}	
	
    	function setGridHeight($gridHeight){
	 		$this->gridHeight->setValue($gridHeight);
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
			
		    		 
			if (is_null($this->widgetName->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->gridX->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->gridY->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->weightX->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->weightY->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->gridWidth->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->gridHeight->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
