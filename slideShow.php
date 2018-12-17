<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<style>
.mySlides {display:all;}
</style>
<body>

<h2 class="w3-center"><a href="login.php">Login to browse more</a></h2>

<div class="w3-content w3-section" style="float:center;">
  <img class="mySlides" src="images/Actionfigures/action_figure_1.jpg" style="width:500px;height:500px">
  <img class="mySlides" src="images\Animals\Animal1.jpg" style="width:500px;height:500px">
  <img class="mySlides" src="images\Cars\Car1.jpg" style="width:500px;height:500px">
  <img class="mySlides" src="images\Dolls\Doll1.jpg" style="width:500px;height:500px">
  <img class="mySlides" src="images\Puzzle\puzzle_1.jpg" style="width:500px;height:500px">
  <img class="mySlides" src="images\Sports\Sports1.jpg" style="width:500px;height:500px">
</div>

<script>
var myIndex = 0;
carousel();
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); 
}
</script>

</body>
</html>
