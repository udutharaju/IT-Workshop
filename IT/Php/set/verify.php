
<?php
session_start();
include("cnct.php");
 if($_SERVER['REQUEST_METHOD'] == "POST")
{
     $name=$_POST['nm'];
    $email=$_POST['email'];
     $dob=$_POST['dob'];
     $major=$_POST['major'];
    if(!empty($email) && !empty($name) )
      {
          $query="INSERT INTO sets (name,email,dob,major) VALUES ('$name','$email','$dob','$major')";
          mysqli_query($con,$query);
          echo "<script type='text/javascript'> alert('Successfully Registered')</script>";
         //header("Location:retrieve.php");
         echo "<a href=retrieve.php>retrieve data</a>";
      }
         else {
  echo "<script type='text/javascript'> alert('Please Enter valid information')</script>";
  }
 }
?>
