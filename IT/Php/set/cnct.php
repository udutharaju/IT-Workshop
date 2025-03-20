<?php
$servername="localhost";
$username="root";
$password="";
$dbname="data";

$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
{
echo "failed connection";
die ("connection failed:".mysqli_connect_error());
}
else{
    echo "connected succesfully";
}
?>