<?php 
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice";

$con = mysqli_connect($servername,$username,$password,$dbname);

if(!$con)
{
	echo "connection failed";
	die("connection failed :".mysqli_connect_error_());

}
else
{
	echo"";
}
session_start();
include("cn.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=$_POST["name"];
	$email=$_POST["email"];
	$name=$_POST["name"];
	$name=$_POST["name"];
	if(!empty($name) && !empty(!email))
	{
		$QUERY = "INSERT INTO PARCTICE (name,email,dob,major) values ('name','id','num','major')";
		mysqli_query($con,$query);
	}
	else
	{
		echo "<script type ='text/javascript' alert('enter valid')><\script> "
	}
}
<html>
<head></head>
<body>
<button><a href  = "v.php" >login </a></button>
</body> 
</html>
?>
