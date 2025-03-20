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
    //if($_SERVER['REQUEST_METHOD'] == "POST")
    //{
    

        $query="SELECT * FROM sets";
        $result=mysqli_query($con,$query);

       

            foreach ($result as $row)
            {
                echo "<p><strong>NAME :</strong> ".$row['name']."</p><br>";
                echo "<p><strong>EMAIL :</strong> ".$row['email']."</p><br>";
                echo "<p><strong>DOB :</strong> ".$row['dob']."</p><br>";
                echo "<p><strong>MAJOR  :</strong> ".$row['major']."</p><br>";
                echo"<br><br>";
            }
            
        
    //}
    ?>
    
</body>
</html>