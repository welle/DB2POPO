<?php

require_once('d:\\www\\pojo\\model.php');

class amandasettingItem
{

	// déclarations des variables
		private $idBusinessUnit;
    	private $settingKey;
    	private $settingValue;
    
	// constructeur
	function amandasettingItem() {
			$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->settingKey = new Model("settingKey");
    		$this->settingValue = new Model("settingValue");
    	}

	// déclarations des fonctions get
		function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getSettingKey(){
		return $this->settingKey->getValue();
	}	
	
    	function getSettingValue(){
		return $this->settingValue->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setSettingKey($settingKey){
	 		$this->settingKey->setValue(substr($settingKey, 0, 500));
	 	}	
	
    	function setSettingValue($settingValue){
	 		$this->settingValue->setValue(substr($settingValue, 0, 500));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->settingKey->getValue())) {
				return false;
			}
			
		    		        return true;
	}


}
?>
