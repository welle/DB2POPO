<?php

	// Type column return by PDO
	$phpPDOTypes = array(
    	PDO::PARAM_BOOL => 'boolean',
    	PDO::PARAM_NULL     => 'null',
    	PDO::PARAM_INT      => 'int',
    	PDO::PARAM_STR      => 'string',
    	PDO::PARAM_LOB      => 'blob',
    	PDO::PARAM_STMT     => 'statement'  //Not used right now
	);

?>