⁠⁠⁠<?php
session_start();
//include "connectToMysql.php";
$connecti = mysqli_connect("localhost", "root", "root", "gadgetstore");

if (!$connecti) {
    die("Connection failed: " . mysqli_connect_error());
}

$itemname = $_GET['name'];

$sql = "SELECT * FROM gadgets WHERE itemname='$itemname'";
$result =mysqli_query($connecti,$sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
    <head>
        <title>Toy Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link href="css/index2.css" type="text/css" rel="stylesheet" />
        <link href="css/tab.css" type="text/css" rel="stylesheet" />
        
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/line-icon/css/simple-line-icons.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="vendors/vertical-slider/css/jQuery.verticalCarousel.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/productList.css" type="text/css" rel="stylesheet" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- <link href="css/index2.css" type="text/css" rel="stylesheet" /> -->
        <!-- <link href="css/tab.css" type="text/css" rel="stylesheet" /> -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/tab.js"></script>
					<script>

					
$(document).ready(function(){
	$('body').on('click','#cartimage',function(e){
    	var inputqnty=$('#ValueId').val();
	var itemid=$('#itemIdd').val();
	var name=$('#nameId').val();
	var category=$('#categoryId').val();
	var price=$('#priceId').val();
	var availquantity=$('#quantityId').val();


	if($('#ValueId').val() && ($('#ValueId').val())!=0 && $.isNumeric(parseInt($('#ValueId').val()))){
        if(parseInt(inputqnty)<=parseInt(availquantity)){
				$.ajax({
	type: 'POST',
    url: 'shoppingCart.php',
	data: {
			service1: inputqnty,
			seritemid: itemid,
			sername: name,
			sercate: category,
			serprice: price,
			seravailqnty: availquantity
        },
    success: function (data) {
          	
          if(data=="done"){
	        $(location).attr('href', 'viewcart.php');
	  }
    },
    error: function (xhr, status, error) {
        if (xhr.status > 0) alert('got error: ' + status); // status 0 - when load is interrupted
    }
});
		}
		else{
		
		alert("stock is not there");	
	   }
	}
	else{
		alert("not valid");
	}
	
	


	
 
});	
});
	/*				
					
$(document).ready(function(){
	$('body').on('click','#cartimage',function(e){
   	var inputqnty=$('#ValueId').val();
	var itemid=$('#itemIdd').val();
	var name=$('#nameId').val();
	var category=$('#categoryId').val();
	var price=$('#priceId').val();
	var availquantity=$('#quantityId').val();
	//alert(availquantity);
	//alert(inputqnty);
	if(!$.isNumeric(inputqnty)){
		alert("Enter valid input");
	}
	else if(inputqnty>availquantity){
		alert("enter smaller numbers");
	}
	else if(inputqnty>0){
	$.ajax({	
	type: 'POST',
    url: 'shoppingCart.php',
	data: {
			service1: inputqnty,
			seritemid: itemid,
			sername: name,
			sercate: category,
			serprice: price,
			seravailqnty: availquantity
        },
    success: function (data) {
          	
          if(data=="done"){
	        $(location).attr('href', 'viewcart.php');
	  }
    },
    error: function (xhr, status, error) {
        if (xhr.status > 0) alert('got error: ' + status); // status 0 - when load is interrupted
    }
});
	}
	else{
		alert("Invalid entry. Try again later");
	}

 
});	
});*/		
					</script>
                    </head>
                    <body>
                        
                        
                                <?php include 'menuBar.php'; ?>
                            
                        
                        <?php
        echo "<div class='container'>
                    <div class='col-lg-3'>
                            <div class='left_sidebar_area'>
                                <aside class='l_widget l_categories_widget'>
                                    <div class='l_title'>
                                        <h3>categories</h3>
                                    </div>
                                    <ul>
                                        <li><a href='CatDisplay.php?cat=1'>Action figures</a></li>
                                        <li><a href='CatDisplay.php?cat=2'>Animals</a></li>
                                        <li><a href='CatDisplay.php?cat=3'>Cars</a></li>
                                        <li><a href='CatDisplay.php?cat=4'>Dolls</a></li>
                                        <li><a href='CatDisplay.php?cat=5'>Puzzles</a></li>
                                        <li><a href='CatDisplay.php?cat=6'>Sports</a></li>
                                        
                                    </ul>
                                </aside>
                            </div>
                   </div>";   
        ?>
                        <div class="col-lg-9">
                        
                            
                                <div class="entry" style="width: 60%; align:center; padding-left: 20%">
                                    <h2 class="title"><?php echo $row['itemname']; ?></h2>

                                    <?php
                                    if($row['quantity']!=0){
                                    echo '	<table border="0" width="100%">
                                <tr>
                                    <td><hr color="purple"></td>
				</tr>
				<tr align="center" bgcolor="#EEE9F3">
                                     <td>Item Details</td>
				</tr>
				<tr>
                                    <td><hr color="purple"></td>
				</tr>
                		 </table>
				<table border="0"  width="100%" bgcolor="#ffffff">
				<tr> 
				<td width="25%" rowspan="3">
					<img src="' . $row['image'] . '" width="150" height="150">
				</td>
				</tr>
				<tr> 
				<td width="50%" height="100%">
				<table border="0"  width="100%" height="100%">
                                <tr valign="top">
				<td align="right" width="10%">NAME</td>
				<td width="6%">: </td>
				<td align="left">' . $row['itemname'] . '</td>
				</tr>
                                <tr>
        			<td align="right"> ID</td>
				<td>: </td>
				<td align="left">' . $row['itemid'] . '</td>
				</tr>
                                <tr>
        			<td align="right"> PRICE</td>
				<td>: </td>
				<td align="left">$' . $row['price'] . '</td>
				</tr>
                        	</table>
				</td>
				</tr>
                                </table>
				<table border="0" width="100%">
				 <tr>
				<td><hr color="purple"></td>
				</tr>
				 <tr align="center" bgcolor="#EEE9F3">
				 <td>DESCRIPTION</td>
				</tr>
				<tr>
				<td><hr color="purple"></td>
				</tr>
				 </table>
				 ' . $row['itemdesc'] . '
				 <tr><td colspan=2><hr color="purple"></td></tr>
				
				<table border="0" width="100%">
				
				<tr align="center" bgcolor="#EEE9F3">';

                                    if (isset($_SESSION['status'])) {
										
					echo '
enter quantity :<input type="text" id="ValueId" name="formvalueId"/>	
<input type="hidden" id="itemIdd" name="valueId" value="'. $row["itemid"].'"/>
<input type="hidden" id="nameId" name="name" value="'. $row["itemname"] . '"/>
<input type="hidden" id="categoryId" name="category" value="'. $row["categoryId"].'"/>
<input type="hidden" id="priceId" name="price" value="'.$row["price"].'"/>
<input type="hidden" id="quantityId" name="quantity" value="'.$row["quantity"].'"/>';



				
				
                                        echo ' <td>
				<img src="images/addtocart.jpg"  id="cartimage">
					</td>';
                                    } else {
                                        echo '<td><img src="images/addtocart.jpg" width="100px" height="50px"><br><a href="index.php"> <h6>Please Login to continue shopping..</h6></a></td>';
                                    }
                                    echo '</tr>
				</table>';
                                    }
                                    else{
                                        echo '	<table border="0" width="100%">
                                <tr>
                                    <td><hr color="purple"></td>
				</tr>
				<tr align="center" bgcolor="#EEE9F3">
                                     <td>Item Details</td>
				</tr>
				<tr>
                                    <td><hr color="purple"></td>
				</tr>
                		 </table>
				<table border="0"  width="100%" bgcolor="#ffffff">
				<tr> 
				<td width="25%" rowspan="3">
					<img src="' . $row['image'] . '" width="150" height="150">
				</td>
				</tr>
				<tr> 
				<td width="50%" height="100%">
				<table border="0"  width="100%" height="100%">
                                <tr valign="top">
				<td align="right" width="10%">NAME</td>
				<td width="6%">: </td>
				<td align="left">' . $row['itemname'] . '</td>
				</tr>
                                <tr>
        			<td align="right"> ID</td>
				<td>: </td>
				<td align="left">' . $row['itemid'] . '</td>
				</tr>
                                <tr>
        			<td align="right"> PRICE</td>
				<td>: </td>
				<td align="left">$' . $row['price'] . '</td>
				</tr>
                                <tr >
                                <td colspan="3" style="color:red"> This item has been sold out
                                </td></tr>
                        	</table>
				</td>
				</tr>
                                </table>
				<table border="0" width="100%">
				 <tr>
				<td><hr color="purple"></td>
				</tr>
				 <tr align="center" bgcolor="#EEE9F3">
				 <td>DESCRIPTION</td>
				</tr>
				<tr>
				<td><hr color="purple"></td>
				</tr>
				 </table>
				 ' . $row['itemdesc'] . '
				 <tr><td colspan=2><hr color="purple"></td></tr>
				<table border="0" width="100%">
				 <tr align="center" bgcolor="#EEE9F3">';
                                        echo '<td><img src="images/addtocart.jpg" width="100px" height="50px"><br><a href="index.php"> <h5 style="color:red">This item is out of stock</h6></a></td>';
                                    echo '</tr>
				</table>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </body>
                    </html>