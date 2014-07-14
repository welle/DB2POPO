<?php

require_once('d:\\www\\pojo\\model.php');

class taxrateItem
{

	// déclarations des variables
		private $taxCode;
    	private $companyId;
    	private $startDate;
    	private $endDate;
    	private $rate;
    	private $partExempt;
    	private $partRecup;
    	private $unit;
    	private $qualPosAmount;
    	private $qualPosTax;
    	private $qualNegAmount;
    	private $qualNegTax;
    
	// constructeur
	function taxrateItem() {
			$this->taxCode = new Model("taxCode");
    		$this->companyId = new Model("companyId");
    		$this->startDate = new Model("startDate");
    		$this->endDate = new Model("endDate");
    		$this->rate = new Model("rate");
    		$this->partExempt = new Model("partExempt");
    		$this->partRecup = new Model("partRecup");
    		$this->unit = new Model("unit");
    		$this->qualPosAmount = new Model("qualPosAmount");
    		$this->qualPosTax = new Model("qualPosTax");
    		$this->qualNegAmount = new Model("qualNegAmount");
    		$this->qualNegTax = new Model("qualNegTax");
    	}

	// déclarations des fonctions get
		function getTaxCode(){
		return $this->taxCode->getValue();
	}	
	
    	function getCompanyId(){
		return $this->companyId->getValue();
	}	
	
    	function getStartDate(){
		return $this->startDate->getValue();
	}	
	
    	function getEndDate(){
		return $this->endDate->getValue();
	}	
	
    	function getRate(){
		return $this->rate->getValue();
	}	
	
    	function getPartExempt(){
		return $this->partExempt->getValue();
	}	
	
    	function getPartRecup(){
		return $this->partRecup->getValue();
	}	
	
    	function getUnit(){
		return $this->unit->getValue();
	}	
	
    	function getQualPosAmount(){
		return $this->qualPosAmount->getValue();
	}	
	
    	function getQualPosTax(){
		return $this->qualPosTax->getValue();
	}	
	
    	function getQualNegAmount(){
		return $this->qualNegAmount->getValue();
	}	
	
    	function getQualNegTax(){
		return $this->qualNegTax->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setTaxCode($taxCode){
	 		$this->taxCode->setValue(substr($taxCode, 0, 10));
	 	}	
	
    	function setCompanyId($companyId){
	 		$this->companyId->setValue($companyId);
	 	}	
	
    	function setStartDate($startDate){
	 		$this->startDate->setValue($startDate);
	 	}	
	
    	function setEndDate($endDate){
	 		$this->endDate->setValue($endDate);
	 	}	
	
    	function setRate($rate){
	 		$this->rate->setValue($rate);
	 	}	
	
    	function setPartExempt($partExempt){
	 		$this->partExempt->setValue($partExempt);
	 	}	
	
    	function setPartRecup($partRecup){
	 		$this->partRecup->setValue($partRecup);
	 	}	
	
    	function setUnit($unit){
	 		$this->unit->setValue($unit);
	 	}	
	
    	function setQualPosAmount($qualPosAmount){
	 		$this->qualPosAmount->setValue(substr($qualPosAmount, 0, 10));
	 	}	
	
    	function setQualPosTax($qualPosTax){
	 		$this->qualPosTax->setValue(substr($qualPosTax, 0, 10));
	 	}	
	
    	function setQualNegAmount($qualNegAmount){
	 		$this->qualNegAmount->setValue(substr($qualNegAmount, 0, 10));
	 	}	
	
    	function setQualNegTax($qualNegTax){
	 		$this->qualNegTax->setValue(substr($qualNegTax, 0, 10));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->taxCode->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->companyId->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->startDate->getValue())) {
				return false;
			}
			
		    		    		 
			if (is_null($this->rate->getValue())) {
				return false;
			}
			
		    		    		    		 
			if (is_null($this->unit->getValue())) {
				return false;
			}
			
		    		    		    		    		        return true;
	}


}
?>
