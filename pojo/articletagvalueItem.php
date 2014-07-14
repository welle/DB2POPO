<?php

require_once('d:\\www\\pojo\\model.php');

class articletagvalueItem
{

	// déclarations des variables
		private $idArticle;
    	private $idTag;
    	private $tagValue;
    	private $pkFlag;
    
	// constructeur
	function articletagvalueItem() {
			$this->idArticle = new Model("idArticle");
    		$this->idTag = new Model("idTag");
    		$this->tagValue = new Model("tagValue");
    		$this->pkFlag = new Model("pkFlag");
    	}

	// déclarations des fonctions get
		function getIdArticle(){
		return $this->idArticle->getValue();
	}	
	
    	function getIdTag(){
		return $this->idTag->getValue();
	}	
	
    	function getTagValue(){
		return $this->tagValue->getValue();
	}	
	
    	function getPkFlag(){
		return $this->pkFlag->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdArticle($idArticle){
	 		$this->idArticle->setValue($idArticle);
	 	}	
	
    	function setIdTag($idTag){
	 		$this->idTag->setValue($idTag);
	 	}	
	
    	function setTagValue($tagValue){
	 		$this->tagValue->setValue(substr($tagValue, 0, 500));
	 	}	
	
    	function setPkFlag($pkFlag){
	 		$this->pkFlag->setValue($pkFlag);
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idArticle->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idTag->getValue())) {
				return false;
			}
			
		    		    		 
			if (is_null($this->pkFlag->getValue())) {
				return false;
			}
			
		        return true;
	}


}
?>
