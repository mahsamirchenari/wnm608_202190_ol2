<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Product List</title>
    <?php include "parts/meta.php"; ?>
<?php include "parts/navbar.php"; ?>
    
</head>
<body>

<div class="container">
   
            <h2>PRODUCT LIST</h2>
            <!-- <ul>
                <li><a href="product_item.php?id=1">Product One</a></li>
                <li><a href="product_item.php?id=2">Product Two</a></li>
                <li><a href="product_item.php?id=3">Product Three</a></li>
                <li><a href="product_item.php?id=4">Product Four</a></li>
            </ul> -->

            <?php
            include_once "lib/php/functions.php";
              include_once "parts/templates.php";
         
            $result = makeQuery(makeConn(), "
                SELECT *
                FROM `products`
                ORDER BY `price`
              
            ");
            // print_p($result);
            echo "<div class= 'productlist grid gap'>", array_reduce($result,'productListTemplate'), "</div>";
            ?>


    </div>

    </div>
<?php include "parts/footer.php"; ?>

</body>
</html>