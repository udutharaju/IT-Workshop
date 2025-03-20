<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "internal";


$con = mysqli_connect($servername,$username,$password,$dbname);

if(!$con){
    echo "Failure";
    die("Connection failed: " . mysqli_connect_error());
}
?>
<?php 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $major=$_POST['major'];

    $query="INSERT INTO STUDENT values('$name','$email','$dob','$major')";
    mysqli_query($con, $query);
    
    // echo "Inserted into database successfully";
    // header("Location:result.php");
?>
<html>
    <body>
        <center>
            <h2>Inserted Into Database Successfully</h2>
            <a href="result.php">
                <button>Show Values</button>
            </a>
        </center>
    </body>
</html>

