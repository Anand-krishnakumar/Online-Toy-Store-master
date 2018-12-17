<html><head><link href="css/info.css" type="text/css" rel="stylesheet" /></head>
    <body>
        
    </body></html>
<?php
session_start();
//include "connectToMysql.php";
$connecti = mysqli_connect("localhost", "root", "root", "gadgetstore");

if (!$connecti) {
    die("Connection failed: " . mysqli_connect_error());
}
$username=$_SESSION["userName"];
$s="SELECT usertype from Users WHERE username='".$username."'";
$type=mysqli_query($connecti,$s);
$row=  mysqli_fetch_array($type);

if(isset($_SESSION['cart1'])){
    $size=sizeof($_SESSION['cart1']);
    if($size==0){
        echo "<h2 align='center'>No items in cart!</h2>";
    }
    else{
foreach ($_SESSION['cart1'] as $id => $x) {
    $username=$_SESSION["userName"];
    $itemid=$x['id'];
    $itemname=$x['nm'];
    $price=$x['rate'];
    $sql = "INSERT INTO orders(username, itemid, itemname, price) VALUES ( '$username' ,'$itemid ','$itemname', '$price')";
    mysqli_query($connecti,$sql);
    $s="SELECT quantity FROM gadgets WHERE itemid='" .$itemid. "' ";
    $res=mysqli_query($connecti,$s);
    $row = mysqli_fetch_array($res);
    $quant=$row[0]-$x['qty'];
    $updt="UPDATE gadgets SET quantity='" .$quant." ' WHERE itemid='" .$itemid. "'";
    mysqli_query($connecti,$updt);
    unset($_SESSION['cart1'][$x['id']]);

}
echo "<h2 align='center'>Thank you for shopping..!</h2>"
. "<div align='center'><a href='index.php'>Home Page</a>"
        . "<br><br><a href='index.php'>Continue Shopping.....</a></div>";
}
}
else{
    echo "<h3>No items in cart</h3>"
    . "<a href='index.php'>Home Page</a>";
}

?>
