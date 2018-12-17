    <html>
    <head>
        <title>Administration</title>
                <title>Toy Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- <link href="css/index2.css" type="text/css" rel="stylesheet" />
        <link href="css/tab.css" type="text/css" rel="stylesheet" /> -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
        <link href="css/admin.css" type="text/css" rel="stylesheet" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/admin.js"></script>
        <script src="js/tab.js"></script>
        <script>
            function showUser(str) {
                if (str == "") {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                } else {
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET", "getList.php?q=" + str, true);
                    xmlhttp.send();
                }
            }
        </script>
    </head>
    <body>
        <div id="menu">
            <div id="submain" align="center">
        </div>
        <div  bgcolor="#000000"><h1>Admin</h1></div>
        <div class="tabs">
            <ul class="tab-links">
                <li class="active"><a href="#tab1">Add Item</a></li>
                <li><a href="#tab2">Delete Item</a></li>
                <li><a href="#tab3">Update Item</a></li>
                <li><a href="http://localhost/OnlineTechStore-1/index.php">List Item</a></li>
                <li><a href="#tab4">Logout</a></li>
            </ul>

            <div class="tab-content">
                <div id="tab1" class="tab active">
                    <form action="upload1.php" method="post" enctype="multipart/form-data">
                        <table>
                            <tr><td>Item name:</td>
                                <td><input type="text" name="name" required></td>
                            </tr>
                            <tr><td>Item Category:</td>
                                <td><select name="category" id="category">
                                        <option value="Select a category">Select one</option>
                                        <option value="Action Figures">Action Figures</option>
                                        <option value="Animals">Animals</option>
                                        <option value="Cars">Cars</option>
                                        <option value="Dolls">Dolls</option>
                                        <option value="Puzzles">Puzzles</option>
                                        <option value="Sports">Sports</option>
                                                                          </select></td>
                            </tr>
                            
                            <tr><td>Price:</td>
                                <td><input type="number" name="price" required></td>
                            </tr>
                            <tr><td>Description:</td>
                                <td><textarea title="desc" name="desc" required></textarea></td>
                            </tr>
                            <tr><td>Quantity:</td>
                                <td><input type="number" name="qty" required></td>
                            </tr>
                            <tr><td>Image:</td>
                                <td><input type="file" name="fileToUpload" id="fileToUpload" required></td>
                            </tr>
                            <tr><td></td>
                                <td><button type="submit" name="submit">Submit</button></td></tr>
                        </table>
                    </form>
                </div>
                <div id="tab2" class="tab">
                    <form method="post">
                        <table>
                            <tr>
                                <td><h4>Select a category from where you want to delete item:</h4></td>
                            </tr>
                            <tr>
                                <td>
                                    <select onchange="showUser(this.value+','+'delete')">
                                        <option value="Select a category">Select one</option>
                                        <option value="Action Figures">Action Figures</option>
                                        <option value="Animals">Animals</option>
                                        <option value="Cars">Cars</option>
                                        <option value="Dolls">Dolls</option>
                                        <option value="Puzzles">Puzzles</option>
                                        <option value="Sports">Sports</option>
                                        
                                       
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <br>
                    <div id="txtHint"><b>gadgets will be listed here...</b></div>

                </div>

                <div id="tab3" class="tab">
                    <?php include_once("update.php"); ?>
                </div>
                <div id="tab4" class="tab">
                    <a href="Logout.php">Click here to log out</a>
                </div>
            </div>
        </div>
    </body>
</html>
