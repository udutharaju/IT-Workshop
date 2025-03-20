<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "internal";


$con = mysqli_connect($servername,$username,$password,$dbname);

if(!$con){
    echo "Failure";
    die("Connection failed: " . mysqli_connect_error());
}
?>