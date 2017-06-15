<?php

	$MYSQL_USER = 'root';
   	$MYSQL_PASS = '';
	$MYSQL_DATABASE = 'books_project1';
    $MYSQL_HOST = 'localhost';
	// Connect to the DB
	$sql = mysql_connect($MYSQL_HOST, $MYSQL_USER, $MYSQL_PASS);
	mysql_select_db($MYSQL_DATABASE);
	if (!$sql) {
	   die('no: '. mysql_errno() . mysql_error());
	}

?>