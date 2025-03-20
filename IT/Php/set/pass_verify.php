<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login result</title>
    <link rel="stylesheet" href="style.css">
    <style>

        
         .res{
            width:300px;
            height:250px;
            box-shadow:0px 10px 15px black;
            padding:20px;
            margin:auto;
            border-radius:50%;
        }
     
        </style>

</head>
<body>
    <?php
    session_start();
    include("cnct.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $email=$_POST['email'];
        $name=$_POST['nm'];

        $query="SELECT * FROM sets where email='$email' and name='$name'";
        $result=mysqli_query($con,$query);

        if(mysqli_num_rows($result))
        {
            echo "<div class=res>";
            foreach ($result as $row)
            {
                echo "<p><strong>NAME :</strong> ".$row['name']."</p><br>";
                echo "<p><strong>EMAIL :</strong> ".$row['email']."</p><br>";
                echo "<p><strong>DOB :</strong> ".$row['dob']."</p><br>";
                echo "<p><strong>MAJOR  :</strong> ".$row['major']."</p><br>";
            }
            echo"</div>";
        }
        else {
            echo "<h3>Invalid email or password</h3>";
            }
    }
    ?>
    
</body>
</html>