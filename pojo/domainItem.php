<?php

require_once('d:\\www\\pojo\\model.php');

class domainItem
{

	// déclarations des variables
		private $idDomain;
    	private $idParentDomain;
    	private $name;
    	private $userName;
    	private $password;
    	private $email;
    
	// constructeur
	function domainItem() {
			$this->idDomain = new Model("idDomain");
    		$this->idParentDomain = new Model("idParentDomain");
    		$this->name = new Model("name");
    		$this->userName = new Model("userName");
    		$this->password = new Model("password");
    		$this->email = new Model("email");
    	}

	// déclarations des fonctions get
		function getIdDomain(){
		return $this->idDomain->getValue();
	}	
	
    	function getIdParentDomain(){
		return $this->idParentDomain->getValue();
	}	
	
    	function getName(){
		return $this->name->getValue();
	}	
	
    	function getUserName(){
		return $this->userName->getValue();
	}	
	
    	function getPassword(){
		return $this->password->getValue();
	}	
	
    	function getEmail(){
		return $this->email->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdDomain($idDomain){
	 		$this->idDomain->setValue($idDomain);
	 	}	
	
    	function setIdParentDomain($idParentDomain){
	 		$this->idParentDomain->setValue($idParentDomain);
	 	}	
	
    	function setName($name){
	 		$this->name->setValue(substr($name, 0, 255));
	 	}	
	
    	function setUserName($userName){
	 		$this->userName->setValue(substr($userName, 0, 45));
	 	}	
	
    	function setPassword($password){
	 		$this->password->setValue(substr($password, 0, 45));
	 	}	
	
    	function setEmail($email){
	 		$this->email->setValue(substr($email, 0, 255));
	 	}	
	
        
    function isNotNullable() {
			    		    		    		    		    		        return true;
	}


}
?>
