<head>
        <link rel="stylesheet" href="css/productList.css">
    </head>
<div id="content">
    <h3>New in Store</h3>
    <?php
    include "connectToMysql.php";
$sql = "SELECT * FROM gadgets WHERE categoryId=9";
$result = mysqli_query($conn,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
while($row = mysqli_fetch_array($result)) {
   
        echo '<div id="products">
                 <figure class="thumb">
                 <a href="detail.php?name='.$row['itemname'].'"><img src="' .$row['image']. '"alt="productImage" width="150px" height="150px"/></a>
                     <figcaption><a href="detail.php?name='.$row['itemname'].'">' .$row['itemname']. '</a><br> $' .$row['price']. '</figcaption>
                 </figure>
                </div>';
}
?>
    
</div>