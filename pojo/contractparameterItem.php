<?php

require_once('d:\\www\\pojo\\model.php');

class contractparameterItem
{

	// déclarations des variables
		private $contractCode;
    	private $idBusinessUnit;
    	private $idContact;
    	private $validityFrom;
    	private $parameterName;
    	private $type;
    	private $description;
    	private $periodical;
    	private $idAlgorithmCategory;
    
	// constructeur
	function contractparameterItem() {
			$this->contractCode = new Model("contractCode");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->idContact = new Model("idContact");
    		$this->validityFrom = new Model("validityFrom");
    		$this->parameterName = new Model("parameterName");
    		$this->type = new Model("type");
    		$this->description = new Model("description");
    		$this->periodical = new Model("periodical");
    		$this->idAlgorithmCategory = new Model("idAlgorithmCategory");
    	}

	// déclarations des fonctions get
		function getContractCode(){
		return $this->contractCode->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getIdContact(){
		return $this->idContact->getValue();
	}	
	
    	function getValidityFrom(){
		return $this->validityFrom->getValue();
	}	
	
    	function getParameterName(){
		return $this->parameterName->getValue();
	}	
	
    	function getType(){
		return $this->type->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getPeriodical(){
		return $this->periodical->getValue();
	}	
	
    	function getIdAlgorithmCategory(){
		return $this->idAlgorithmCategory->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setContractCode($contractCode){
	 		$this->contractCode->setValue(substr($contractCode, 0, 10));
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setIdContact($idContact){
	 		$this->idContact->setValue($idContact);
	 	}	
	
    	function setValidityFrom($validityFrom){
	 		$this->validityFrom->setValue($validityFrom);
	 	}	
	
    	function setParameterName($parameterName){
	 		$this->parameterName->setValue(substr($parameterName, 0, 100));
	 	}	
	
    	function setType($type){
	 		$this->type->setValue(substr($type, 0, 20));
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 255));
	 	}	
	
    	function setPeriodical($periodical){
	 		$this->periodical->setValue(substr($periodical, 0, 1));
	 	}	
	
    	function setIdAlgorithmCategory($idAlgorithmCategory){
	 		$this->idAlgorithmCategory->setValue($idAlgorithmCategory);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->contractCode->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idContact->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->validityFrom->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->parameterName->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->type->getValue())) {
				return false;
			}
			
		    		    		 
			if (is_null($this->periodical->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idAlgorithmCategory->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
