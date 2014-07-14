<?php
	require_once ('./typemysqlconstants.php');

	class phpType {
		public $type;
		public $length;
	};
	
	class mysqlColumn {
		public $type;
		public $minRange;
		public $maxRange;
	};
	
	function registerDBType($type) {
		$dbType = new phpType();
		//$subType = preg_split("/([a-zA-Z]+)((\_{0,1})*([a-zA-Z]+))*(\([0-9]+\))*/", $type);
		// get type
		$mysqlType = getMysqlTypes($type);
		if ($mysqlType === FALSE) {
			return FALSE;
		}
		
		$dbType->type = $mysqlType->getType();
		// get length		
		$beginningLength = stripos($type, "(");
		if (!($beginningLength === FALSE)) {
			$endLength = stripos($type, ")");
			$size = $endLength - $beginningLength;
			$length = substr($type, $beginningLength + 1, $size - 1);
			$dbType->length = $length;
		} else {
			// no length information: set default
			$dbType->length = DEFAULT_LENGTH;
		}
		if (isset($_SESSION["dbType"])) {
			unset($_SESSION["dbType"]);
		}
		$_SESSION["dbType"] = $dbType;
	}
	
	function getMysqlTypes($type) {
		global $typeMysql;
		global $typeConstants;
		$found = false;
		$i = 0;
		$size = sizeof($typeMysql);
		$globalKey = NULL;
		foreach ($typeConstants as $clef => $valeur) {
			$found = stripos($type, $clef);
			if (!($found === FALSE)) {
				return $typeMysql[$clef];
			}
		}	
		
		return FALSE;
	}
?>