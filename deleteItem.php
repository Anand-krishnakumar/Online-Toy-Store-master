<html><head><link href="css/info.css" type="text/css" rel="stylesheet" /></head>
    <body>
        <div id="sub">
        </div>
    </body>
</html>
<?php

$connecti = mysqli_connect("localhost", "root", "root", "gadgetstore");

if (!$connecti) {
    die("Connection failed: " . mysqli_connect_error());
}

//include "connectToMysql.php"; 
$itemid=$_POST['itemid'];

$search="SELECT * FROM gadgets WHERE itemid='$itemid'";
$res=mysqli_query($connecti,$search);
$row_cnt = mysqli_num_rows($res);
if($row_cnt>0){
$sql="update `gadgets` set flag=0 where itemid='$itemid'";
if(mysqli_query($connecti,$sql)){
    header('Refresh:3; url=admin.php');
echo "<h3>item deleted successfully</h3>";
}
}
else{
    header('Refresh:3; url=admin.php');
    echo "<h3>Error!!! Entered record does not exist</h3>";
}
?>

