<?php

include "connectToMysql.php";
$sql = "SELECT * FROM toys";
$result = mysqli_query($conn,$sql);
echo '<table border="0" width="30%">'
    . '<tr><th>Image</th><th>Name</th><th>Price</th></tr>';
while($row = mysqli_fetch_array($result)) {
    
    echo '<tr><td><img src="'.$row['toyImage'].'" alt="'.$row['toyName'].'" width="60px" height="60px"></td><td>'.$row['toyName'].'</td><td>'.$row['toyPrice'].'</td><td></td></tr>';
}
echo '</table>';

?>