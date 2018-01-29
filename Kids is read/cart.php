
<?php
session_start();

$page_title="Cart";
 include "projectheader2.php";
 include 'db_connect.php'; 
//include 'layout_head.php';
 
$action = isset($_GET['action']) ? $_GET['action'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";
 
if($action=='removed'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$name}</strong> was removed from your cart!";
    echo "</div>";
}
 
else if($action=='check')
{
    if(count($_SESSION['cart_items'])>0){
        $sql ="select UserID from users where UserFname=".$_SESSION['UserFname']."'";   
        $user_result=mysqli_query($con,$sql);
        $row =mysqli_fetch_assoc($user_result);
        $user_id=$row['UserID'];
        
        $sql="INSERT INTO card(date,user_id) VALUES ('".date('d.m.y h:i:s')."','$user_id')";

        if (mysqli_query($con,$sql))
        {
            $cart_id=mysqli_insert_id($con);
            foreach($_SESSION['cart_items'] as $id=>$value){
                $sql="INSERT INTO book_card(card_id,book_id) VALUES ('$cart_id','$id')";
                mysqli_query($con,$sql);
                unset($_SESSION['cart_items'][$id]);
            }
            //header('Location: pay_page.php?action=checkedout&name=' . $name);
            echo "<div class='alert alert-info'>";
            echo "<strong>{$name}</strong> your request added successfully we will contact with you ";
            echo "</div>";
        }
    }
    
}
if(count($_SESSION['cart_items'])>0 && $action!='check'){
 
    // get the product ids
    $ids = "";
    foreach($_SESSION['cart_items'] as $id=>$value){
        $ids = $ids . $id . ",";
    }
 
    // remove the last comma
    $ids = rtrim($ids, ',');
 
    //start table
    echo "<table class='list_table'>";
 
        // our table heading
        echo "<tr >";
            echo "<th class='braun price'>book Name</th>";
            echo "<th class='braun price'>Price (USD)</th>";
            echo "<th th class='braun price'>Photo</th>";
            echo "<th th class='braun price'>Action</th>";
        echo "</tr>";
 
        $query = "SELECT * FROM products WHERE id IN ({$ids}) ORDER BY name";
       $result = mysqli_query($con,$query);
       /* mysqli_stmt_execute($result);*/
 
        $total_price=0;

        while ($row =mysqli_fetch_assoc($result)){

                
                echo "<td class='white two'>";
                    /*echo "<div class='product-id' style='display:none;'>{$row["id"]}</div>";*/
                    echo "<div class='product-name'>{$row["name"]}</div>";
                echo "</td>";
                echo "<td class='white two'>&#36;{$row["price"]}</td>";
                 echo "<td class='white two'> <img src='{$row["photo"]}' style='height: 100px;'/></td>";
                echo "<td class='white two'>";



                    echo "<a href='remove_from_cart.php?id={$row["id"]}&name={$row["name"]}' class='btn btn-danger'>";
                        echo "<span class='glyphicon glyphicon-remove'></span> Remove from cart";
                    echo "</a>";
                    
                    
                    
                echo "</td>";
            echo "</tr>";
            $total_price+=$row["price"];
        }
 
        echo "<tr>";
                echo "<td class='white two'><b>Total</b></td>";
                echo "<td class='white two'>&#36;{$total_price}</td>";
                echo "<td class='white two'>";
                    echo "<a href='cart.php?action=check' class='btn btn_checkout'>";
                        echo "<span class='glyphicon glyphicon-shopping-cart'></span> Checkout";
                    echo "</a>";
                echo "</td>";
            echo "</tr>";
 
    echo "</table>";
}
 
else{
    echo "<div class='alert alert-danger'>";
        echo "<strong>No products found</strong> in your cart!";
    echo "</div>";
}
 
//include 'layout_foot.php';
?>
<?php include "projectfooter.php"; ?>