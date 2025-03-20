<?php
$servername="localhost";
$username="root";
$password="";
$dbname="data";

//create connection
$con =mysqli_connect($servername,$username,$password,$dbname);


//check connection
if(!$con){
    echo"connection failed";
    die("connection failed:".mysqli_connect_error());
}
else{
    echo"connected";
}
?>