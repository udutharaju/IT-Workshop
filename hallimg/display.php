<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Result</title>
<link rel="stylesheet" href="style.css">
<style>
    body{
          background-color:gray;
          color:black;
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
        background-color:maroon;
        margin-top:700px;
        margin-left:-840px;
        color:white;
        border-radius:50%;
        width:200px;
        box-shadow:1px 1px 20px grey;
    }
    a{
        color:white;
    }
    a:hover{
        color:black;
    }
    button:hover{
        color:black;
    background:rgb(13,211,247);
    }
    h1{
        color:maroon;
        filter:drop-shadow(1px 1px 20px grey);
    }
    .container{
        width:1000px;
    min-height:100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 30px;
    padding-bottom: 70px;
    margin:auto;
    }
    .output-container{
        padding: 20px;
    border-radius: 30px;
    background: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,1);
    
    

    }
    img{
        border-radius:50%;
        filter:drop-shadow(1px 1px 10px grey);
        float:left;
        margin-top:-100px;
        margin-left:20px;
        width:100px;
        height:100px;
    }
    .photo{
        border-radius:10px;
        filter:drop-shadow(1px 1px 20px grey);
        float:right;
        margin-top:-430px;
        width:120px;
        height:150px;
        margin-right:50px;


    }
    .user-details{
        margin-left:150px;
    }
    
    </style>
    

</head>
<body>
<div class="container">
    
    
   
<?php
session_start();
include("connct.php"); // Assuming db.php contains your database connection details

if ($_SERVER['REQUEST_METHOD'] == "POST") {
$id = $_POST['id'];
$name = $_POST['name'];

// Query to check if the id and name match
$query = "SELECT * FROM examreg WHERE name = '$name' AND id ='$id'"; 
$result = mysqli_query($con,$query);
if (mysqli_num_rows($result)) {


echo '<div class="output-container">';
echo '<p class="success-message"><h1><span><br>Rajiv Gandhi University of Knowledge Technologies<br><br><center>Hall ticket</center></span></h1></p><br><br>';
echo '<img src="logo.jpg" alt="rgukt"><br><br>';
foreach ($result as $row){
echo "<div class='user-details'>";
echo "<p><strong>ID:</strong>       "       .$row['id']."</p><br>";
echo "<p><strong>Name:</strong> "           .$row['name']."</p><br>";
echo "<p><strong>Gender:</strong> "         .$row['gender']."</p><br>";
echo "<p><strong>Phone Number:</strong> "   .$row['mnum']."</p><br>";
echo "<p><strong>Year:</strong> "           .$row['year']."</p><br>";
echo "<p><strong>Semester:</strong> "       .$row['sem']."</p><br>";
echo "<p><strong>Subjects:</strong> "       .$row['sub']."</p><br>";
echo "<p><strong>Amount:</strong> "         .$row['amount']."</p><br>";
echo '<p><strong><img class=photo src="data:image/jpeg;base64,'.base64_encode($row['img']).'"   alt="College Logo"/>';
echo "</div>";
}
echo '</div>';
} 
else {
echo "<p class='error-message'>Invalid id or name</p>";
}
}
?>

<br><br><br><br>
<div class="center">
<button onclick="window.print()" >Download Hallticket</button>
<button><a href="logout.php" class="btn">logout</a></button>

</div>
</div
</body>
</html>