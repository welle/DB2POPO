<?php

require_once('d:\\www\\pojo\\model.php');

class contactemployeeswissItem
{

	// déclarations des variables
		private $idContact;
    	private $idBusinessUnit;
    	private $validityFrom;
    	private $validityTo;
    	private $numAVS;
    	private $permitType;
    	private $permitNumber;
    	private $permitExpiry;
    	private $oldAVS;
    	private $unknownAVS;
    	private $drivingPermitType;
    	private $drivingPermitNumber;
    	private $drivingPermitObtention;
    	private $jobLocation;
    	private $function;
    	private $nbHoursPerWeek;
    	private $nbHolidays;
    	private $occupationRate;
    	private $unitHolidays;
    	private $bankName;
    	private $bankAddress;
    	private $bankPostCode;
    	private $bankTown;
    	private $bankIban;
    	private $bankAccount;
    	private $bankAccountOwner;
    	private $bankAccountOwnerAddress;
    	private $postAccountNumber;
    	private $postAccountOwner;
    	private $postAccountOwnerAddress;
    	private $paymentForm;
    	private $paymentType;
    	private $bankBic;
    
	// constructeur
	function contactemployeeswissItem() {
			$this->idContact = new Model("idContact");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->validityFrom = new Model("validityFrom");
    		$this->validityTo = new Model("validityTo");
    		$this->numAVS = new Model("numAVS");
    		$this->permitType = new Model("permitType");
    		$this->permitNumber = new Model("permitNumber");
    		$this->permitExpiry = new Model("permitExpiry");
    		$this->oldAVS = new Model("oldAVS");
    		$this->unknownAVS = new Model("unknownAVS");
    		$this->drivingPermitType = new Model("drivingPermitType");
    		$this->drivingPermitNumber = new Model("drivingPermitNumber");
    		$this->drivingPermitObtention = new Model("drivingPermitObtention");
    		$this->jobLocation = new Model("jobLocation");
    		$this->function = new Model("function");
    		$this->nbHoursPerWeek = new Model("nbHoursPerWeek");
    		$this->nbHolidays = new Model("nbHolidays");
    		$this->occupationRate = new Model("occupationRate");
    		$this->unitHolidays = new Model("unitHolidays");
    		$this->bankName = new Model("bankName");
    		$this->bankAddress = new Model("bankAddress");
    		$this->bankPostCode = new Model("bankPostCode");
    		$this->bankTown = new Model("bankTown");
    		$this->bankIban = new Model("bankIban");
    		$this->bankAccount = new Model("bankAccount");
    		$this->bankAccountOwner = new Model("bankAccountOwner");
    		$this->bankAccountOwnerAddress = new Model("bankAccountOwnerAddress");
    		$this->postAccountNumber = new Model("postAccountNumber");
    		$this->postAccountOwner = new Model("postAccountOwner");
    		$this->postAccountOwnerAddress = new Model("postAccountOwnerAddress");
    		$this->paymentForm = new Model("paymentForm");
    		$this->paymentType = new Model("paymentType");
    		$this->bankBic = new Model("bankBic");
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
	
    	function getNumAVS(){
		return $this->numAVS->getValue();
	}	
	
    	function getPermitType(){
		return $this->permitType->getValue();
	}	
	
    	function getPermitNumber(){
		return $this->permitNumber->getValue();
	}	
	
    	function getPermitExpiry(){
		return $this->permitExpiry->getValue();
	}	
	
    	function getOldAVS(){
		return $this->oldAVS->getValue();
	}	
	
    	function getUnknownAVS(){
		return $this->unknownAVS->getValue();
	}	
	
    	function getDrivingPermitType(){
		return $this->drivingPermitType->getValue();
	}	
	
    	function getDrivingPermitNumber(){
		return $this->drivingPermitNumber->getValue();
	}	
	
    	function getDrivingPermitObtention(){
		return $this->drivingPermitObtention->getValue();
	}	
	
    	function getJobLocation(){
		return $this->jobLocation->getValue();
	}	
	
    	function getFunction(){
		return $this->function->getValue();
	}	
	
    	function getNbHoursPerWeek(){
		return $this->nbHoursPerWeek->getValue();
	}	
	
    	function getNbHolidays(){
		return $this->nbHolidays->getValue();
	}	
	
    	function getOccupationRate(){
		return $this->occupationRate->getValue();
	}	
	
    	function getUnitHolidays(){
		return $this->unitHolidays->getValue();
	}	
	
    	function getBankName(){
		return $this->bankName->getValue();
	}	
	
    	function getBankAddress(){
		return $this->bankAddress->getValue();
	}	
	
    	function getBankPostCode(){
		return $this->bankPostCode->getValue();
	}	
	
    	function getBankTown(){
		return $this->bankTown->getValue();
	}	
	
    	function getBankIban(){
		return $this->bankIban->getValue();
	}	
	
    	function getBankAccount(){
		return $this->bankAccount->getValue();
	}	
	
    	function getBankAccountOwner(){
		return $this->bankAccountOwner->getValue();
	}	
	
    	function getBankAccountOwnerAddress(){
		return $this->bankAccountOwnerAddress->getValue();
	}	
	
    	function getPostAccountNumber(){
		return $this->postAccountNumber->getValue();
	}	
	
    	function getPostAccountOwner(){
		return $this->postAccountOwner->getValue();
	}	
	
    	function getPostAccountOwnerAddress(){
		return $this->postAccountOwnerAddress->getValue();
	}	
	
    	function getPaymentForm(){
		return $this->paymentForm->getValue();
	}	
	
    	function getPaymentType(){
		return $this->paymentType->getValue();
	}	
	
    	function getBankBic(){
		return $this->bankBic->getValue();
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
	
    	function setNumAVS($numAVS){
	 		$this->numAVS->setValue(substr($numAVS, 0, 255));
	 	}	
	
    	function setPermitType($permitType){
	 		$this->permitType->setValue($permitType);
	 	}	
	
    	function setPermitNumber($permitNumber){
	 		$this->permitNumber->setValue(substr($permitNumber, 0, 255));
	 	}	
	
    	function setPermitExpiry($permitExpiry){
	 		$this->permitExpiry->setValue($permitExpiry);
	 	}	
	
    	function setOldAVS($oldAVS){
	 		$this->oldAVS->setValue(substr($oldAVS, 0, 255));
	 	}	
	
    	function setUnknownAVS($unknownAVS){
	 		$this->unknownAVS->setValue($unknownAVS);
	 	}	
	
    	function setDrivingPermitType($drivingPermitType){
	 		$this->drivingPermitType->setValue($drivingPermitType);
	 	}	
	
    	function setDrivingPermitNumber($drivingPermitNumber){
	 		$this->drivingPermitNumber->setValue(substr($drivingPermitNumber, 0, 255));
	 	}	
	
    	function setDrivingPermitObtention($drivingPermitObtention){
	 		$this->drivingPermitObtention->setValue($drivingPermitObtention);
	 	}	
	
    	function setJobLocation($jobLocation){
	 		$this->jobLocation->setValue(substr($jobLocation, 0, 255));
	 	}	
	
    	function setFunction($function){
	 		$this->function->setValue(substr($function, 0, 255));
	 	}	
	
    	function setNbHoursPerWeek($nbHoursPerWeek){
	 		$this->nbHoursPerWeek->setValue($nbHoursPerWeek);
	 	}	
	
    	function setNbHolidays($nbHolidays){
	 		$this->nbHolidays->setValue($nbHolidays);
	 	}	
	
    	function setOccupationRate($occupationRate){
	 		$this->occupationRate->setValue($occupationRate);
	 	}	
	
    	function setUnitHolidays($unitHolidays){
	 		$this->unitHolidays->setValue($unitHolidays);
	 	}	
	
    	function setBankName($bankName){
	 		$this->bankName->setValue(substr($bankName, 0, 255));
	 	}	
	
    	function setBankAddress($bankAddress){
	 		$this->bankAddress->setValue(substr($bankAddress, 0, 255));
	 	}	
	
    	function setBankPostCode($bankPostCode){
	 		$this->bankPostCode->setValue(substr($bankPostCode, 0, 45));
	 	}	
	
    	function setBankTown($bankTown){
	 		$this->bankTown->setValue(substr($bankTown, 0, 255));
	 	}	
	
    	function setBankIban($bankIban){
	 		$this->bankIban->setValue(substr($bankIban, 0, 100));
	 	}	
	
    	function setBankAccount($bankAccount){
	 		$this->bankAccount->setValue(substr($bankAccount, 0, 100));
	 	}	
	
    	function setBankAccountOwner($bankAccountOwner){
	 		$this->bankAccountOwner->setValue(substr($bankAccountOwner, 0, 255));
	 	}	
	
    	function setBankAccountOwnerAddress($bankAccountOwnerAddress){
	 		$this->bankAccountOwnerAddress->setValue(substr($bankAccountOwnerAddress, 0, 255));
	 	}	
	
    	function setPostAccountNumber($postAccountNumber){
	 		$this->postAccountNumber->setValue(substr($postAccountNumber, 0, 100));
	 	}	
	
    	function setPostAccountOwner($postAccountOwner){
	 		$this->postAccountOwner->setValue(substr($postAccountOwner, 0, 255));
	 	}	
	
    	function setPostAccountOwnerAddress($postAccountOwnerAddress){
	 		$this->postAccountOwnerAddress->setValue(substr($postAccountOwnerAddress, 0, 255));
	 	}	
	
    	function setPaymentForm($paymentForm){
	 		$this->paymentForm->setValue($paymentForm);
	 	}	
	
    	function setPaymentType($paymentType){
	 		$this->paymentType->setValue($paymentType);
	 	}	
	
    	function setBankBic($bankBic){
	 		$this->bankBic->setValue(substr($bankBic, 0, 45));
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
			
		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		        return true;
	}


}
?>
