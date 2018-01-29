<?php
include 'db_connect.php';

session_start();
 
$page_title="Books";
//include 'layout_head.php';
  include "projectheader2.php";

// to prevent undefined index notice
$action = isset($_GET['action']) ? $_GET['action'] : "";

$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : "1";
$name = isset($_GET['name']) ? $_GET['name'] : "";
 
if($action=='added'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$name}</strong> was added to your cart!";
    echo "</div>";
}
            
if($action=='exists'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$name}</strong> already exists in your cart!";
    echo "</div>";
}

$query = "SELECT * FROM products ORDER BY name";
$result = mysqli_query($con,$query);

 
$num = mysqli_num_rows($result);

 
if($num>0){
 
    //start table
    echo "<table class='list_table'>";
 
        // our table heading
        echo "<tr>";
            echo "<th class='braun price'>Book Name</th>";
            echo "<th class='braun price'>Price (USD)</th>";
             echo "<th class='braun price'>Photo</th>";
            echo "<th class='braun price'>Action</th>";
            
        echo "</tr>";
 
        while ($row =mysqli_fetch_assoc($result)){
           
  
            //creating new table row per record
            echo "<tr >";
                echo "<td class='white two'>";
                    echo "<div class='product-id' style='display:none;'>{$row["id"]}</div>";
                    echo "<div class='product-name'>{$row["name"]}</div>";
                echo "</td>";
                echo "<td class='white two'>&#36;{$row["price"]}</td>";
                 echo "<td class='white two'> <img src='{$row["photo"]}' style='height: 80px;'/></td>";
                echo "<td class='white two'>";
                    echo "<a href='add_to_cart.php?id={$row["id"]}&name={$row["name"]}' class='btn btn_checkout'>";
                        echo "<span class='glyphicon glyphicon-shopping-cart'></span> Add to cart";
                    echo "</a>&nbsp;&nbsp";
                     echo "<a href='display_product.php?book={$row["id"]}'class='btn btn_checkout'>view book detailes";
                    echo "</a>";
                 echo "</td>";
                 
                 
            echo "</tr>";
        }
 
    echo "</table>";
}
 
// tell the user if there's no products in the database
else{
    echo "No products found.";
}
 
//include 'layout_foot.php';
include "projectfooter.php"; 
?>