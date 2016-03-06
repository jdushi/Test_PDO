<?php

	require_once "db_connection.php";

	try{
		## db handler
		$dbh = testdb_connect();
		echo "Thank you Universe <br><br>";

		foreach($dbh->query('SELECT * from users') as $row) {
	        print_r($row);	 
	    	echo "<br>";
	        var_dump($row);
	    }
	    echo "<br>";	    
	    $result_set = $dbh->query('SELECT * from users');
	    echo "<br>";
	    echo "\nnumber of columns  ".$result_set->columnCount();
	    echo "<br>";	    
	    echo "\nnumber of rows  ".$result_set->rowCount();

	    ## close the connection
	    $dbh = null; //$dbh becomes invalid as a database handle and can no longer be used as such.
	}
	catch(PDOException $e){
		print "Error!: " . $e->getMessage() . "<br/>";
	    die();

	}
?>