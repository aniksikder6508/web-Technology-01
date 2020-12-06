<?php

$host='localhost';
$dbuser='';
$dbpass='';
$dbname='dbms';

$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);

if($conn==false){
	echo "connection fail";
	
}


?>