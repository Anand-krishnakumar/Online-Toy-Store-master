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
        
                <?php include 'menuBar.php';?>
    
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
                <div class="post">
                    <h2 class="title">My Cart</h2>
                    <div class="entry" style="width: 80%; height: 20%">

                        <pre><?php
                            //	print_r($_SESSION);
                            ?></pre>

                        <form action="#" method="POST">
                            <table width="100%" border="0">
                                <tr>
                                    <Td> <b>No
                                    <td> <b>Product
                                    <td> <b>Quantity
                                    	<!-- <input type="image"  src="images/save.jpg" height="20" width="20" name="update"> -->
                                    <td> <b>Rate
                                    <td> <b>Price
                                    <td> <b>Delete
                                </tr>
                                <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
                                <?php
                                $tot = 0;
                                $i = 1;
                                if (isset($_SESSION['cart1'])) {
                                foreach ($_SESSION['cart1'] as $id => $x) {
                                echo '<tr>
                                        <Td> ' . $i . '
                    					<td> ' . $x['nm'] . '
                    					<td> ' . $x['qty'] . '
                    					  
                    					<td> ' . $x['rate'] . '
                    					<td> ' . ($x['qty'] * $x['rate']) . '
                    					<td> <a href="delete.php?id=' .$x['id']. '&name=' .$x['nm'] . '">Delete</a>
                    					</tr>';
                                $tot = $tot + ($x['qty'] * $x['rate']);
                                $i++;
                                    }
                                }
                                ?>
                                <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
                                <tr>
                                <td colspan="6" align="right">
                                <h3>Total:</h3>
                                </td>
                                <td> <h3><?php echo $tot; ?> </h3></td>
                                </tr>
                                <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
                                <Br>
                                </table>						
                                </form>
                        <a id="onclick" href="checkOut.php">Proceed to checkout<img src="images/checkout.png" alt="checkOut" width="140px" height="50px"</a>
                                </div>
                        </div>
                </div>
        </div>
    </body>
</html>