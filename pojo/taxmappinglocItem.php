<?php

require_once('d:\\www\\pojo\\model.php');

class taxmappinglocItem
{

	// déclarations des variables
		private $taxCode;
    	private $companyId;
    	private $locale;
    	private $localizedName;
    	private $localizedDescription;
    	private $lastModified;
    
	// constructeur
	function taxmappinglocItem() {
			$this->taxCode = new Model("taxCode");
    		$this->companyId = new Model("companyId");
    		$this->locale = new Model("locale");
    		$this->localizedName = new Model("localizedName");
    		$this->localizedDescription = new Model("localizedDescription");
    		$this->lastModified = new Model("lastModified");
    	}

	// déclarations des fonctions get
		function getTaxCode(){
		return $this->taxCode->getValue();
	}	
	
    	function getCompanyId(){
		return $this->companyId->getValue();
	}	
	
    	function getLocale(){
		return $this->locale->getValue();
	}	
	
    	function getLocalizedName(){
		return $this->localizedName->getValue();
	}	
	
    	function getLocalizedDescription(){
		return $this->localizedDescription->getValue();
	}	
	
    	function getLastModified(){
		return $this->lastModified->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setTaxCode($taxCode){
	 		$this->taxCode->setValue(substr($taxCode, 0, 10));
	 	}	
	
    	function setCompanyId($companyId){
	 		$this->companyId->setValue($companyId);
	 	}	
	
    	function setLocale($locale){
	 		$this->locale->setValue(substr($locale, 0, 50));
	 	}	
	
    	function setLocalizedName($localizedName){
	 		$this->localizedName->setValue(substr($localizedName, 0, 45));
	 	}	
	
    	function setLocalizedDescription($localizedDescription){
	 		$this->localizedDescription->setValue(substr($localizedDescription, 0, 255));
	 	}	
	
    	function setLastModified($lastModified){
	 		$this->lastModified->setValue($lastModified);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->taxCode->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->companyId->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->locale->getValue())) {
				return false;
			}
			
		    		    		    		        return true;
	}


}
?>
