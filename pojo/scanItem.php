<?php

require_once('d:\\www\\pojo\\model.php');

class scanItem
{

	// déclarations des variables
		private $idScan;
    	private $idContact;
    	private $idBusinessUnit;
    	private $file;
    	private $name;
    	private $type;
    	private $description;
    	private $counter;
    	private $creationDate;
    	private $flgIsManage;
    	private $flgIsAvailable;
    
	// constructeur
	function scanItem() {
			$this->idScan = new Model("idScan");
    		$this->idContact = new Model("idContact");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->file = new Model("file");
    		$this->name = new Model("name");
    		$this->type = new Model("type");
    		$this->description = new Model("description");
    		$this->counter = new Model("counter");
    		$this->creationDate = new Model("creationDate");
    		$this->flgIsManage = new Model("flgIsManage");
    		$this->flgIsAvailable = new Model("flgIsAvailable");
    	}

	// déclarations des fonctions get
		function getIdScan(){
		return $this->idScan->getValue();
	}	
	
    	function getIdContact(){
		return $this->idContact->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getFile(){
		return $this->file->getValue();
	}	
	
    	function getName(){
		return $this->name->getValue();
	}	
	
    	function getType(){
		return $this->type->getValue();
	}	
	
    	function getDescription(){
		return $this->description->getValue();
	}	
	
    	function getCounter(){
		return $this->counter->getValue();
	}	
	
    	function getCreationDate(){
		return $this->creationDate->getValue();
	}	
	
    	function getFlgIsManage(){
		return $this->flgIsManage->getValue();
	}	
	
    	function getFlgIsAvailable(){
		return $this->flgIsAvailable->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdScan($idScan){
	 		$this->idScan->setValue($idScan);
	 	}	
	
    	function setIdContact($idContact){
	 		$this->idContact->setValue($idContact);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setFile($file){
	 		$this->file->setValue($file);
	 	}	
	
    	function setName($name){
	 		$this->name->setValue(substr($name, 0, 45));
	 	}	
	
    	function setType($type){
	 		$this->type->setValue(substr($type, 0, 45));
	 	}	
	
    	function setDescription($description){
	 		$this->description->setValue(substr($description, 0, 255));
	 	}	
	
    	function setCounter($counter){
	 		$this->counter->setValue($counter);
	 	}	
	
    	function setCreationDate($creationDate){
	 		$this->creationDate->setValue($creationDate);
	 	}	
	
    	function setFlgIsManage($flgIsManage){
	 		$this->flgIsManage->setValue($flgIsManage);
	 	}	
	
    	function setFlgIsAvailable($flgIsAvailable){
	 		$this->flgIsAvailable->setValue($flgIsAvailable);
	 	}	
	
        
    function isNotNullable() {
			    		 
			if (is_null($this->idContact->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->file->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->name->getValue())) {
				return false;
			}
			
		    		    		    		 
			if (is_null($this->counter->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->creationDate->getValue())) {
				return false;
			}
			
		    		    		        return true;
	}


}
?>
