<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Result</title>
<link rel="stylesheet" href="style.css">
<style>
    body{
          background-color:#333;
          color:white;
    }
    .center{
        display:flex;
        justify-content: center;
        align-items: center;
        height:200px;
        
    }
    button{
        width:100px;
        height:40px;
        background-color:#ff7200;
        margin-top:500px;
        margin-left:100px;
        color:white;
    }
    button:hover{
        color:black;
    background:rgb(13,211,247);
    }
    </style>
    

</head>
<body>
<div class="container">
<?php
session_start();
include("connection.php"); // Assuming db.php contains your database connection details

if ($_SERVER['REQUEST_METHOD'] == "POST") {
$id = $_POST['id'];
$name = $_POST['name'];

// Query to check if the email and password match
$query = "SELECT * FROM exam WHERE name = '$name' AND id ='$id'"; 
$result = mysqli_query($con,$query);
if (mysqli_num_rows($result)) {

// Email and password match
$_SESSION['email'] = $email; // Store email in session for future use
echo '<div class="output-container">';
echo '<p class="success-message"><h1>Hall ticket</h1></p><br><br>';
foreach ($result as $row){
echo "<div class='user-details'>";
echo "<p><strong>ID:</strong> ".$row['id']."</p><br>";
echo "<p><strong>Name:</strong> ".$row['name']."</p><br>";
echo "<p><strong>Gender:</strong> ".$row['gender']."</p><br>";
echo "<p><strong>Phone Number:</strong> ".$row['mnum']."</p><br>";
echo "<p><strong>Year:</strong> ".$row['year']."</p><br>";
echo "<p><strong>Semester:</strong> ".$row['sem']."</p><br>";
echo "<p><strong>Subjects:</strong> ".$row['sub']."</p><br>";
echo "<p><strong>Amount:</strong> ".$row['amount']."</p><br>";
echo "</div>";
}
echo '</div>';

} 

else {
// Email and/or password don't match
echo "<p class='error-message'>Invalid id or name</p>";
}
}
?>
<br><br>
<div class="center">
<button onclick="window.print()" >Print this page</button>
</div>
</div>
</body>
</html>
