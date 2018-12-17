<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php session_start(); ?>
<html>
    <head>
        <title>UTD Tech Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link href="css/index2.css" type="text/css" rel="stylesheet" />
        <link href="css/tab.css" type="text/css" rel="stylesheet" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/tab.js"></script>
    </head>
    <body>
       <?php include_once("template_header.php");?>
        <div id="menu">
            <div id="submain" align="center">
                <?php include 'amenuBar.php';?>
            </div>
        </div>
        <?php include_once("categories_template.php");?>
        <div id="data">
            
            <?php
            if (isset($_SESSION['userName'])) {
                include 'productList.php';
            }
			else{
			include 'slideshow.php';
			 // include 'content.php';
			}
?>
        </div>    
    </body>
</html>
