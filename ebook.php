<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head>
<script type="text/javascript" src="js/sliderman.1.3.8.js"></script>
<link rel="stylesheet" type="text/css" href="css/sliderman.css" />
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				
				</div>
				<div id="wrapper">
		<div id="examples_outer">
			<div id="slider_container_2">
				<div id="SliderName_2" class="SliderName_2">
					<img src="img/1.jpg" width="700" height="450" alt="Demo2 first" title="Demo2 first" usemap="#img1map" />
					<map name="img1map">
						<area href="#img1map-area1" shape="rect" coords="100,100,200,200" />
						<area href="#img1map-area2" shape="rect" coords="300,100,400,200" />
					</map>
					<div class="SliderName_2Description"><strong>Open a free account</strong></div>
					<img src="img/2.jpg" width="700" height="450" alt="Demo2 second" title="Demo2 second" />
					<div class="SliderName_2Description"><strong>Large collection of best books</strong></div>
					<img src="img/3.jpg" width="700" height="450" alt="Demo2 third" title="Demo2 third" />
					<div class="SliderName_2Description"><strong>No renewals, no extra charge</strong></div>
					<img src="img/4.jpg" width="700" height="450" alt="Demo2 fourth" title="Demo2 fourth" />
					<div class="SliderName_2Description"><strong>Check out our library</strong></div>
				</div>
				<div id="SliderNameNavigation_2"></div>
				<script type="text/javascript">
					effectsDemo2 = 'rain,stairs,fade';
					var demoSlider_2 = Sliderman.slider({container: 'SliderName_2', width: 700, height: 450, effects: effectsDemo2,
						display: {
							autoplay: 3000,
							loading: {background: '#000000', opacity: 0.5, image: 'img/loading.gif'},
							buttons: {hide: true, opacity: 1, prev: {className: 'SliderNamePrev_2', label: ''}, next: {className: 'SliderNameNext_2', label: ''}},
							description: {hide: true, background: '#000000', opacity: 0.4, height: 50, position: 'bottom'},
							navigation: {container: 'SliderNameNavigation_2', label: '<img src="img/clear.gif" />'}
						}
					});
				</script>
			</div>
			</div>
			
			</div>
				
				
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Welcome to the Ebook Store
							
							</h1>
							<div class="entry">
								<br>
								<p>
								E-Book store is currently new in marketplace.
								Provides a wide collection of e-books to customer's interest.
								You can discover all-new,rising author books.
								Books are segregate by providing genres like Astrology,Sports,
								Business,Tourism etc.
								</p>
								<br>		
								
								<object width="550" height="400">
								
								<embed src="books.swf" width="550" height="400">
								</embed>
								</object>
								<br><br>
								<p>
								The E-book store is started as an online bookseller.
								We're glad to have you in the E-Book store community.
								</p>
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>






<ul>
    <li id="login">

        <?php
        if (isset($_SESSION['status'])) {
            echo '<h2>Hello :  ' . $_SESSION['unm'] . '</h2>';
        } else {
            echo '<form action="loginpr.php" method="POST">
										<h2>LogIn</h2>
											<b>Username:</b>
											<br><input type="text" name="usernm"><br>
											<br>
											
											
											<b>Password:</b>
											<br><input type="password" name="pwd">
											<input type="submit" id="x" value="Login" />
										</form>';
        }
        ?>
    </li>

    <li id="search">
        <h2>Search</h2>
        <form method="GET" action="search_result.php">
            <fieldset>
                <input type="text" id="s" name="s" value="" />
                <input type="submit" id="x" value="Search" />
            </fieldset>
        </form>
    </li>
    <li>
        <h2>Categories</h2>
        <ul>


<?php
$link = mysqli_connect("localhost", "root", "", "ebook-store");

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}


$query = "select * from category ";

$res = $link->query($query);


while ($row = mysqli_fetch_array($res)) {
    echo '<li><a href="subcat.php?cat=' . $row['cat_id'] . '&catnm=' . $row["cat_nm"] . '">' . $row["cat_nm"] . '</a></li>';
}

//mysql_close($link);
?>
        </ul>
    </li>

</ul>




<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "ebook-store");

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}


$id = $_GET['id'];

$q = "select * from book where b_id=$id";

$res = $link->query($q) or die("Can't Execute Query..");
$row = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html >
    <head>
        <link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
        <script src="js/prototype.js" type="text/javascript"></script>
        <script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
        <script src="js/lightbox.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/java.js"></script>
        <script type="text/javascript" src="js/sliderman.1.3.8.js"></script>
        <link rel="stylesheet" type="text/css" href="css/sliderman.css" />

        <?php
        include("includes/head.inc.php");
        ?>
    </head>

    <body>
        <!-- start header -->
        <div id="header">
            <div id="menu">
                <?php
                include("includes/menu.inc.php");
                ?>
            </div>
        </div>

        <div id="wrapper">
            <div id="examples_outer">
                <div id="slider_container_2">
                    <div id="SliderName_2" class="SliderName_2">
                        <img src="img/1.jpg" width="700" height="450" alt="Demo2 first" title="Demo2 first" usemap="#img1map" />
                        <map name="img1map">
                            <area href="#img1map-area1" shape="rect" coords="100,100,200,200" />
                            <area href="#img1map-area2" shape="rect" coords="300,100,400,200" />
                        </map>
                        <div class="SliderName_2Description"><strong>Open a free account</strong></div>
                        <img src="img/2.jpg" width="700" height="450" alt="Demo2 second" title="Demo2 second" />
                        <div class="SliderName_2Description"><strong>Large collection of best books</strong></div>
                        <img src="img/3.jpg" width="700" height="450" alt="Demo2 third" title="Demo2 third" />
                        <div class="SliderName_2Description"><strong>No renewals, no extra charge</strong></div>
                        <img src="img/4.jpg" width="700" height="450" alt="Demo2 fourth" title="Demo2 fourth" />
                        <div class="SliderName_2Description"><strong>Check out our library</strong></div>
                    </div>
                    <div id="SliderNameNavigation_2"></div>
                    <script type="text/javascript">
                            effectsDemo2 = 'rain,stairs,fade';
                            var demoSlider_2 = Sliderman.slider({container: 'SliderName_2', width: 700, height: 450, effects: effectsDemo2,
                                    display: {
                                            autoplay: 3000,
                                            loading: {background: '#000000', opacity: 0.5, image: 'img/loading.gif'},
                                            buttons: {hide: true, opacity: 1, prev: {className: 'SliderNamePrev_2', label: ''}, next: {className: 'SliderNameNext_2', label: ''}},
                                            description: {hide: true, background: '#000000', opacity: 0.4, height: 50, position: 'bottom'},
                                            navigation: {container: 'SliderNameNavigation_2', label: '<img src="img/clear.gif" />'}
                                    }
                            });
                    </script>
                </div>
            </div>

        </div>

        <!-- end header -->

        <!-- start page -->

        <div id="page">
            <!-- start content -->
            <div id="content">
                <div class="post">
                    <h1 class="title"><?php echo $row['b_nm']; ?></h1>
                    <div class="entry">
                        <?php
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
				<td width="15%" rowspan="3">
					<img src="' . $row['b_img'] . '" width="100">
				</td>
				</tr>
				<tr> 
				<td width="50%" height="100%">
				<table border="0"  width="100%" height="100%">
                                <tr valign="top">
				<td align="right" width="10%">NAME</td>
				<td width="6%">: </td>
				<td align="left">' . $row['b_nm'] . '</td>
				</tr>
				<tr>
				<td align="right">ISBN</td>
				<td>: </td>
				<td align="left">' . $row['b_isbn'] . '</td>
				</tr>
				<tr>
				<td align="right">Publisher </td>
				<td>: </td>
				<td align="left">' . $row['b_publisher'] . '</td>
				</tr>											
				<tr>
				<td align="right"> Edition</td>
				<td>: </td>
				<td align="left">' . $row['b_edition'] . '</td>
				</tr>
				<tr>
				<td align="right">  PAGES</td>
				<td>: </td>
				<td align="left">' . $row['b_page'] . '</td>
				</tr>
				<tr>
        			<td align="right"> PRICE</td>
				<td>: </td>
				<td align="left">' . $row['b_price'] . '</td>
				</tr>
                        	</table>
				</td>
				</tr>
                                </table>
				<tr valign="bottom" >
				<a href="' . $row['b_img'] . '" rel="lightbox"><img src="images/zoom.gif" ></a>
				</tr>
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
				 ' . $row['b_desc'] . '
				 <tr><td colspan=2><hr color="purple"></td></tr>
				<table border="0" width="100%">
				 <tr align="center" bgcolor="#EEE9F3">';

                        if (isset($_SESSION['status'])) {
                            echo ' <td><a href="cartpr.php?nm=' . $row['b_nm'] . '&cat=' . $_GET['cat'] . '&rate=' . $row['b_price'] . '">
				<img src="images/addcart.jpg">
					</a></td>';
                        } else {
                            echo '<td><img src="images/addcart.jpg"><br><a href="index.php"> <h4>Please Login..</h4></a></td>';
                        }
                        echo '</tr>
				</table>';
                        ?>
                    </div>

                </div>

            </div>
            <!-- end content -->
            <!-- start sidebar -->
            <div id="sidebar">
                <?php
                include("includes/search.inc.php");
                ?>
            </div>
            <!-- end sidebar -->
            <div style="clear: both;">&nbsp;</div>

        </div> 
        <!-- end page -->
        <!-- start footer -->
        <div id="footer">
            <?php
            include("includes/footer.inc.php");
            ?>
        </div>
        <!-- end footer -->
    </body>
</html>

