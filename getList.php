<!DOCTYPE html>
<html>
<head>
    <link href="css/getList.css" type="text/css" rel="stylesheet" />
</head>
<body>

<?php
$connecti = mysqli_connect("localhost", "root", "root", "gadgetstore");

if (!$connecti) {
    die("Connection failed: " . mysqli_connect_error());
}

$q = $_GET['q'];
$str=explode(',', $q);
$cname=$str[0];
$status=$str[1];
$cat="SELECT categoryId FROM category WHERE cname='$cname'";
$sqlcon=mysqli_query($connecti,$cat);
if($sqlcon)
{
    $row = mysqli_fetch_array($sqlcon);
    $categoryId=$row['categoryId'];
}

$sql="SELECT * FROM gadgets WHERE categoryId = '".$categoryId."' and flag=1";
$result = mysqli_query($connecti,$sql);


echo "<table id='list' border='1'>
<tr id='list'>
<th id='list'>itemid</th>
<th id='list'>itemname</th>
<th id='list'>categoryId</th>
<th id='list'>itemdesc</th>
<th id='list'>price</th>
<th id='list'>quantity</th>


</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr id='list'>";
    echo "<td >" . $row['itemid'] . "</td>";
    echo "<td>" . $row['itemname'] . "</td>";
    echo "<td>" . $row['categoryId'] . "</td>";
    echo "<td>" . $row['itemdesc'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
	echo "<td>" . $row['quantity'] . "</td>";
	
    echo "</tr>";
}
if($status=="delete")
{
echo "</table>";
echo "<form action='deleteItem.php' method='POST'>";
echo "<table><tr><td>Enter the Item ID to delete:</td><td><input type='text' name='itemid'required></td><td><input type='submit' name='submit'></td></tr></table></form>";
}
if($status=='update')
{
    echo "</table>";
echo "<form action='updateItem.php' method='POST'>";
echo "<table><tr><td>Enter the ItemID to update:</td><td><input type='number' name='itemid' required></td></tr>";
echo "<tr><td>Enter the attribute name to update:</td><td><input type='text' name='field' required></td></tr>";
echo "<tr><td>Enter the new value to update:</td><td><input type='text' name='value' required></td></tr>";
echo "<tr><td></td><td><input type='submit' name='submit'</td></tr>";
}

?>
</body>
</html>

