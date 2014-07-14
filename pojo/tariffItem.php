<?php

require_once('d:\\www\\pojo\\model.php');

class tariffItem
{

	// déclarations des variables
		private $idBusinessUnit;
    	private $idActionTarget;
    	private $contractCode;
    	private $validityFrom;
    	private $validityTo;
    	private $description;
    	private $unitType;
    	private $invoicableAmount;
    	private $invoicablePriceType;
    	private $invoicableAccount1Def1;
    	private $invoicableAccount2Def1;
    	private $invoicableRepartition1;
    	private $invoicableAccount1Def2;
    	private $invoicableAccount2Def2;
    	private $invoicableRepartition2;
    	private $internalCostAmount;
    	private $internalCostPriceType;
    	private $internalCostAccount1Def1;
    	private $internalCostAccount2Def1;
    	private $internalCostRepartition1;
    	private $internalCostAccount1Def2;
    	private $internalCostAccount2Def2;
    	private $internalCostRepartition2;
    
	// constructeur
	function tariffItem() {
			$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->idActionTarget = new Model("idActionTarget");
    		$this->contractCode = new Model("contractCode");
    		$this->validityFrom = new Model("validityFrom");
    		$this->validityTo = new Model("validityTo");
    		$this->description = new Model("description");
    		$this->unitType = new Model("unitType");
    		$this->invoicableAmount = new Model("invoicableAmount");
    		$this->invoicablePriceType = new Model("invoicablePriceType");
    		$this->invoicableAccount1Def1 = new Model("invoicableAccount1Def1");
    		$this->invoicableAccount2Def1 = new Model("invoicableAccount2Def1");
    		$this->invoicableRepartition1 = new Model("invoicableRepartition1");
    		$this->invoicableAccount1Def2 = new Model("invoicableAccount1Def2");
    		$this->invoicableAccount2Def2 = new Model("invoicableAccount2Def2");
    		$this->invoicableRepartition2 = new Model("invoicableRepartition2");
    		$this->internalCostAmount = new Model("internalCostAmount");
    		$this->internalCostPriceType = new Model("internalCostPriceType");
    		$this->internalCostAccount1Def1 = new Model("internalCostAccount1Def1");
    		$this->internalCostAccount2Def1 = new Model("internalCostAccount2Def1");
    		$this->internalCostRepartition1 = new Model("internalCostRepartition1");
    		$this->internalCostAccount1Def2 = new Model("internalCostAccount1Def2");
    		$this->internalCostAccount2Def2 = new Model("internalCostAccount2Def2");
    		$this->internalCostRepartition2 = new Model("internalCostRepartition2");
    	}

	// déclarations des fonctions get
		function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getIdActionTarget(){
		return $this->idActionTarget->getValue();
	}	
	
    	function getContractCode(){
		return $this->contractCode->getValue();
	}	
	
    	function getValidityFrom(){
		return $this->validityFrom->getValue();
	}	
	
    	function getValidityTo(){
		return $this->validityTo->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getUnitType(){
		return $this->unitType->getValue();
	}	
	
    	function getInvoicableAmount(){
		return $this->invoicableAmount->getValue();
	}	
	
    	function getInvoicablePriceType(){
		return $this->invoicablePriceType->getValue();
	}	
	
    	function getInvoicableAccount1Def1(){
		return $this->invoicableAccount1Def1->getValue();
	}	
	
    	function getInvoicableAccount2Def1(){
		return $this->invoicableAccount2Def1->getValue();
	}	
	
    	function getinvoicablerepartition1(){
		return $this->invoicableRepartition1->getValue();
	}	
	
    	function getInvoicableAccount1Def2(){
		return $this->invoicableAccount1Def2->getValue();
	}	
	
    	function getInvoicableAccount2Def2(){
		return $this->invoicableAccount2Def2->getValue();
	}	
	
    	function getinvoicablerepartition2(){
		return $this->invoicableRepartition2->getValue();
	}	
	
    	function getInternalCostAmount(){
		return $this->internalCostAmount->getValue();
	}	
	
    	function getInternalCostPriceType(){
		return $this->internalCostPriceType->getValue();
	}	
	
    	function getInternalCostAccount1Def1(){
		return $this->internalCostAccount1Def1->getValue();
	}	
	
    	function getInternalCostAccount2Def1(){
		return $this->internalCostAccount2Def1->getValue();
	}	
	
    	function getinternalcostrepartition1(){
		return $this->internalCostRepartition1->getValue();
	}	
	
    	function getInternalCostAccount1Def2(){
		return $this->internalCostAccount1Def2->getValue();
	}	
	
    	function getInternalCostAccount2Def2(){
		return $this->internalCostAccount2Def2->getValue();
	}	
	
    	function getinternalcostrepartition2(){
		return $this->internalCostRepartition2->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setIdActionTarget($idActionTarget){
	 		$this->idActionTarget->setValue($idActionTarget);
	 	}	
	
    	function setContractCode($contractCode){
	 		$this->contractCode->setValue(substr($contractCode, 0, 10));
	 	}	
	
    	function setValidityFrom($validityFrom){
	 		$this->validityFrom->setValue($validityFrom);
	 	}	
	
    	function setValidityTo($validityTo){
	 		$this->validityTo->setValue($validityTo);
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 255));
	 	}	
	
    	function setUnitType($unitType){
	 		$this->unitType->setValue($unitType);
	 	}	
	
    	function setInvoicableAmount($invoicableAmount){
	 		$this->invoicableAmount->setValue(substr($invoicableAmount, 0, 10));
	 	}	
	
    	function setInvoicablePriceType($invoicablePriceType){
	 		$this->invoicablePriceType->setValue($invoicablePriceType);
	 	}	
	
    	function setInvoicableAccount1Def1($invoicableAccount1Def1){
	 		$this->invoicableAccount1Def1->setValue(substr($invoicableAccount1Def1, 0, 20));
	 	}	
	
    	function setInvoicableAccount2Def1($invoicableAccount2Def1){
	 		$this->invoicableAccount2Def1->setValue(substr($invoicableAccount2Def1, 0, 20));
	 	}	
	
    	function setinvoicablerepartition1($invoicableRepartition1){
	 		$this->invoicableRepartition1->setValue(substr($invoicableRepartition1, 0, 10));
	 	}	
	
    	function setInvoicableAccount1Def2($invoicableAccount1Def2){
	 		$this->invoicableAccount1Def2->setValue(substr($invoicableAccount1Def2, 0, 20));
	 	}	
	
    	function setInvoicableAccount2Def2($invoicableAccount2Def2){
	 		$this->invoicableAccount2Def2->setValue(substr($invoicableAccount2Def2, 0, 20));
	 	}	
	
    	function setinvoicablerepartition2($invoicableRepartition2){
	 		$this->invoicableRepartition2->setValue(substr($invoicableRepartition2, 0, 10));
	 	}	
	
    	function setInternalCostAmount($internalCostAmount){
	 		$this->internalCostAmount->setValue(substr($internalCostAmount, 0, 10));
	 	}	
	
    	function setInternalCostPriceType($internalCostPriceType){
	 		$this->internalCostPriceType->setValue($internalCostPriceType);
	 	}	
	
    	function setInternalCostAccount1Def1($internalCostAccount1Def1){
	 		$this->internalCostAccount1Def1->setValue(substr($internalCostAccount1Def1, 0, 20));
	 	}	
	
    	function setInternalCostAccount2Def1($internalCostAccount2Def1){
	 		$this->internalCostAccount2Def1->setValue(substr($internalCostAccount2Def1, 0, 20));
	 	}	
	
    	function setinternalcostrepartition1($internalCostRepartition1){
	 		$this->internalCostRepartition1->setValue(substr($internalCostRepartition1, 0, 10));
	 	}	
	
    	function setInternalCostAccount1Def2($internalCostAccount1Def2){
	 		$this->internalCostAccount1Def2->setValue(substr($internalCostAccount1Def2, 0, 20));
	 	}	
	
    	function setInternalCostAccount2Def2($internalCostAccount2Def2){
	 		$this->internalCostAccount2Def2->setValue(substr($internalCostAccount2Def2, 0, 20));
	 	}	
	
    	function setinternalcostrepartition2($internalCostRepartition2){
	 		$this->internalCostRepartition2->setValue(substr($internalCostRepartition2, 0, 10));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idActionTarget->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->contractCode->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->validityFrom->getValue())) {
				return false;
			}
			
		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		        return true;
	}


}
?>
