<html>
    <head>
        <title>User Registration</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/userRegister.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/info.css" type="text/css" rel="stylesheet" />
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
    </head>
    </style>
    <body>
       <header class="shop_header_area carousel_menu_area">
                <div class="carousel_top_header black_top_header row m0">
                    <div class="container">
                        <div class="carousel_top_h_inner">
                            
                            <div class="float-md-right">
                                <ul class="account_list">
                                    <li><a style= "text-decoration: None"href="index.php">Home</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </header>
        <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="top_header_left">
                            <a href="index.php"><img src="Logo.png" alt="" height = "70" width = "150"></a>
                        </div>
                    </div>
                </div>
        </div>            
        <br>
        <div class="container">
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
  <div class = "p">
  <h2> Sign up </h2>
  <div id = "gray">Please fill in this form to create an account!</div>
  <hr>
  <form action="addUser.php" method="POST">
  <div class="form-row">
  <div class="form-group col-md-6">
    <input type="email" name="username" id="username" class="form-control" placeholder="Email">
  </div>
  <div class="form-group col-md-6">

    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
  </div>
</div>
   <div class="form-group">
      <input type="text" class="form-control" id="address" name="address" placeholder="Address">
   </div>
  <div class="form-group">
    <input type="text" class="form-control" id="city" name="city" placeholder="City">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="state" name="state" placeholder="State">
  </div>
  <div class="form-group">
    <input type="number" class="form-control" id="phone" name="phone" min="1000000000" max="9999999999" placeholder="10 digit phone number">
  </div>
  <button type="submit" id="signup" class="btn subs_btn form-control">register now</button>
</form>
</div>
<div id="message"></div>
    <div class="col-md-4">
    </div>
</div>
</div>
        <!-- <div class="form">
            <h3>USER REGISTRATION</h3>
            <form method="post" action="addUser.php">
            <table align="center">
                <tr><td>Username:</td><td><input type="email" name="username" id="username" placeholder="Enter Email"></td>
			<td><span id="1" class="info"></span></td></tr>
                <tr><td>Password:</td><td><input type="password" name="password" id="password" placeholder="Password"></td>
			<td><span id="2" class="info"></span></td></tr>
                <tr><td>Address:</td><td><input type="text" name="address" id="address" placeholder="Address"></td>
			<td><span id="3" class="info"></span></td></tr>
                <tr><td>City:</td><td><input type="text" name="city" id="city" placeholder="City"></td>
			<td><span id="4" class="info"></span></td></tr>
                <tr><td>State:</td><td><input type="text" name="state" id="state" placeholder="State"></td>
			<td><span id="5" class="info"></span></td></tr>
               <tr><td>Phone:</td><td><input type="number"  name="phone" id="phone" min="1000000000" max= "9999999999" placeholder="10 digit number"></td>
			<td><span id="6" class="info"></span></td></tr>
               <tr><td></td><td><button type="submit" id="submit">Register</button></td></tr>
            </table> 
                        </form>

        </div>
 -->            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script src="js/validate.js"></script>
    </body>

</html>

