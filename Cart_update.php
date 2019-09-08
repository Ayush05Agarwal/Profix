<?php
session_start();
//$_SESSION['username']=$username; //start session
include_once("config.php"); //include config file

//add product to session or create new one
if(isset($_POST["type"]) && $_POST["type"]=='add')
{
    foreach($_POST as $key => $value){ //add all post vars to new_product array
        $new_product[$key] = filter_var($value, FILTER_SANITIZE_STRING);
    }
    //remove unecessary vars
    unset($new_product['type']);
    unset($new_product['return_url']); 
    
    //we need to get product name and price from database.
    $statement = $mysqli->prepare("SELECT book_name, buy_back FROM books WHERE book_ID=? LIMIT 1");
    $statement->bind_param('s', $new_product['product_code']);
    $statement->execute();
    $statement->bind_result($product_name, $product_price);
    
    while($statement->fetch()){
        
        //fetch product name, price from db and add to new_product array
        $new_product["book_name"] = $product_name; 
        $new_product["buy_back"] = $product_price;
        //$new_product["book_code"] = $product_price;
        
        if(isset($_SESSION["cart_products"])){  //if session var already exist

           if(isset($_SESSION["cart_products"][$new_product['product_code']])) //check item exist in products array
            {
        /*                       unset($_SESSION["cart_products"][$new_product['product_code']]); //unset old array item*/
            }           
        }
        $_SESSION["cart_products"][$new_product['product_code']] = $new_product; //update or create product session with new item 
         echo '<script>alert("Item already exists")</script>';
        echo '<script>windows.location="index.php"</script>';
     
    } 
// unset($_SESSION["cart_products_sell"][$new_product['product_code']]);
}























if(isset($_POST["remove_code"]))
{
    //update item quantity in product session
    
    //remove an item from product session
    if(isset($_POST["remove_code"]) && is_array($_POST["remove_code"])){
        foreach($_POST["remove_code"] as $key){
            unset($_SESSION["cart_products"][$key]);
            
        }   
    }
}








//update or remove items 
//back to return url
$return_url = (isset($_POST["return_url"]))?urldecode($_POST["return_url"]):''; //return url
header('Location:'.$return_url);