<?php
//$_SESSION['username']=$username;

session_start();
include_once("config.php");


if(isset($_POST["type"]) && $_POST["type"]=='submit'){
echo "hello";	
$sql = "UPDATE user_books SET books_buy='$product_name' , books_sell='abc' WHERE book_email='abc@abc.com';"; 
	mysqli_query($mysqli, $sql);
	 
   // header('Location: ../home.php?request=complete');
	//exit();
}