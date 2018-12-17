<?php
$target_dir = "C:/xampp/htdocs/onlinemodi/images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
$connecti = mysqli_connect("localhost", "root", "root", "gadgetstore");
if (!$connecti) {
    die("Connection failed: " . mysqli_connect_error());
}
if($uploadOk==1)
{	
$itemname=$_POST['name'];
$categoryName=$_POST['category'];
//$genderCat=$_POST['genderCat'];
$itemdesc=$_POST['desc'];
$price=$_POST['price'];
$image=basename( $_FILES["fileToUpload"]["name"]);
$quantity=$_POST['qty'];

$cat="SELECT categoryId FROM category WHERE cname='$categoryName'";
if(mysqli_query($connecti,$cat))
{
    $row = mysqli_fetch_array(mysqli_query($connecti,$cat));
    $categoryId=$row['categoryId'];
	echo $categoryId.'is this';
}
else{
    echo "<br> No such category exists";
}
$sql="INSERT INTO `gadgets` (`itemname`, `categoryId`, `itemdesc`, `price`, `image`, `quantity`) VALUES
('$itemname','$categoryId', '$itemdesc', '$price', 'images/$image', '$quantity')";
//$conn->query($sql);
if(mysqli_query($connecti,$sql))
{
    header('Refresh:3; url=admin.php');
    echo '<h3><br>Record inserted successfully</h3>';
}

else{
    header('Refresh:3; url=admin.php');
    echo "<h3><br>Error</h3>";
}
}

?>