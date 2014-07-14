<?php
  require_once('./smarty/libs/Smarty.class.php');
  // list of the possible db -> see the file to choose the correct database
  require_once('./config/config.inc.php');
  require_once('./xmlutilities.php');
  require_once('./utilities.php');

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

	$pojoDirectory = $selectedProject->getPojoDirectory();
	$datamodelDirectory = $selectedProject->getDataModelDirectory();	
	//$statement = "SHOW TABLES";
	//$tables = $bdd->query($statement);
	$smarty->registerObject('MyObject',new MyObject(),null,false);
	
	$d = dir($datamodelDirectory);
	while($filename = $d->read()) {
		$extension = FileGetExtension::method_pathinfo($filename);
		if ($extension === "xml") {
			$object = fileToObject($datamodelDirectory.$filename);
			$table = $object->root->attributes["name"];
	    	$smarty->assign("tableName", $table);
			echo "Process ".$filename." -> ";
			$field_name_array = array();

			$childList = $object->root->children;
			$nbChildren = count($childList);
			for ($i=0; $i < $nbChildren; $i++) { 
				$child = $childList[$i];
				$field_name = $child->attributes["name"];
				$field_type = $child->attributes["type"];
				$field_lenght = $child->attributes["lenght"];
				$canBeNull = $child->attributes['nullable'];
				$autoIncrement = $child->attributes['autoincrement'];
				$pk = $child->attributes['pk'];
				$fieldObject = new MyObject();
				$fieldObject->fieldName = $field_name;
				$fieldObject->fieldType = $field_type;
				$fieldObject->fieldLenght = $field_lenght;
				$fieldObject->canBeNull = $canBeNull == 'true';
				$fieldObject->autoIncrement = $autoIncrement === 'true';
				$fieldObject->pk = $pk === 'true';
				$field_name_array[$field_name] = $fieldObject;
			}
			
			$smarty->assignByRef("fieldNameArray", $field_name_array);
			$to_write = $smarty->fetch('table.tpl');
			$file_name = $pojoDirectory.$table.".class";
			echo "Generating ".$file_name."</BR>";
			$fh = fopen($file_name, "w+b") or die("Can't open file");
			fwrite($fh, $to_write);
			fclose($fh);
		}
	}
	$d->close(); 
	
  	$smarty = new Smarty;
  	$smarty->template_dir = './templates';
  	$smarty->compile_dir = './smarty/demo/templates_c';
  	$smarty->config_dir = './smarty/demo/configs';

	/**echo "Generating model.php</BR>";

    $to_write = $smarty->fetch('model.tpl');

	$file_name = $pojoDirectory."/model.php";
	$fh = fopen($file_name, "w+b") or die("Can't open file");
	fwrite($fh, $to_write);
	fclose($fh);*/
	
	echo "Clearing cache</BR>";
	$d = dir("./smarty/demo/templates_c");
	while($filename = $d->read()) {
		$extension = FileGetExtension::method_pathinfo($filename);
		if ($extension === "php") {
			unlink("./smarty/demo/templates_c/".$filename);
		}
	}
	
	echo "Done";

?>