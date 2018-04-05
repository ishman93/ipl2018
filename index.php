<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("user");
$dbpwd = getenv("password");
$dbname = getenv("ipl2018db");
printf($dbhost);
printf($dbport);
printf($dbuser);
printf($dbpwd);
printf($dbname);
$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname,$dbport);
if($connection->connect_errno){
   printf("Connection failed :%s\n", $mysqli -> connect_error);
   exit();
}  else{
   printf("Connected to the database");
}
$connection->close();
?> 

<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>