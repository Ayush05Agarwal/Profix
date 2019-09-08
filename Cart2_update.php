<?php
session_start();
//$_SESSION['username']=$username; //start session
include_once("config.php"); //include config file

if(isset($_POST["sub"]) && $_POST["sub"]=='sell')
{
    foreach($_POST as $keys => $values){ //add all post vars to new_product array
        $new_product_sell[$keys] = filter_var($values, FILTER_SANITIZE_STRING);
    }
    //remove unecessary vars
    unset($new_product_sell['sub']);
    unset($new_product_sell['return_url']); 
    
    //we need to get product name and price from database.
    $statement = $mysqli->prepare("SELECT book_name, buy_back FROM books WHERE book_ID=? LIMIT 1");
    $statement->bind_param('s', $new_product_sell['product_code']);
    $statement->execute();
    $statement->bind_result($product_name_sell, $product_price_sell);
    
    while($statement->fetch()){
        
        //fetch product name, price from db and add to new_product array
        $new_product_sell["book_name"] = $product_name_sell; 
        $new_product_sell["buy_back"] = $product_price_sell;
        //$new_product["book_code"] = $product_price;
        
        if(isset($_SESSION["cart_products_sell"])){  //if session var already exist

           if(isset($_SESSION["cart_products_sell"][$new_product_sell['product_code']])) //check item exist in products array
            {
        /*                       unset($_SESSION["cart_products"][$new_product['product_code']]); //unset old array item*/
            }           
        }
        $_SESSION["cart_products_sell"][$new_product_sell['product_code']] = $new_product_sell; //update or create product session with new item 
         echo '<script>alert("Item already exists")</script>';
        echo '<script>windows.location="index.php"</script>';
     
    } 

}






if(isset($_POST["remove_codes"]))
{
    //update item quantity in product session
    
    //remove an item from product session
    if(isset($_POST["remove_codes"]) && is_array($_POST["remove_codes"])){
        foreach($_POST["remove_codes"] as $key){
            unset($_SESSION["cart_products_sell"][$key]);

        }   
    }
}

$return_url = (isset($_POST["return_url"]))?urldecode($_POST["return_url"]):''; //return url
header('Location:'.$return_url);