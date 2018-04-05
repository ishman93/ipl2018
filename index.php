<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("ishman");
$dbpwd = getenv("password");
$dbname = getenv("ipl2018");

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if($connection->connect_errno){
   printf("Connection failed :%s\n", $mysqli -> connect_error);
   exit();
}  else{
   printf("Connected to the database");
}
$connection->close();
?> 