<?php
  require_once('./sessionmanager.php');
  
  startSession();

  require_once ('./config/config.inc.php');

  require_once('./smarty/libs/Smarty.class.php');
  
  require_once('./dbtypeparser.php');
  
  
  $smarty = new Smarty;
  $smarty->template_dir = './templates';
  $smarty->compile_dir = './smarty/demo/templates_c';
  $smarty->config_dir = './smarty/demo/configs';

  class MyObject{
      public $fieldName;
      public $fieldType;
      public $fieldLenght;
      public $canBeNull;
      public $autoIncrement;
      public $pk;
  }

$selectedProject = $storegameContext;
//$selectedProject = $amandaContext;

	try{
		$selectedDatabase = $selectedProject->getDatabaseConnection();
		$bdd = new PDO($selectedDatabase->getDSN(), $selectedDatabase->getUser(), $selectedDatabase->getPassword());
	} catch (Exception $e) {
		echo $e;
	}

	$directory = $selectedProject->getDataModelDirectory();	
	$statement = "SHOW TABLES";
	$tables = $bdd->query($statement);
	$smarty->registerObject('MyObject',new MyObject(),null,false);
	while ($donnees = $tables->fetch())
	{
		$table = $donnees[0];
    	$smarty->assign("tableName", $table);

    	$statementGetFieldTable = "Select * from ".$table. ' LIMIT 1';
		$fields = $bdd->query($statementGetFieldTable);

        $field_name_array = array();
        $i = 0;
        while ($field = $fields->getColumnMeta($i++)) {
          $field_name = $field['name'];
          //$field_type = $field['native_type'];
          //$field_lenght = $field['len'];
          $fieldObject = new MyObject();
          $fieldObject->fieldName = $field_name;
          //$fieldObject->fieldType = $phpPDOTypes[$field_type];
          //$fieldObject->fieldLenght = $field_lenght;
          $field_name_array[$field_name] = $fieldObject;
        }

		$statementGetFieldTable = "SHOW COLUMNS from ".$table;
		$fields = $bdd->query($statementGetFieldTable);
		while ($field = $fields->fetch()) {
		  $field_name = $field['Field'];
		  $fieldObject = $field_name_array[$field_name];
		  $field_type = $field['Type'];
		  registerDBType($field_type);
		  $db_Type = $_SESSION["dbType"];
		  
		  $fieldObject->fieldType = $db_Type->type;
          $fieldObject->fieldLenght = $db_Type->length;
		  
		  $canBeNull = $field['Null'];
		  if ($canBeNull == 'YES') {
	          $fieldObject->canBeNull = 'true';
		  } else {
	          $fieldObject->canBeNull = 'false';
		  }
          $extra = $field['Extra'];
		  if (strpos($extra, 'auto_increment') === FALSE) {
	          $fieldObject->autoIncrement = 'false';
		  	  $pk = $field['Key'];
			  if (strpos($pk, 'PRI') === FALSE) {
		          $fieldObject->pk = 'false';
			  } else {
		          $fieldObject->pk = 'true';
			  }
		  } else {
	          $fieldObject->autoIncrement = 'true';
			  $fieldObject->pk = 'true';
		  }
		}

		$smarty->assignByRef("fieldNameArray", $field_name_array);
		$to_write = $smarty->fetch('datamodel.tpl');

		$file_name = $directory.$table.".xml";
		echo "Generating ".$file_name."</BR>";
		$fh = fopen($file_name, "w+b") or die("Can't open file");
		fwrite($fh, $to_write);
		fclose($fh);
	}


	require_once("./utilities.php");
	echo "Copying necessary datamodel.xsd</BR>";
	copyemz("./config/datamodel.xsd", $directory."/datamodel.xsd");
	
	echo "Done";
	//endSession();
?>

<FORM method=post action="./dbtoobject.php">
	<INPUT type="submit" value="Generate pojo">
</form>