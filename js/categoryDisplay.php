<?php
include "connectToMysql.php";
                $catId = $_GET['catId'];

                $sql = "SELECT * FROM toys WHERE cid='$catId'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo '<div id="products">
                 <figure class="thumb">
                 <a href="#"><img src="' . $row['toyImage'] . '"alt="productImage" width="150px" height="150px"/></a>
                     <figcaption><a href="#">' . $row['toyName'] . '</a><br> $' . $row['toyPrice'] . '</figcaption>
                 </figure>
                </div>';
                }
                    ?>
