<?php

require_once('d:\\www\\pojo\\model.php');

class businessunitItem
{

	// déclarations des variables
		private $idBusinessUnit;
    	private $name;
    	private $idCompany;
    	private $idParentBusinessUnit;
    	private $idDomain;
    	private $lastConnection;
    	private $isoLegislation;
    	private $companyType;
    	private $useAsTemplate;
    	private $useAsAgent;
    
	// constructeur
	function businessunitItem() {
			$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->name = new Model("name");
    		$this->idCompany = new Model("idCompany");
    		$this->idParentBusinessUnit = new Model("idParentBusinessUnit");
    		$this->idDomain = new Model("idDomain");
    		$this->lastConnection = new Model("lastConnection");
    		$this->isoLegislation = new Model("isoLegislation");
    		$this->companyType = new Model("companyType");
    		$this->useAsTemplate = new Model("useAsTemplate");
    		$this->useAsAgent = new Model("useAsAgent");
    	}

	// déclarations des fonctions get
		function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getName(){
		return $this->name->getValue();
	}	
	
    	function getIdCompany(){
		return $this->idCompany->getValue();
	}	
	
    	function getIdParentBusinessUnit(){
		return $this->idParentBusinessUnit->getValue();
	}	
	
    	function getIdDomain(){
		return $this->idDomain->getValue();
	}	
	
    	function getLastConnection(){
		return $this->lastConnection->getValue();
	}	
	
    	function getIsoLegislation(){
		return $this->isoLegislation->getValue();
	}	
	
    	function getCompanyType(){
		return $this->companyType->getValue();
	}	
	
    	function getUseAsTemplate(){
		return $this->useAsTemplate->getValue();
	}	
	
    	function getUseAsAgent(){
		return $this->useAsAgent->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setName($name){
	 		$this->name->setValue(substr($name, 0, 45));
	 	}	
	
    	function setIdCompany($idCompany){
	 		$this->idCompany->setValue($idCompany);
	 	}	
	
    	function setIdParentBusinessUnit($idParentBusinessUnit){
	 		$this->idParentBusinessUnit->setValue($idParentBusinessUnit);
	 	}	
	
    	function setIdDomain($idDomain){
	 		$this->idDomain->setValue($idDomain);
	 	}	
	
    	function setLastConnection($lastConnection){
	 		$this->lastConnection->setValue($lastConnection);
	 	}	
	
    	function setIsoLegislation($isoLegislation){
	 		$this->isoLegislation->setValue(substr($isoLegislation, 0, 3));
	 	}	
	
    	function setCompanyType($companyType){
	 		$this->companyType->setValue(substr($companyType, 0, 45));
	 	}	
	
    	function setUseAsTemplate($useAsTemplate){
	 		$this->useAsTemplate->setValue($useAsTemplate);
	 	}	
	
    	function setUseAsAgent($useAsAgent){
	 		$this->useAsAgent->setValue($useAsAgent);
	 	}	
	
        
    function isNotNullable() {
			    		 
			if (is_null($this->name->getValue())) {
				return false;
			}
			
		    		    		    		    		    		 
			if (is_null($this->isoLegislation->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->companyType->getValue())) {
				return false;
			}
			
		    		    		        return true;
	}


}
?>
