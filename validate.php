<html><head><link href="css/info.css" type="text/css" rel="stylesheet" /></head>
    <body>
        <div id="sub">
        </div>
    </body>
</html>
<?php

session_start();
//include "connectToMysql.php";

$connecti = mysqli_connect("localhost", "root", "root", "gadgetstore");

if (!$connecti) {
    die("Connection failed: " . mysqli_connect_error());
}



$username = $_POST['Email'];
$password = $_POST['Password'];
$hash = md5($password);
$sql = "SELECT * FROM users WHERE username='$username' AND password='$hash'";

$info = mysqli_query($connecti,$sql);
if (!$info) {
    printf("Error: %s\n", mysqli_error($connecti));
    exit();
}
$row_cnt =mysqli_num_rows($info);
if($row_cnt==0){
   header('Refresh:4; url=login.php');
    echo "<h4>Wrong username or password!<br> Please reenter</h4>";
}

if (mysqli_num_rows($info) > 0) {
    while ($row = mysqli_fetch_assoc($info)) {
        $id = $row['id'];
        $type = $row['usertype'];
    }
    $_SESSION = array();
    $_SESSION["userName"] = $_POST["Email"];
    $_SESSION["uid"] = $_POST["password"];
    $_SESSION["status"] = true;
    header("location: index.php");
if ($type == "admin") {
    header("location: index.php");
    $_SESSION["isAdmin"] = 1;
} else {
    header("location: index.php");
    $_SESSION["isAdmin"] = 0;

}
}
?>

