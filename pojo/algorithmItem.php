<?php

require_once('d:\\www\\pojo\\model.php');

class algorithmItem
{

	// déclarations des variables
		private $idBusinessUnit;
    	private $algorithmName;
    	private $idContact;
    	private $validityFrom;
    	private $validityTo;
    	private $roundoff;
    	private $idActionTarget;
    	private $text;
    	private $definition;
    	private $dependencies;
    	private $result;
    	private $printoutCode;
    	private $printoutType;
    	private $ledger;
    	private $adding;
    	private $account;
    	private $finalAlgo;
    	private $periodical;
    	private $returnType;
    	private $abstractFlag;
    	private $writableFlag;
    	private $idempotentFlag;
    	private $codeId;
    	private $idAlgorithmCategory;
    
	// constructeur
	function algorithmItem() {
			$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->algorithmName = new Model("algorithmName");
    		$this->idContact = new Model("idContact");
    		$this->validityFrom = new Model("validityFrom");
    		$this->validityTo = new Model("validityTo");
    		$this->roundoff = new Model("roundoff");
    		$this->idActionTarget = new Model("idActionTarget");
    		$this->text = new Model("text");
    		$this->definition = new Model("definition");
    		$this->dependencies = new Model("dependencies");
    		$this->result = new Model("result");
    		$this->printoutCode = new Model("printoutCode");
    		$this->printoutType = new Model("printoutType");
    		$this->ledger = new Model("ledger");
    		$this->adding = new Model("adding");
    		$this->account = new Model("account");
    		$this->finalAlgo = new Model("finalAlgo");
    		$this->periodical = new Model("periodical");
    		$this->returnType = new Model("returnType");
    		$this->abstractFlag = new Model("abstractFlag");
    		$this->writableFlag = new Model("writableFlag");
    		$this->idempotentFlag = new Model("idempotentFlag");
    		$this->codeId = new Model("codeId");
    		$this->idAlgorithmCategory = new Model("idAlgorithmCategory");
    	}

	// déclarations des fonctions get
		function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getAlgorithmName(){
		return $this->algorithmName->getValue();
	}	
	
    	function getIdContact(){
		return $this->idContact->getValue();
	}	
	
    	function getValidityFrom(){
		return $this->validityFrom->getValue();
	}	
	
    	function getValidityTo(){
		return $this->validityTo->getValue();
	}	
	
    	function getRoundoff(){
		return $this->roundoff->getValue();
	}	
	
    	function getIdActionTarget(){
		return $this->idActionTarget->getValue();
	}	
	
    	function getText(){
		return $this->text->getValue();
	}	
	
    	function getDefinition(){
		return $this->definition->getValue();
	}	
	
    	function getDependencies(){
		return $this->dependencies->getValue();
	}	
	
    	function getResult(){
		return $this->result->getValue();
	}	
	
    	function getPrintoutCode(){
		return $this->printoutCode->getValue();
	}	
	
    	function getPrintoutType(){
		return $this->printoutType->getValue();
	}	
	
    	function getLedger(){
		return $this->ledger->getValue();
	}	
	
    	function getAdding(){
		return $this->adding->getValue();
	}	
	
    	function getAccount(){
		return $this->account->getValue();
	}	
	
    	function getFinalAlgo(){
		return $this->finalAlgo->getValue();
	}	
	
    	function getPeriodical(){
		return $this->periodical->getValue();
	}	
	
    	function getReturnType(){
		return $this->returnType->getValue();
	}	
	
    	function getAbstractFlag(){
		return $this->abstractFlag->getValue();
	}	
	
    	function getWritableFlag(){
		return $this->writableFlag->getValue();
	}	
	
    	function getIdempotentFlag(){
		return $this->idempotentFlag->getValue();
	}	
	
    	function getCodeId(){
		return $this->codeId->getValue();
	}	
	
    	function getIdAlgorithmCategory(){
		return $this->idAlgorithmCategory->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setAlgorithmName($algorithmName){
	 		$this->algorithmName->setValue(substr($algorithmName, 0, 100));
	 	}	
	
    	function setIdContact($idContact){
	 		$this->idContact->setValue($idContact);
	 	}	
	
    	function setValidityFrom($validityFrom){
	 		$this->validityFrom->setValue($validityFrom);
	 	}	
	
    	function setValidityTo($validityTo){
	 		$this->validityTo->setValue($validityTo);
	 	}	
	
    	function setRoundoff($roundoff){
	 		$this->roundoff->setValue($roundoff);
	 	}	
	
    	function setIdActionTarget($idActionTarget){
	 		$this->idActionTarget->setValue($idActionTarget);
	 	}	
	
    	function setText($text){
	 		$this->text->setValue(substr($text, 0, 100));
	 	}	
	
    	function setDefinition($definition){
	 		$this->definition->setValue(substr($definition, 0, 10000));
	 	}	
	
    	function setDependencies($dependencies){
	 		$this->dependencies->setValue(substr($dependencies, 0, 100));
	 	}	
	
    	function setResult($result){
	 		$this->result->setValue($result);
	 	}	
	
    	function setPrintoutCode($printoutCode){
	 		$this->printoutCode->setValue(substr($printoutCode, 0, 10));
	 	}	
	
    	function setPrintoutType($printoutType){
	 		$this->printoutType->setValue(substr($printoutType, 0, 10));
	 	}	
	
    	function setLedger($ledger){
	 		$this->ledger->setValue(substr($ledger, 0, 10));
	 	}	
	
    	function setAdding($adding){
	 		$this->adding->setValue(substr($adding, 0, 10));
	 	}	
	
    	function setAccount($account){
	 		$this->account->setValue(substr($account, 0, 20));
	 	}	
	
    	function setFinalAlgo($finalAlgo){
	 		$this->finalAlgo->setValue($finalAlgo);
	 	}	
	
    	function setPeriodical($periodical){
	 		$this->periodical->setValue($periodical);
	 	}	
	
    	function setReturnType($returnType){
	 		$this->returnType->setValue(substr($returnType, 0, 20));
	 	}	
	
    	function setAbstractFlag($abstractFlag){
	 		$this->abstractFlag->setValue($abstractFlag);
	 	}	
	
    	function setWritableFlag($writableFlag){
	 		$this->writableFlag->setValue($writableFlag);
	 	}	
	
    	function setIdempotentFlag($idempotentFlag){
	 		$this->idempotentFlag->setValue($idempotentFlag);
	 	}	
	
    	function setCodeId($codeId){
	 		$this->codeId->setValue(substr($codeId, 0, 10));
	 	}	
	
    	function setIdAlgorithmCategory($idAlgorithmCategory){
	 		$this->idAlgorithmCategory->setValue($idAlgorithmCategory);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->algorithmName->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idContact->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->validityFrom->getValue())) {
				return false;
			}
			
		    		    		    		    		    		    		    		    		    		    		    		    		    		 
			if (is_null($this->finalAlgo->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->periodical->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->returnType->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->abstractFlag->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->writableFlag->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idempotentFlag->getValue())) {
				return false;
			}
			
		    		    		 
			if (is_null($this->idAlgorithmCategory->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
