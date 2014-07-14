<?PHP

class DatabaseConnection {
	private $databaseServer;
	private $databaseName;
	private $databaseUser;
	private $databasePassword;
	
	function DatabaseConnection($server, $name, $user, $password) {
		$this->databaseServer = $server;
		$this->databaseName = $name;
		$this->databaseUser = $user;
		$this->databasePassword = $password;
	}
	
	function getDSN() {
		$dsn = "mysql:host=";
		$dsn .= $this->databaseServer;
		$dsn .= ";dbname=";
		$dsn .= $this->databaseName;
		
		return $dsn;
	}
	
	function getUser() {
		return $this->databaseUser;
	}
	
	function getPassword() {
		return $this->databasePassword;
	}
}

class ProjectContext {
	private $databaseConnection;
	private $pojoDirectory;
	private $dataModelDirectory;
	
	function ProjectContext($connection, $pojoDir, $dataModelDir) {
		$this->databaseConnection = $connection;
		$this->pojoDirectory = $pojoDir;
		$this->dataModelDirectory = $dataModelDir;
	}
	
	function getDatabaseConnection() {
		return $this->databaseConnection;
	}
	
	function getPojoDirectory() {
		return $this->pojoDirectory;
	}
	
	function getDataModelDirectory() {
		return $this->dataModelDirectory;
	}
}

//$serieDatabaseConnection = new DatabaseConnection("localhost", "series", "root", "TXzp198");
//$amandaDatabaseConnection = new DatabaseConnection("localhost", "amanda", "root", "TXzp198");
$storegameDatabaseConnection = new DatabaseConnection("192.168.56.50", "storegames", "root", "TXzp198");


//$serieContext = new ProjectContext($serieDatabaseConnection, "../series/db/pojo/", "../series/db/datamodel/");
//$amandaContext = new ProjectContext($amandaDatabaseConnection, "./pojo/", "./datamodel/");
$storegameContext = new ProjectContext($storegameDatabaseConnection, "./storegame/pojo/", "./storegame/datamodel/");


?>