<?php
$servername="localhost";
$username="root";
$password="";
$dbname="internal";
$con =mysqli_connect($servername,$username,$password,$dbname);
if(!$con){
    echo"connection failed";
    die("connection failed:".mysqli_connect_error());
}
else{
    //echo"connected";
}
?>


