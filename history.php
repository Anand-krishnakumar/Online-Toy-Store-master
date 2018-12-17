<?php session_start(); ?>
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
            <div id="content">
			 <div><h2 class="title">Items Purchased</h2><br></div>
                <div class="entry" style="width: 80%; height: 20%">
                    <?php
                 //   include "connectToMysql.php";
				 
$connecti = mysqli_connect("localhost", "root", "root", "gadgetstore");

if (!$connecti) {
    die("Connection failed: " . mysqli_connect_error());
}



                    $name=$_SESSION['userName'];
                    $sql="SELECT * FROM orders,gadgets WHERE orders.itemid=gadgets.itemid and orders.userName='$name' and flag=1";
                    $result = mysqli_query($connecti,$sql);
					
                    $count=0;
                    echo '<table width="50%" border="0">
                                <tr>
                                    <td> <b>Product
                                    <td> <b>Rate
                                    </tr>
                                    <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>';
                    while($row = mysqli_fetch_array($result)) {
                        $count++;
						
						{
                        echo '<tr><td>' .$row['itemname']. '</td>'
                                . '<td>$ ' .$row['price']. '</td></tr>';
						}
						
                    }
                    echo '</table>';
					echo '<h3>Total number of items purchased : '.$count;
					echo '</h3>';
               
					$sql="SELECT * FROM orders,gadgets WHERE orders.itemid=gadgets.itemid and orders.userName='$name' and flag=0";
                    $result = mysqli_query($connecti,$sql);
					// echo 'The below items are deleted by the admin, sorry for inconvenience.';
					 // echo '<table width="50%" border="0">
      //                           <tr>
      //                               <td> <b>Product
      //                               <td> <b>Rate
      //                               </tr>
      //                               <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>';
                    while($row = mysqli_fetch_array($result)) {
                        $count++;
						
						{
                        echo '<tr><td>' .$row['itemname']. '</td>'
                                . '<td>$ ' .$row['price']. '</td></tr>';
						}
						
                    }
					echo '</table>';
					
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>