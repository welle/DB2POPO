<?php

require_once('d:\\www\\pojo\\model.php');

class contactloginItem
{

	// déclarations des variables
		private $idContact;
    	private $idBusinessUnit;
    	private $name;
    	private $login;
    	private $password;
    	private $email;
    	private $roles;
    
	// constructeur
	function contactloginItem() {
			$this->idContact = new Model("idContact");
    		$this->idBusinessUnit = new Model("idBusinessUnit");
    		$this->name = new Model("name");
    		$this->login = new Model("login");
    		$this->password = new Model("password");
    		$this->email = new Model("email");
    		$this->roles = new Model("roles");
    	}

	// déclarations des fonctions get
		function getIdContact(){
		return $this->idContact->getValue();
	}	
	
    	function getIdBusinessUnit(){
		return $this->idBusinessUnit->getValue();
	}	
	
    	function getName(){
		return $this->name->getValue();
	}	
	
    	function getLogin(){
		return $this->login->getValue();
	}	
	
    	function getPassword(){
		return $this->password->getValue();
	}	
	
    	function getEmail(){
		return $this->email->getValue();
	}	
	
    	function getRoles(){
		return $this->roles->getValue();
	}	
	
    
	// déclarations des fonctions set
		function setIdContact($idContact){
	 		$this->idContact->setValue($idContact);
	 	}	
	
    	function setIdBusinessUnit($idBusinessUnit){
	 		$this->idBusinessUnit->setValue($idBusinessUnit);
	 	}	
	
    	function setName($name){
	 		$this->name->setValue(substr($name, 0, 45));
	 	}	
	
    	function setLogin($login){
	 		$this->login->setValue(substr($login, 0, 45));
	 	}	
	
    	function setPassword($password){
	 		$this->password->setValue(substr($password, 0, 45));
	 	}	
	
    	function setEmail($email){
	 		$this->email->setValue(substr($email, 0, 45));
	 	}	
	
    	function setRoles($roles){
	 		$this->roles->setValue(substr($roles, 0, 500));
	 	}	
	
        
    function isNotNullable() {
			 
			if (is_null($this->idContact->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->idBusinessUnit->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->name->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->login->getValue())) {
				return false;
			}
			
		    		 
			if (is_null($this->password->getValue())) {
				return false;
			}
			
		    		    		        return true;
	}


}
?>
