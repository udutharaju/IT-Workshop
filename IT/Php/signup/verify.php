<?php
session_start();
include("connct.php"); // Assuming db.php contains your database connection details
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$id=$_POST['id'];
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$gender = $_POST['gender']; // Correct variable name
$num = $_POST['number'];
$adress = $_POST['address']; // Correct variable name
$gmail = $_POST['email']; // Correct variable name
$password = $_POST['pass']; // Correct variable name
echo "hello";
if (!empty($gmail) && !empty($password) && is_numeric($num)) { //Corrected empty check and variable name
// Assuming db.php contains database connection code

$query = "INSERT INTO phpdata (id,fname, lname, gender, cnum,address,email, pass) VALUES ('$id','$firstname', '$lastname', '$gender', '$num', '$adress','$gmail', '$password')";
mysqli_query($con, $query);
echo "hello6";
 echo "<script type='text/javascript'> alert('Successfully Registered')</script>";
header("Location:login.php");
} else {
echo "<script type='text/javascript'> alert('Please Enter valid information')</script>";
}
}
?>