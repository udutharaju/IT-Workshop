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
<html>
<body>
<?php
      $query = "SELECT * FROM student";
      $result = mysqli_query($con,$query);
      echo "<center>";
      echo "<h1>Registered Details</h1>";
      echo "<table border='1'>";
      echo "<tr>";
      echo "<th>Name</th>";
      echo "<th>Email</th>";
      echo "<th>DOB</th>";
      echo "<th>Major</th>";
      echo "</tr>";
        foreach($result as $row){
            // echo "<br>";
            // echo "NAME: ".$row['name']."<br>";
            // echo "Email".$row['email']."<br>";
            // echo "DOB".$row['dob']."<br>";
            // echo "Major".$row['major']."<br>";
            echo "<tr>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['dob']."</td>";
            echo "<td>".$row['major']."</td>";
            echo "</tr>";

        }
        echo "</table>";
        echo "</center>";
?>
<center>
    <br>
    <br>
    <br>
    <a href="form.html">
        <button>Return to main page</button>
    </a>
</center>
    </body>
</html>