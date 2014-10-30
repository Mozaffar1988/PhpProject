<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db="db_emf";

/*
$user="tube_bdc";
$pass="asdf1234";
$db="tube_bdc";
*/
	mysql_connect($host,$user,$pass) or die("Error in connecting....".mysql_error());
	mysql_select_db($db) or die("Error in selecting...".mysql_error());
?>