<?php

require_once('d:\\www\\pojo\\model.php');

class invoiceaddressItem
{

	// déclarations des variables
		private $idInvoiceAddress;
    	private $street1;
    	private $street2;
    	private $street3;
    	private $street4;
    	private $street5;
    	private $street6;
    	private $postCode;
    	private $city;
    	private $country;
    
	// constructeur
	function invoiceaddressItem() {
			$this->idInvoiceAddress = new Model("idInvoiceAddress");
    		$this->street1 = new Model("street1");
    		$this->street2 = new Model("street2");
    		$this->street3 = new Model("street3");
    		$this->street4 = new Model("street4");
    		$this->street5 = new Model("street5");
    		$this->street6 = new Model("street6");
    		$this->postCode = new Model("postCode");
    		$this->city = new Model("city");
    		$this->country = new Model("country");
    	}

	// déclarations des fonctions get
		function getIdInvoiceAddress(){
		return $this->idInvoiceAddress->getValue();
	}	
	
    	function getstreet1(){
		return $this->street1->getValue();
	}	
	
    	function getstreet2(){
		return $this->street2->getValue();
	}	
	
    	function getstreet3(){
		return $this->street3->getValue();
	}	
	
    	function getstreet4(){
		return $this->street4->getValue();
	}	
	
    	function getstreet5(){
		return $this->street5->getValue();
	}	
	
    	function getstreet6(){
		return $this->street6->getValue();
	}	
	
    	function getPostCode(){
		return $this->postCode->getValue();
	}	
	
    	function getCity(){
		return $this->city->getValue();
	}	
	
    	function getCountry(){
		return $this->country->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdInvoiceAddress($idInvoiceAddress){
	 		$this->idInvoiceAddress->setValue($idInvoiceAddress);
	 	}	
	
    	function setstreet1($street1){
	 		$this->street1->setValue(substr($street1, 0, 60));
	 	}	
	
    	function setstreet2($street2){
	 		$this->street2->setValue(substr($street2, 0, 60));
	 	}	
	
    	function setstreet3($street3){
	 		$this->street3->setValue(substr($street3, 0, 60));
	 	}	
	
    	function setstreet4($street4){
	 		$this->street4->setValue(substr($street4, 0, 60));
	 	}	
	
    	function setstreet5($street5){
	 		$this->street5->setValue(substr($street5, 0, 60));
	 	}	
	
    	function setstreet6($street6){
	 		$this->street6->setValue(substr($street6, 0, 60));
	 	}	
	
    	function setPostCode($postCode){
	 		$this->postCode->setValue(substr($postCode, 0, 16));
	 	}	
	
    	function setCity($city){
	 		$this->city->setValue(substr($city, 0, 45));
	 	}	
	
    	function setCountry($country){
	 		$this->country->setValue(substr($country, 0, 45));
	 	}	
	
        
    function isNotNullable() {
			    		    		    		    		    		    		    		    		    		        return true;
	}


}
?>
