<?php
include("connct.php");
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    

    
    // Process uploaded image
    $image = $_FILES['image']['tmp_name'];
    $imgData = addslashes(file_get_contents($image));
    $image_name = $_FILES['image']['name'];
    
    // Insert image data into database
    $sql = "INSERT INTO images (img_nm, img_dt) VALUES ('$image_name', '$imgData')";
    if (mysqli_query($con,$sql) === TRUE) {
        echo "Image uploaded successfully.";
        echo $image_name;
    } else {
        echo "Error uploading image: " ;
    }
    

}
?>
