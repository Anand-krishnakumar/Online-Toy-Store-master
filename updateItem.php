<html><head><link href="css/info.css" type="text/css" rel="stylesheet" /></head>
    <body>
        <div id="sub">
        </div>
    </body>
</html>
<?php
//include "connectToMysql.php";
$connecti = mysqli_connect("localhost", "root", "root", "gadgetstore");

if (!$connecti) {
    die("Connection failed: " . mysqli_connect_error());
}

$itemid=$_POST['itemid'];
$attr=$_POST['field'];
$value=$_POST['value'];
$search="SELECT * FROM gadgets WHERE itemid='$itemid'";
$res=mysqli_query($connecti,$search);
$row_cnt = mysqli_num_rows($res);
if($row_cnt>0){
$sql="UPDATE `gadgets` SET `$attr`='$value' WHERE itemid='$itemid'";
if(mysqli_query($connecti,$sql))
{
    header('Refresh:3; url=admin.php');
    echo "<h3>item updated successfully</h3>";
}
else{
    header('Refresh:3; url=admin.php');
    echo "<h3>Error!! Try again with correct data</h3>";
}
}
else{
    header('Refresh:3; url=admin.php');
    echo "<h3>Error!! Try again with correct data</h3>";
}
?>

