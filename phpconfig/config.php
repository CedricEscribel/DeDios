<?php 


$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "dedios";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}

$con = mysqli_connect("localhost","root","","dedios");

if(!$con){
  die("Connection Error");
}

if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
