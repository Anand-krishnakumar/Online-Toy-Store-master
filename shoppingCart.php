<?php 

session_start();

$qty=$_POST['service1'];
$itemiD=$_POST['seritemid'];
$name=$_POST['sername'];
$categ=$_POST['sercate'];
$price=$_POST['serprice'];
$availqty=$_POST['seravailqnty'];





	//if(!empty($itemiD) and isset($_GET['name']) and isset($_GET['cat']) and isset($_GET['rate']))
	if(!empty($itemiD) and !empty($qty) and !empty($name) and !empty($categ) and !empty($price))
	{
		
		//add item
		$_SESSION['cart1'][$itemiD] = array("id"=>$itemiD,"nm"=>$name,"cat"=>$categ,"rate"=>$price,"qty"=>$qty);
		//header("location: viewcart.php");
		echo "done";
		exit();
		
	}
	/*else if(isset($_GET['id']))
	{
		//del a item
		$id = $_GET['id'];
		unset($_SESSION['cart1'][$id]);
		header("location: viewcart.php");
	}*/
	//else if(!empty($_POST))
	//{
		//update qty
		/*foreach($_POST as $id=>$val)
		{
			$_SESSION['cart1'][$id]['qty']=$val;
			echo "done";
			exit();
			//header("location: viewcart.php");
		}*/
	//}
?>