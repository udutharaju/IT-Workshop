<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Result</title>
<link rel="stylesheet" href="style.css">
<style>
.k{
    height:300px;
    width:300px;
    background-color:white;
    box-shadow:0px 10px 15px black;
    border-radius:10px;
    margin:auto;
    padding:10px;
}




    </style>

}
</head>
<body>
    
    <div class=k>
   
<?php
session_start();
include("cnnct.php"); 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$city = $_POST['city'];


$query = "SELECT * FROM voters WHERE first_name = '$fname' AND last_name ='$lname' AND city='$city'"; 
$result = mysqli_query($con,$query);
if (mysqli_num_rows($result)) {
foreach ($result as $row){
  
echo "<center>";
echo "<p><strong>Hello </strong>"             .$row['first_name']."</p><br>";
echo "<p><strong>Your age is </strong>"       .$row['age']."</p><br>";
if($row['age']>=18)
{
    echo "<strong>Eligibility Results:</strong> eligible to vote";
}
else{
    echo "<strong>Eligibility Results:</strong> not eligible to vote";
}
echo "</center>";
}
}
else {
echo "<center><p><strong>Eligibility results :</strong> invalid user </p></center>";
}
}
?>

<br><br><br><br>
<center><a href=check.php>Check another person</a></center>
</div>
</body>
</html>
