<?php
session_start();
include("connection.php"); // Assuming db.php contains your database connection details
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$id=$_POST['id'];
$name = $_POST['name'];
$gender = $_POST['gender']; // Correct variable name
$num = $_POST['number'];
$year = $_POST['year']; // Correct variable name
$semester = $_POST['sem']; // Correct variable name
$amt=$_POST['amount'];

if(isset($_POST['submit']))
{
    $mysub ="";
    if(!empty($_POST['sub_list']))
    {
foreach($_POST['sub_list'] as $checked)
{
    $mysub.=$checked. ",";
}
    }
}
if (!empty($id) && !empty($name) && is_numeric($num)) { //Corrected empty check and variable name
// Assuming db.php contains database connection code
$query = "INSERT INTO exam (id,name,gender,year,sem, mnum,sub,amount) VALUES ('$id','$name','$gender', '$year','$semester', '$num','$mysub','$amt')";
mysqli_query($con, $query);
echo "hi..88.  ";
 echo "<script type='text/javascript'> alert('Successfully Registered')</script>";
header("Location:Login.php");
} else {
echo "<script type='text/javascript'> alert('Please Enter valid information')</script>";
}
}
?>
