<?php

require_once('d:\\www\\pojo\\model.php');

class contactthirdpartyItem
{

	// déclarations des variables
		private $idContact;
    	private $idBusinessUnit;
    	private $validityFrom;
    	private $validityTo;
    	private $custPayCond;
    	private $custStatistics;
    	private $supPayCond;
    	private $supPayTime;
    	private $flgCompensation;
    	private $vatNumber;
    	private $dunningStatus;
    
	// constructeur
	function contactthirdpartyItem() {
			$this->idContact = new Model("idContact");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->validityFrom = new Model("validityFrom");
    		$this->validityTo = new Model("validityTo");
    		$this->custPayCond = new Model("custPayCond");
    		$this->custStatistics = new Model("custStatistics");
    		$this->supPayCond = new Model("supPayCond");
    		$this->supPayTime = new Model("supPayTime");
    		$this->flgCompensation = new Model("flgCompensation");
    		$this->vatNumber = new Model("vatNumber");
    		$this->dunningStatus = new Model("dunningStatus");
    	}

	// déclarations des fonctions get
		function getIdContact(){
		return $this->idContact->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getValidityFrom(){
		return $this->validityFrom->getValue();
	}	
	
    	function getValidityTo(){
		return $this->validityTo->getValue();
	}	
	
    	function getCustPayCond(){
		return $this->custPayCond->getValue();
	}	
	
    	function getCustStatistics(){
		return $this->custStatistics->getValue();
	}	
	
    	function getSupPayCond(){
		return $this->supPayCond->getValue();
	}	
	
    	function getSupPayTime(){
		return $this->supPayTime->getValue();
	}	
	
    	function getFlgCompensation(){
		return $this->flgCompensation->getValue();
	}	
	
    	function getVatNumber(){
		return $this->vatNumber->getValue();
	}	
	
    	function getDunningStatus(){
		return $this->dunningStatus->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdContact($idContact){
	 		$this->idContact->setValue($idContact);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setValidityFrom($validityFrom){
	 		$this->validityFrom->setValue($validityFrom);
	 	}	
	
    	function setValidityTo($validityTo){
	 		$this->validityTo->setValue($validityTo);
	 	}	
	
    	function setCustPayCond($custPayCond){
	 		$this->custPayCond->setValue(substr($custPayCond, 0, 255));
	 	}	
	
    	function setCustStatistics($custStatistics){
	 		$this->custStatistics->setValue(substr($custStatistics, 0, 255));
	 	}	
	
    	function setSupPayCond($supPayCond){
	 		$this->supPayCond->setValue(substr($supPayCond, 0, 255));
	 	}	
	
    	function setSupPayTime($supPayTime){
	 		$this->supPayTime->setValue(substr($supPayTime, 0, 255));
	 	}	
	
    	function setFlgCompensation($flgCompensation){
	 		$this->flgCompensation->setValue($flgCompensation);
	 	}	
	
    	function setVatNumber($vatNumber){
	 		$this->vatNumber->setValue(substr($vatNumber, 0, 20));
	 	}	
	
    	function setDunningStatus($dunningStatus){
	 		$this->dunningStatus->setValue($dunningStatus);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idContact->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->validityFrom->getValue())) {
				return false;
			}
			
		    		    		    		    		    		    		    		    		 
			if (is_null($this->dunningStatus->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
