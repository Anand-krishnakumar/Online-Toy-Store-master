 <div class="home_box">
           
            <!--================Menu Area =================-->
              <?php
                #include 'validate.php';
                if (isset($_SESSION['userName'])) {
                    $vf=$_SESSION['userName'];
                
                $nameuser=explode("@", $vf);
                  $usme = $nameuser[0];
                   echo '<header class="shop_header_area carousel_menu_area">
                <div class="carousel_top_header black_top_header row m0">
                    <div class="container">
                        <div class="carousel_top_h_inner">
                            
                            <div class="float-md-right">
                                <ul class="account_list">';
                echo '<li>';
                echo '<a href= #>Welcome ' .$usme .'</a>';
                echo '</li>';
                echo '<li><a href="Logout.php">Logout</a></li>
                      <li><a href="viewcart.php">ViewCart</a></li>
                      <li><a href="history.php">History</a></li>';
                if($_SESSION["isAdmin"] == 1)
                    {
                        echo '<li><a href="admin.php">Edit Items</a></li>';
                    };
                echo '
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>';

                } else {
                    echo '<header class="shop_header_area carousel_menu_area">
                <div class="carousel_top_header black_top_header row m0">
                    <div class="container">
                        <div class="carousel_top_h_inner">
                            
                            <div class="float-md-right">
                                <ul class="account_list">
                                    <li><a href="NewUser_Register.php">SignUp</a></li>
                                    <li><a href="login.php">Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>';
                }
                ?>
           
               <!--  <div class="carousel_menu_inner">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="index.php"><img src="Logo.png" height = "70" width = "150" alt=""></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>

                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <form class="form-inline" action="search.php" method="POST">
                                    <input id="toySearch" name="toySearch" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                                </nav>      
                            </div>
                        </nav>
                    </div>
                </div>
            </header> -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="top_header_left">
                            <a href="index.php"><img src="Logo.png" alt="" height = "70" width = "150"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <br>
                        <div class="top_header_middle">
                            <form action="search.php" method="POST" class="input-group">
                                <input id="toySearch" name="toySearch" type="text" class="form-control" placeholder="Search by name or category" aria-label="Search">

                            </form>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <br>
        </div>
            <!--================End Menu Area =================-->

                            <!-- <form action = 'search.php' method = 'POST'> -->
                           <!--  <div class="input-group">
                               
                                    <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                                    <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="button"><i class="icon-magnifier"></i></button>
                                    </span>
                                
                            </div> -->
                            <!-- </form>  -->   
                    
<!-- <div id="sub" align="center">
    <nav>
        <ul style="alignment-adjust: middle">
            <li id="home">
                <a id="homePage" href="index.php" target="_top">Home</a>
            </li> 
           <li id="searchtab">
                <form action="search.php" method="POST">
                <input type="text" id="toySearch" name="toySearch" placeholder="Search product name or category" class="search"/>
                </form>
            </li> -->
