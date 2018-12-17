<html>
    <head>
        <link rel="stylesheet" href="css/productList.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
</html>
<?php
if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 4;
        $offset = ($pageno-1) * $no_of_records_per_page;

$conn = mysqli_connect("localhost", "root", "root", "gadgetstore");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$total_pages_sql = "SELECT COUNT(*) FROM gadgets";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM gadgets LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data)){
             echo '<div id="products">
                 <figure class="thumb">
                 <a id = "red" ref="detail.php?name='.$row['itemname'].'"><img src="' .$row['image']. '"alt="productImage" width="100px" height="100px"/></a>
                     <figcaption><a href="detail.php?name='.$row['itemname'].'">' .$row['itemname']. '</a><br> $' .$row['price']. '</figcaption>
                 </figure>
                </div>';
        }
        // mysqli_close($conn);
?>
 <ul class="pagination">
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo 'disabled'; } else { echo "?pageno=1"; } ?>">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>"><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>