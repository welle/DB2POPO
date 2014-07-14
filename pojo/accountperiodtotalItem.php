<?php

require_once('d:\\www\\pojo\\model.php');

class accountperiodtotalItem
{

	// déclarations des variables
		private $accountNumber;
    	private $idBusinessUnit;
    	private $exercise;
    	private $currencyIsoCode;
    	private $periodId;
    	private $debit;
    	private $credit;
    	private $debitBlocked;
    	private $creditBlocked;
    	private $debitPaid;
    	private $creditPaid;
    	private $debitManual;
    	private $creditManual;
    	private $debitInvoice;
    	private $creditInvoice;
    	private $debitPaidDraft;
    	private $creditPaidDraft;
    	private $debitManualDraft;
    	private $creditManualDraft;
    	private $debitInvoiceDraft;
    	private $creditInvoiceDraft;
    	private $transactionCounter;
    
	// constructeur
	function accountperiodtotalItem() {
			$this->accountNumber = new Model("accountNumber");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->exercise = new Model("exercise");
    		$this->currencyIsoCode = new Model("currencyIsoCode");
    		$this->periodId = new Model("periodId");
    		$this->debit = new Model("debit");
    		$this->credit = new Model("credit");
    		$this->debitBlocked = new Model("debitBlocked");
    		$this->creditBlocked = new Model("creditBlocked");
    		$this->debitPaid = new Model("debitPaid");
    		$this->creditPaid = new Model("creditPaid");
    		$this->debitManual = new Model("debitManual");
    		$this->creditManual = new Model("creditManual");
    		$this->debitInvoice = new Model("debitInvoice");
    		$this->creditInvoice = new Model("creditInvoice");
    		$this->debitPaidDraft = new Model("debitPaidDraft");
    		$this->creditPaidDraft = new Model("creditPaidDraft");
    		$this->debitManualDraft = new Model("debitManualDraft");
    		$this->creditManualDraft = new Model("creditManualDraft");
    		$this->debitInvoiceDraft = new Model("debitInvoiceDraft");
    		$this->creditInvoiceDraft = new Model("creditInvoiceDraft");
    		$this->transactionCounter = new Model("transactionCounter");
    	}

	// déclarations des fonctions get
		function getAccountNumber(){
		return $this->accountNumber->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getExercise(){
		return $this->exercise->getValue();
	}	
	
    	function getCurrencyIsoCode(){
		return $this->currencyIsoCode->getValue();
	}	
	
    	function getPeriodId(){
		return $this->periodId->getValue();
	}	
	
    	function getDebit(){
		return $this->debit->getValue();
	}	
	
    	function getCredit(){
		return $this->credit->getValue();
	}	
	
    	function getDebitBlocked(){
		return $this->debitBlocked->getValue();
	}	
	
    	function getCreditBlocked(){
		return $this->creditBlocked->getValue();
	}	
	
    	function getDebitPaid(){
		return $this->debitPaid->getValue();
	}	
	
    	function getCreditPaid(){
		return $this->creditPaid->getValue();
	}	
	
    	function getDebitManual(){
		return $this->debitManual->getValue();
	}	
	
    	function getCreditManual(){
		return $this->creditManual->getValue();
	}	
	
    	function getDebitInvoice(){
		return $this->debitInvoice->getValue();
	}	
	
    	function getCreditInvoice(){
		return $this->creditInvoice->getValue();
	}	
	
    	function getDebitPaidDraft(){
		return $this->debitPaidDraft->getValue();
	}	
	
    	function getCreditPaidDraft(){
		return $this->creditPaidDraft->getValue();
	}	
	
    	function getDebitManualDraft(){
		return $this->debitManualDraft->getValue();
	}	
	
    	function getCreditManualDraft(){
		return $this->creditManualDraft->getValue();
	}	
	
    	function getDebitInvoiceDraft(){
		return $this->debitInvoiceDraft->getValue();
	}	
	
    	function getCreditInvoiceDraft(){
		return $this->creditInvoiceDraft->getValue();
	}	
	
    	function getTransactionCounter(){
		return $this->transactionCounter->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setAccountNumber($accountNumber){
	 		$this->accountNumber->setValue(substr($accountNumber, 0, 20));
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setExercise($exercise){
	 		$this->exercise->setValue($exercise);
	 	}	
	
    	function setCurrencyIsoCode($currencyIsoCode){
	 		$this->currencyIsoCode->setValue(substr($currencyIsoCode, 0, 10));
	 	}	
	
    	function setPeriodId($periodId){
	 		$this->periodId->setValue($periodId);
	 	}	
	
    	function setDebit($debit){
	 		$this->debit->setValue($debit);
	 	}	
	
    	function setCredit($credit){
	 		$this->credit->setValue($credit);
	 	}	
	
    	function setDebitBlocked($debitBlocked){
	 		$this->debitBlocked->setValue($debitBlocked);
	 	}	
	
    	function setCreditBlocked($creditBlocked){
	 		$this->creditBlocked->setValue($creditBlocked);
	 	}	
	
    	function setDebitPaid($debitPaid){
	 		$this->debitPaid->setValue($debitPaid);
	 	}	
	
    	function setCreditPaid($creditPaid){
	 		$this->creditPaid->setValue($creditPaid);
	 	}	
	
    	function setDebitManual($debitManual){
	 		$this->debitManual->setValue($debitManual);
	 	}	
	
    	function setCreditManual($creditManual){
	 		$this->creditManual->setValue($creditManual);
	 	}	
	
    	function setDebitInvoice($debitInvoice){
	 		$this->debitInvoice->setValue($debitInvoice);
	 	}	
	
    	function setCreditInvoice($creditInvoice){
	 		$this->creditInvoice->setValue($creditInvoice);
	 	}	
	
    	function setDebitPaidDraft($debitPaidDraft){
	 		$this->debitPaidDraft->setValue($debitPaidDraft);
	 	}	
	
    	function setCreditPaidDraft($creditPaidDraft){
	 		$this->creditPaidDraft->setValue($creditPaidDraft);
	 	}	
	
    	function setDebitManualDraft($debitManualDraft){
	 		$this->debitManualDraft->setValue($debitManualDraft);
	 	}	
	
    	function setCreditManualDraft($creditManualDraft){
	 		$this->creditManualDraft->setValue($creditManualDraft);
	 	}	
	
    	function setDebitInvoiceDraft($debitInvoiceDraft){
	 		$this->debitInvoiceDraft->setValue($debitInvoiceDraft);
	 	}	
	
    	function setCreditInvoiceDraft($creditInvoiceDraft){
	 		$this->creditInvoiceDraft->setValue($creditInvoiceDraft);
	 	}	
	
    	function setTransactionCounter($transactionCounter){
	 		$this->transactionCounter->setValue($transactionCounter);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->accountNumber->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->exercise->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->currencyIsoCode->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->periodId->getValue())) {
				return false;
			}
			
		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		    		        return true;
	}


}
?>
