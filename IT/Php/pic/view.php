<?php
include("connct.php");
// Retrieve images from database
$sql = "SELECT * FROM images";
$result = mysqli_query($con,$sql);

// Display images
echo "<html><body>";
while ($row = $result->fetch_assoc()) {
    echo '<img src="data:image/jpeg;base64,'.base64_encode($row['img_dt']).'" />';
}
echo "</body></html>";


?>
