<?php

require_once('d:\\www\\pojo\\model.php');

class taxmappingItem
{

	// déclarations des variables
		private $taxCode;
    	private $companyId;
    	private $name;
    	private $description;
    	private $flagExport;
    	private $flagExcluded;
    	private $flagInactive;
    
	// constructeur
	function taxmappingItem() {
			$this->taxCode = new Model("taxCode");
    		$this->companyId = new Model("companyId");
    		$this->name = new Model("name");
    		$this->description = new Model("description");
    		$this->flagExport = new Model("flagExport");
    		$this->flagExcluded = new Model("flagExcluded");
    		$this->flagInactive = new Model("flagInactive");
    	}

	// déclarations des fonctions get
		function getTaxCode(){
		return $this->taxCode->getValue();
	}	
	
    	function getCompanyId(){
		return $this->companyId->getValue();
	}	
	
    	function getName(){
		return $this->name->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getFlagExport(){
		return $this->flagExport->getValue();
	}	
	
    	function getFlagExcluded(){
		return $this->flagExcluded->getValue();
	}	
	
    	function getFlagInactive(){
		return $this->flagInactive->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setTaxCode($taxCode){
	 		$this->taxCode->setValue(substr($taxCode, 0, 10));
	 	}	
	
    	function setCompanyId($companyId){
	 		$this->companyId->setValue($companyId);
	 	}	
	
    	function setName($name){
	 		$this->name->setValue(substr($name, 0, 45));
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 255));
	 	}	
	
    	function setFlagExport($flagExport){
	 		$this->flagExport->setValue($flagExport);
	 	}	
	
    	function setFlagExcluded($flagExcluded){
	 		$this->flagExcluded->setValue($flagExcluded);
	 	}	
	
    	function setFlagInactive($flagInactive){
	 		$this->flagInactive->setValue($flagInactive);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->taxCode->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->companyId->getValue())) {
				return false;
			}
			
		    		    		    		 
			if (is_null($this->flagExport->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->flagExcluded->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->flagInactive->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
