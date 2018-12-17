<html><head><link href="css/info.css" type="text/css" rel="stylesheet" /></head>
    <body>
        <div id="sub">
        </div>
    </body>
</html>
<?php
//include "connectToMysql.php"; 
$username=filter_input(INPUT_POST, 'username');
$password=filter_input(INPUT_POST, 'password');
$email=filter_input(INPUT_POST, 'email');
$address=filter_input(INPUT_POST, 'address');
$city=filter_input(INPUT_POST, 'city');
$state=filter_input(INPUT_POST, 'state');
$phone=filter_input(INPUT_POST, 'phone');
$hash=md5($password);
if($username=="" || $password=="" || $address=="" || $city=="" || $state=="" || $phone=="" )
{
    echo 'The Fields cannot be empty:';
}
if($username=="")
{
    echo '<br>Username';
}
if($password=="")
{
    echo '<br>Password';
}
if($address=="")
{
    echo '<br>Address';
}
if($city=="")
{
    echo '<br>City';
}
if($state=="")
{
    echo '<br>State';
}
if($phone=="")
{
    echo '<br>Phone';
}
 else 
 {
	 $connecti=mysqli_connect("localhost", "root", "root", "gadgetstore");
    $res=mysqli_query($connecti,'select username from users where username = "'. $username .'"');
    if($res&&mysqli_num_rows($res)>0){      
        print '<h3>'.$username. '</h3>';
        echo '<h3><br>already EXIST..!</h3>';
        echo '<h3><br>Enter a different username..!</h3>';
        header( "refresh:4;url=NewUser_Register.php" );
        exit();
    }
    else
        {
      $sql = "INSERT INTO users(username,password,address,city,state,phone)
    VALUES ('$username', '$hash', '$address', '$city', '$state', '$phone' )";

    if (mysqli_query($connecti,$sql)) {
    echo "<script type='text/javascript'>alert('A account has been created for you succesfully! Happy shopping!!')</script>";
    header ("refresh:3;url=index.php");
	}
	else {
    echo "<script type='text/javascript'>alert('Something went wrong please try again!!')</script>";  
	
    }
    }
 }

?>