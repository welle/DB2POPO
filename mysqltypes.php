<?PHP 

	// liste des types (avec range) de mysql
	
	define("INTEGERTYPE", "int");
	define("FLOATTYPE", "float");
	define("STRINGTYPE", "string");
	define("BLOBTYPE", "blob");
	define("DATETYPE", "datetime");
	
	abstract class genericMysqlColumn {
		protected $type;
		protected $minRange;
		protected $maxRange;
		
		function genericMysqlColumn($type, $minRange, $maxRange) {
			$this->type = $type;
			$this->minRange = $minRange;
			$this->maxRange = $maxRange;
		}

		function getType() {
			return $this->type;
		}
		
		function getMinRange() {
			return $this->minRange;
		}
		
		function getMaxRange() {
			return $this->maxRange;
		}
		
		abstract function testRange($value);
	}
	
	class numericalMysqlColumn extends genericMysqlColumn {
		// in a numerical column we must test the value itself
		function testRange($value) {
			$isAboveMinRange = $this->minRange <= $value;
			$isBelowMaxRange = $this->maxRange >= $value;

			return ($isAboveMinRange && $isBelowMaxRange);
		}
	}

	class floatMysqlColumn extends genericMysqlColumn {
		// in a float column we must test the value itself
		// BUT float is float! so, we don't really have min/max range
		// we test with a filter
		function testRange($value) {
			return filter_var($float, FILTER_VALIDATE_FLOAT) === false;
		}
	}

	class stringMysqlColumn extends genericMysqlColumn {
		// in a string type column we must test the lenght of value (which is a string)
		function testRange($value) {
			$lenght = strlen($value);
			$isAboveMinRange = $lenght >= $this->minRange;
			$isBelowMaxRange = $lenght <= $this->maxRange;
			
			return ($isAboveMinRange && $isBelowMaxRange);
		}
	}
	
	class dateMysqlColumn extends genericMysqlColumn {
		// will always return true;
		function testRange($value) {
			return true;
		}
	}
	
	$tinyIntType = new numericalMysqlColumn(INTEGERTYPE, -127, 128);
	$tinyIntUnsignedType = new numericalMysqlColumn(INTEGERTYPE, 0, 255);
	$smallIntType = new numericalMysqlColumn(INTEGERTYPE, -32758, 32757);
	$smallIntUnsignedType = new numericalMysqlColumn(INTEGERTYPE, 0, 65535);
	$mediumIntType = new numericalMysqlColumn(INTEGERTYPE, -8388608, 8388607);
	$mediumIntUnsignedType = new numericalMysqlColumn(INTEGERTYPE, 0, 16777215);
	$intType = new numericalMysqlColumn(INTEGERTYPE, -2147483648, 2147483647);
	$intUnsignedType = new numericalMysqlColumn(INTEGERTYPE, 0, 4294967295);
	$bigIntType = new numericalMysqlColumn(INTEGERTYPE, -9223372036854775808, 9223372036854775807);
	$bigIntUnsignedType = new numericalMysqlColumn(INTEGERTYPE, 0, 18446744073709551615);
	
	// in floating column, min/max range is not "important", we will not check on this but on filter
	$floatType = new floatMysqlColumn(FLOATTYPE, 0, 0);	
	$doubleType = new floatMysqlColumn(FLOATTYPE, 0, 0);
	$decimalType = new floatMysqlColumn(FLOATTYPE, 0, 0);
	
	$charType = new stringMysqlColumn(STRINGTYPE, 0, 255);
	$varCharType = new stringMysqlColumn(STRINGTYPE, 0, 255);
	$tinyTextType = new stringMysqlColumn(STRINGTYPE, 0, 255);
	$textType = new stringMysqlColumn(STRINGTYPE, 0, 65535);
	$mediumTextType = new stringMysqlColumn(STRINGTYPE, 0, 16777215);
	$longTextType = new stringMysqlColumn(STRINGTYPE, 0, 4294967295);
	
	$tinyBlobType = new stringMysqlColumn(BLOBTYPE, 0, 255);
	$blobType = new stringMysqlColumn(BLOBTYPE, 0, 65535);
	$mediumBlobType = new stringMysqlColumn(BLOBTYPE, 0, 16777215);
	$longBlobType = new stringMysqlColumn(BLOBTYPE, 0, 4294967295);
	
	$dateType = new dateMysqlColumn(DATETYPE, 0, 0);
	$dateTimeType = new dateMysqlColumn(DATETYPE, 0, 0);
	$timeStampType = new dateMysqlColumn(DATETYPE, 0, 0);
	$timeType = new dateMysqlColumn(DATETYPE, 0, 0);
?>