<?php
$GLOBALS['conn'] = mysqli_connect("localhost", "root", "root", "gadgetstore");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

