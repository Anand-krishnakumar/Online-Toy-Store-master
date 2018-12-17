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
        <script src="js/tab.js"></script>
    </head>
    <body>
        <div id="menu">
            <div id="submain" align="center">
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
       
            <?php
            if (isset($_SESSION['userName'])) {
              //  include "connectToMysql.php";
              echo " <div class='col-lg-6'>

             <form method='post'>
              
                <input type='submit' name='ltoh' id='ltoh' class='btn btn-danger' style='width:100px;height:50px;' value='price low to high' />
                <input type='submit' name='htol' id='htol' class='btn btn-danger' style='width:100px;height:50px;'value='price high to low' /><br/>
            </form>
            </div>
            <div class='col-lg-9'>";
            
$connecti = mysqli_connect("localhost", "root", "root", "gadgetstore");

if (!$connecti) {
    die("Connection failed: " . mysqli_connect_error());
}

                $catId = $_GET['cat'];
                $flag = 0;
                function lowtohigh($catId,$connecti)
                {
                    $sql = "SELECT * FROM gadgets WHERE categoryId='$catId' and flag=1 ORDER BY  price ASC";
                    $result = mysqli_query($connecti, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<div id="products">
                            <figure class="thumb">
                                <a href="detail.php?name=' . $row['itemname'] . '"><img src="' . $row['image'] . '"alt="productImage" width="150px" height="150px"/></a>
                            <figcaption><a href="detail.php?name=' . $row['itemname'] . '">' . $row['itemname'] . '</a><br> $' . $row['price'] . '</figcaption>
                            </figure>
                            </div>';
                    };
                }
                function hightolow($catId,$connecti)
                {
                    $sql = "SELECT * FROM gadgets WHERE categoryId='$catId' and flag=1 ORDER BY price DESC";
                    $result = mysqli_query($connecti, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<div id="products">
                                <figure class="thumb">
                                <a href="detail.php?name=' . $row['itemname'] . '"><img src="' . $row['image'] . '"alt="productImage" width="150px" height="150px"/></a>
                                <figcaption><a href="detail.php?name=' . $row['itemname'] . '">' . $row['itemname'] . '</a><br> $' . $row['price'] . '</figcaption>
                                </figure>
                            </div>';
                    }
                }

                if(array_key_exists('ltoh',$_POST)){
                    $flag =1;
                    lowtohigh($catId,$connecti);
                }
                if(array_key_exists('htol',$_POST)){
                    $flag =1;
                    hightolow($catId,$connecti);
                }
                // if ($catId == 'less') {
                //     $sql = "SELECT * FROM gadgets ORDER BY price ASC";
                //     $result = mysqli_query($connecti, $sql);
                //     while ($row = mysqli_fetch_array($result)) {
                //         echo '<div id="products">
                //  <figure class="thumb">
                //  <a href="detail.php?name=' . $row['itemname'] . '"><img src="' . $row['image'] . '"alt="productImage" width="150px" height="150px"/></a>
                //      <figcaption><a href="detail.php?name=' . $row['itemname'] . '">' . $row['itemname'] . '</a><br> $' . $row['price'] . '</figcaption>
                //  </figure>
                // </div>';
                //     }
                // } else if ($catId == 'gre') {
                //     $sql = "SELECT * FROM gadgets ORDER BY price DESC";
                //     $result = mysqli_query($connecti, $sql);
                //     while ($row = mysqli_fetch_array($result)) {
                //         echo '<div id="products">
                //  <figure class="thumb">
                //  <a href="detail.php?name=' . $row['itemname'] . '"><img src="' . $row['image'] . '"alt="productImage" width="150px" height="150px"/></a>
                //      <figcaption><a href="detail.php?name=' . $row['itemname'] . '">' . $row['itemname'] . '</a><br> $' . $row['price'] . '</figcaption>
                //  </figure>
                // </div>';
                //     }
                // } 
                if ($flag == 0) {
                
                    $sql = "SELECT * FROM gadgets WHERE categoryId='$catId' and flag=1";
                    $result = mysqli_query($connecti, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<div id="products">
                 <figure class="thumb">
                 <a href="detail.php?name=' . $row['itemname'] . '"><img src="' . $row['image'] . '"alt="productImage" width="150px" height="150px"/></a>
                     <figcaption><a href="detail.php?name=' . $row['itemname'] . '">' . $row['itemname'] . '</a><br> $' . $row['price'] . '</figcaption>
                 </figure>
                </div>';
                    }
                

                }
            } else {
                //include 'content.php';
                include 'slideShow.php';
            }
            ?>
        </div>
    </div>  
    </div>
    </div>       
        
    </body>
</html>

