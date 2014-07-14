<?php

require_once('d:\\www\\pojo\\model.php');

class contactaddressItem
{

	// déclarations des variables
		private $idContact;
    	private $idBusinessUnit;
    	private $idAddress;
    	private $validityFrom;
    	private $validityTo;
    	private $address1;
    	private $address2;
    	private $address3;
    	private $address4;
    	private $streetName;
    	private $streetNumber;
    	private $postalCode;
    	private $town;
    	private $county;
    	private $country;
    	private $addressType;
    	private $category;
    	private $longitude;
    	private $latitude;
    	private $centreLongitude;
    	private $centreLatitude;
    	private $scale;
    	private $mapType;
    	private $isoCountry;
    	private $postbox;
    
	// constructeur
	function contactaddressItem() {
			$this->idContact = new Model("idContact");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->idAddress = new Model("idAddress");
    		$this->validityFrom = new Model("validityFrom");
    		$this->validityTo = new Model("validityTo");
    		$this->address1 = new Model("address1");
    		$this->address2 = new Model("address2");
    		$this->address3 = new Model("address3");
    		$this->address4 = new Model("address4");
    		$this->streetName = new Model("streetName");
    		$this->streetNumber = new Model("streetNumber");
    		$this->postalCode = new Model("postalCode");
    		$this->town = new Model("town");
    		$this->county = new Model("county");
    		$this->country = new Model("country");
    		$this->addressType = new Model("addressType");
    		$this->category = new Model("category");
    		$this->longitude = new Model("longitude");
    		$this->latitude = new Model("latitude");
    		$this->centreLongitude = new Model("centreLongitude");
    		$this->centreLatitude = new Model("centreLatitude");
    		$this->scale = new Model("scale");
    		$this->mapType = new Model("mapType");
    		$this->isoCountry = new Model("isoCountry");
    		$this->postbox = new Model("postbox");
    	}

	// déclarations des fonctions get
		function getIdContact(){
		return $this->idContact->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getIdAddress(){
		return $this->idAddress->getValue();
	}	
	
    	function getValidityFrom(){
		return $this->validityFrom->getValue();
	}	
	
    	function getValidityTo(){
		return $this->validityTo->getValue();
	}	
	
    	function getaddress1(){
		return $this->address1->getValue();
	}	
	
    	function getaddress2(){
		return $this->address2->getValue();
	}	
	
    	function getaddress3(){
		return $this->address3->getValue();
	}	
	
    	function getaddress4(){
		return $this->address4->getValue();
	}	
	
    	function getStreetName(){
		return $this->streetName->getValue();
	}	
	
    	function getStreetNumber(){
		return $this->streetNumber->getValue();
	}	
	
    	function getPostalCode(){
		return $this->postalCode->getValue();
	}	
	
    	function getTown(){
		return $this->town->getValue();
	}	
	
    	function getCounty(){
		return $this->county->getValue();
	}	
	
    	function getCountry(){
		return $this->country->getValue();
	}	
	
    	function getAddressType(){
		return $this->addressType->getValue();
	}	
	
    	function getCategory(){
		return $this->category->getValue();
	}	
	
    	function getLongitude(){
		return $this->longitude->getValue();
	}	
	
    	function getLatitude(){
		return $this->latitude->getValue();
	}	
	
    	function getCentreLongitude(){
		return $this->centreLongitude->getValue();
	}	
	
    	function getCentreLatitude(){
		return $this->centreLatitude->getValue();
	}	
	
    	function getScale(){
		return $this->scale->getValue();
	}	
	
    	function getMapType(){
		return $this->mapType->getValue();
	}	
	
    	function getIsoCountry(){
		return $this->isoCountry->getValue();
	}	
	
    	function getPostbox(){
		return $this->postbox->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdContact($idContact){
	 		$this->idContact->setValue($idContact);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setIdAddress($idAddress){
	 		$this->idAddress->setValue($idAddress);
	 	}	
	
    	function setValidityFrom($validityFrom){
	 		$this->validityFrom->setValue($validityFrom);
	 	}	
	
    	function setValidityTo($validityTo){
	 		$this->validityTo->setValue($validityTo);
	 	}	
	
    	function setaddress1($address1){
	 		$this->address1->setValue(substr($address1, 0, 255));
	 	}	
	
    	function setaddress2($address2){
	 		$this->address2->setValue(substr($address2, 0, 255));
	 	}	
	
    	function setaddress3($address3){
	 		$this->address3->setValue(substr($address3, 0, 255));
	 	}	
	
    	function setaddress4($address4){
	 		$this->address4->setValue(substr($address4, 0, 255));
	 	}	
	
    	function setStreetName($streetName){
	 		$this->streetName->setValue(substr($streetName, 0, 255));
	 	}	
	
    	function setStreetNumber($streetNumber){
	 		$this->streetNumber->setValue(substr($streetNumber, 0, 45));
	 	}	
	
    	function setPostalCode($postalCode){
	 		$this->postalCode->setValue(substr($postalCode, 0, 20));
	 	}	
	
    	function setTown($town){
	 		$this->town->setValue(substr($town, 0, 45));
	 	}	
	
    	function setCounty($county){
	 		$this->county->setValue(substr($county, 0, 45));
	 	}	
	
    	function setCountry($country){
	 		$this->country->setValue(substr($country, 0, 45));
	 	}	
	
    	function setAddressType($addressType){
	 		$this->addressType->setValue($addressType);
	 	}	
	
    	function setCategory($category){
	 		$this->category->setValue(substr($category, 0, 10));
	 	}	
	
    	function setLongitude($longitude){
	 		$this->longitude->setValue($longitude);
	 	}	
	
    	function setLatitude($latitude){
	 		$this->latitude->setValue($latitude);
	 	}	
	
    	function setCentreLongitude($centreLongitude){
	 		$this->centreLongitude->setValue($centreLongitude);
	 	}	
	
    	function setCentreLatitude($centreLatitude){
	 		$this->centreLatitude->setValue($centreLatitude);
	 	}	
	
    	function setScale($scale){
	 		$this->scale->setValue($scale);
	 	}	
	
    	function setMapType($mapType){
	 		$this->mapType->setValue(substr($mapType, 0, 45));
	 	}	
	
    	function setIsoCountry($isoCountry){
	 		$this->isoCountry->setValue(substr($isoCountry, 0, 3));
	 	}	
	
    	function setPostbox($postbox){
	 		$this->postbox->setValue(substr($postbox, 0, 45));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idContact->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idAddress->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->validityFrom->getValue())) {
				return false;
			}
			
		    		    		    		    		    		    		    		    		    		    		    		    		 
			if (is_null($this->addressType->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->category->getValue())) {
				return false;
			}
			
		    		    		    		    		    		    		    		    		        return true;
	}


}
?>
