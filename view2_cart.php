<?php
session_start();
//$_SESSION['username']=$username;
include_once "config.php";
if(isset($_SESSION["cart_products_sell"]) && count($_SESSION["cart_products_sell"])>0 )
{
    echo '<div class="cart-view-table-front" id="view-cart">';
    echo '<h3>Your Selling Cart</h3>';
   // echo '<form method="post" action="Cart_update.php">';
    echo '<table width="100%"  cellpadding="6" cellspacing="0">';
    echo '<tbody>';

    $total_sell =0;
    $b = 0;
    foreach ($_SESSION["cart_products_sell"] as $cart_itm)
    {
        echo "<tr>";
        $product_code_sell = $cart_itm["product_code"];
        $product_name_sell = $cart_itm["book_name"];
       
        $product_price_sell = $cart_itm["buy_back"];
        
             
        echo '<td>'.$product_name_sell.'</td>';
        echo '<td>'.$product_price_sell.'</td>';
       // echo '<td><input type="checkbox" name="remove_codes[]" value="'.$product_code_sell.'" /> Remove</td>';
        echo '</tr>';
        $subtotal_sell = ($product_price_sell);
        $total_sell = ($total_sell + $subtotal_sell);
    }
    //echo '<td colspan="4">';
    //echo '<button type="submit">Update</button>';
    //echo '</td>';
    echo '</tbody>';
    echo '</table><br><br>';
    echo "TOTAL :".$total_sell."<br><br>";
   

    echo '<form method="post" action="view2_cart.php">';
    echo '<button type="submit" name="type" value="submit"> SUBMIT </button><br><br>';


        if(isset($_POST["type"]) && $_POST["type"]=='submit'){
  echo "YOUR REQUEST HAS BEEN SUBMITTED";
$sql = "UPDATE user_books SET  books_sell='$product_name_sell' WHERE book_email='abc@abc.com';"; 
    mysqli_query($mysqli, $sql);

    $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';

    echo '</form>';
    echo '</div>';



$return_url = (isset($_POST["return_url"]))?urldecode($_POST["return_url"]):''; //return url
header('Location:'.$return_url);

}
}
?>
