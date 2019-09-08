<?php
      session_start();
//      $_SESSION['username']=$username;
      include_once "config.php";

      echo "MY CART";
if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
{
   // echo '<div class="cart-view-table-front" id="view-cart">';
    echo '<h3>Your Shopping Cart</h3>';
    
    echo '<table width="100%"  cellpadding="6" cellspacing="0">';
    echo '<tbody>';

    $total =0;
    $b = 0;
    foreach ($_SESSION["cart_products"] as $cart_itm)
    {
        echo "<tr>";
        $product_code = $cart_itm["product_code"];
        $product_name = $cart_itm["book_name"];
       
        $product_price = $cart_itm["buy_back"];
        
             
        echo '<td>'.$product_name.'</td>';
        echo '<td>'.$product_price.'</td>';

        echo '</tr>';
        $subtotal = ($product_price);
        $total = ($total + $subtotal);
    }
    
    echo '</tbody>';
    echo '</table><br><br>';
    echo "TOTAL : ".$total."<br>";
echo '<form method="post" action="view_cart.php">';
    echo '<button type="submit" name="type" value="submit">SUBMIT</button><br><br>';

    if(isset($_POST["type"]) && $_POST["type"]=='submit'){
  echo "YOUR REQUEST HAS BEEN SUBMITTED";
$sql = "UPDATE user_books SET books_buy='$product_name' WHERE book_email='abc@abc.com';"; 
    mysqli_query($mysqli, $sql);



    
    $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
    echo '</form>';
    echo '</div>';



$return_url = (isset($_POST["return_url"]))?urldecode($_POST["return_url"]):''; //return url
header('Location:'.$return_url);







     
   // header('Location: ../home.php?request=complete');
    //exit();
}
}
?>