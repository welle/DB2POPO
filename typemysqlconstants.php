<?php
	require_once ('./mysqltypes.php');

	define("TINYINT", "tinyint");
	define("SMALLINT", "smallint");
	define("MEDIUMINT", "mediumint");
	define("INT", "int");
	define("BIGINT", "bigint");
	define("FLOAT", "float");
	define("DOUBLE", "double");
	define("DECIMAL", "decimal");
	
	define("CHAR", "char");
	define("VARCHAR", "varchar");
	define("TINYTEXT", "tinytext");
	define("TEXT", "text");
	define("MEDIUMTEXT", "mediumtext");
	define("LONGTEXT", "longtext");
	
	define("TINYBLOB", "tinyblob");
	define("BLOB", "blob");
	define("MEDIUMBLOB", "mediumblob");
	define("LONGBLOB", "longblob");
	
	define("DATE", "date");
	define("DATETIME", "datetime");
	define("TIMESTAMP", "timestamp");
	define("TIME", "time");

	define("DEFAULT_LENGTH", "19");

	$typeMysql = array(
		TINYINT => $tinyIntType,
		SMALLINT => $smallIntType,
		MEDIUMINT => $mediumIntType,
		INT => $intType,
		BIGINT => $bigIntType,
		FLOAT => $floatType,
		DOUBLE => $doubleType,
		DECIMAL => $decimalType,
		
		CHAR => $charType,
		VARCHAR => $varCharType,
		TINYINT => $tinyIntType,
		TEXT => $textType,
		MEDIUMTEXT => $mediumTextType,
		LONGTEXT => $longTextType,
		
		TINYBLOB => $tinyBlobType,
		BLOB => $blobType,
		MEDIUMBLOB => $mediumBlobType,
		LONGBLOB => $longBlobType,
		
		DATE => $dateType,
		DATETIME => $dateTimeType,
		TIMESTAMP => $timeStampType,
		TIME => $timeType
	);
	
	$typeConstants = array(
		TINYINT => TINYINT,
		SMALLINT => SMALLINT,
		MEDIUMINT => MEDIUMINT,
		INT => INT,
		BIGINT => BIGINT,
		FLOAT => FLOAT,
		DOUBLE => DOUBLE,
		DECIMAL => DECIMAL,

		// varchar before char because if a string is varchar, "char" will be found 		
		VARCHAR => VARCHAR,
		CHAR => CHAR,
		TINYINT => TINYINT,
		TEXT => TEXT,
		MEDIUMTEXT => MEDIUMTEXT,
		LONGTEXT => LONGTEXT,
		
		TINYBLOB => TINYBLOB,
		BLOB => BLOB,
		MEDIUMBLOB => MEDIUMBLOB,
		LONGBLOB => LONGBLOB,
		
		DATE => DATE,
		DATETIME => DATETIME,
		TIMESTAMP => TIMESTAMP,
		TIME => TIME
	);
?>