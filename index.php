<?php
$dbhost = getenv("MYSQL_SERVICE_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_SERVICE_PORT");
$dbuser = 'user';
$dbpwd = 'password';
$dbname = 'ipl2018db' ;
printf($dbhost);
printf($dbport);
printf($dbuser);
printf($dbpwd);
printf($dbname);
$connection = mysql_connect($dbhost.":".$dbport,$dbuser, $dbpwd);
if($connection->connect_errno){
   printf("Connection failed :%s\n", $mysqli -> connect_error);
   exit();
}  else{
   printf("Connected to the database");
}
$connection->close();
?> 