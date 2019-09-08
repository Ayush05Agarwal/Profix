<?php
session_start();
include_once("config.php");
?>


<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="css/main.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    
    <title></title>
    
</head>


<body>
    <div class="login" id="loginForm">
        
            <div class="row">
             	<div id="login_div" class="main-div col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4">
             	<img id="loginimg" src="images/logo1.png">
             		<span id="loginhd">PROFIX</span>
                    <h2>Sign in</h2><br><br><br>
                    <div class="focus">
                       <input class="redinputline" type="email" placeholder="Email..." id="email_field" class="col-md-10" name="username"/><br><br><br>
                       <input class="redinputline" type="password" placeholder="Password..." id="password_field" class="col-md-10" /><br><br>
                    </div>
                    <a href="#" class="btn-link" onclick="toPasswordReset()"> Forgot Password?</a>
                    <br><br><br>
                    <button id="loginbtn" onclick="login()">Login</button>
                    <span style="color: blue;cursor: pointer;" class="b1" onclick="tosignup()">Create New Account</span>
                </div>
            </div>
        
    </div>
    <?php
//$_SESSION['username']=$username;
?>
<div class="gap" id="gap"></div> 



<div class="home" id="homePage">



<!-- background -->	
<div id="yt" class="logocover1">  
	<a href="#top"><div id="tt" class="logo1"></div></a>

		<!-- sidenav -->	
		<span id="hamburgericon" onclick="openNav()">&#9776;</span>
			<div id="mySidenav" class="sidenav">
		 		<div class="smalldp"></div><span id="smalldp">Mehul Agrawal<br>0801xxxxxx45</span>
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<br><br>
				<a href="#">CART</a>
				<a href="#">TRANSACTIONS</a>
				<a href="#">ACCOUNT</a>
				<a href="#">OFFERS</a>
				<a href="#">LOGOUT</a>
			</div>
		<!-- ---------- -->

		<!-- cart -->
		<i id="carticon" class="glyphicon glyphicon-shopping-cart" onclick="opencart()"></i>
			<div id="mycart" class="cartpage">
			<span href="javascript:void(0)" class="backbtn" onclick="closecart()">&larr;</span>
				<CENTER id="carthd">CART</CENTER>
				<hr id="hr"> 
				
			</div>
		<!-- ---------- -->

	</div>
</div>



<!-- INTRODUCTION PAGE -->
<div id="top" class="section-intro">
<div class="fix"> 
	
<h1>Save. Sale. Earn.</h1>

<h2>WHY TO BOTHER ABOUT <br>
THE BOOKS WHEN YOU CAN GET THEM<br>
IN YOUR OWN COLLEGE</h2>
</div>

</div>
<!--------------------------->



<!-- BUYING FROM MARKET-->
<div class="section-market">
	<a class="visible-sm visible-xs" id="bookmark" href="#bookmark"><Center>Start</Center></a>
	<br><br>
	<div class="fix">
		<h3>buying books from market leads to many problems:</h3>
	</div>
		<br>
	
		<div class="marketdiv">
			<img class="marketdivimg" src="images/images78.jpg">
			<b>going to many book store</b>
		</div>

		<div class="marketdiv">
			<img class="marketdivimg" src="images/dfcgh.png">
			<b>searching appropriate book</b>
		</div>

		<div class="marketdiv marketdiv3">
			<img class="marketdivimg" src="images/35145153.jpg">
			<b>prices never matches our budget</b>
		</div>

		<br><br><br><br><br><br><br>
	<div>
		<center><h3>Why to waste time and money....<br> Lets go through profix.</h3></center>
	</div>

</div>
<!-------------------------------->




<!-- BENEFITS OF PROFIX -->
<div class="section-benefitsprofix">
		<br><br>
	<div class="fix">
		<h3>Benefits of Profix</h3>
	</div>
	<br><br>
		<div class="benefitsprofixdiv">
			<p>One screen and you which ever book you want.</p>
		</div>

		<div class="benefitsprofixdiv benefitsprofixdiv2">
			<p>Get variety of books of same subject i.e. references</p>
		</div>

		<div class="benefitsprofixdiv benefitsprofixdiv3">
			<p>Purchase at low price and sell at better than market price.</p>
		</div>

</div>
<!------------------------------->



<!-- TRENDING BOOKS -->
<div class="section-trendingbooks">
	<h2 id="trbkhd"><b><i>Trending Books</i></b></h2>

<div class="trbkdiv">
	<img class="trbkmg" src="images/download2.jpg"><p>rent:30<br>buy:378965</p>
</div>

<div class="trbkdiv">
	<img class="trbkmg" src="images/download2.jpg"><p>rent:30<br>buy:378965</p>
</div>

<div class="trbkdiv">
	<img class="trbkmg" src="images/download2.jpg"><p>rent:30<br>buy:378965</p>
</div>
 
<div class="trbkdiv">
	<img class="trbkmg" src="images/download2.jpg"><p>rent:30<br>buy:378965</p>
</div>

<div class="trbkdiv">
	<img class="trbkmg" src="images/download2.jpg"><p>rent:30<br>buy:378965</p>
</div>

<div class="trbkmore trbkdiv">
	<center><h1>more--></h1></center>
</div>

</div>
<!------------------------------->

<br>

<!-- LIST OF BOOKS -->
<div class="section-booklist">
	<br><br><br>
	<div class="fix">
		<u><h1>SEMESTER 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></u>
	</div>
	<br>
		<button id="s1b1" type="button" class="sub" data-toggle="collapse">M1</button>
		<button id="s1b2" type="button" class="sub" data-toggle="collapse">T.E.</button>
		<button id="s1b3" type="button" class="sub" data-toggle="collapse">CHEM</button>
		<button id="s1b4" type="button" class="sub" data-toggle="collapse">C.P.</button>
		<button id="s1b5" type="button" class="sub" data-toggle="collapse">F.M.E</button>
		<button id="s1b6" type="button" class="sub" data-toggle="collapse">SUB6</button>









			<div id="s1b1l" class="collapse booklist">
				

				<?php

$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$results = $mysqli->query("SELECT book_id,book_code, book_name, buy_back, rental, market, penalty  FROM books WHERE book_code='MA'");
//$code=mysqli_query("SELECT book_code FROM books")
if($results){ 

	
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
	//$code=$obj['book_code'];
	//if($code[0]=='M' && $code[1]=='A'){
  //echo $row['2'];
$products_item .= <<<EOT
    


    <div class="outer">
				<div class="inside"></div>
				<div class="inside2">


    <form method="post" action="Cart_update.php">
    <div class="product-content"><h3>{$obj->book_name}</h3>
    <div class="product-thumb"><img src=""></div>
    <div class="product-desc">{$obj->buy_back}</div>
    <div class="product-info">
    Price {$currency}{$obj->rental} 
    
    <input type="hidden" name="product_code" value="{$obj->book_id}" />
    <input type="hidden" name="type" value="add" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="type" value="add" class="insidebt btn-danger">ADD TO BUY CART</button></div>
      </form>

      <form method="post" action="Cart2_update.php">
     <input type="hidden" name="product_code" value="{$obj->book_id}" /> 
    <input type="hidden" name="sub" value="sell" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="sub" value="sell" class="insidebt btn-danger">ADD TO SELL CART</button></div>
    </div></div>
    </form>
</div></div>

    
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>

				
									<center>End</center>
			</div> 












			<div id="s1b2l" class="collapse booklist">

               <?php

$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$results = $mysqli->query("SELECT book_ID,book_name, buy_back, rental, market, penalty  FROM books WHERE book_code='TE'");

if($results){ 
	
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
    <div class="outer">
				<div class="inside"></div>
				<div class="inside2">
    <form method="post" action="Cart_update.php">
    <div class="product-content"><h3>{$obj->book_name}</h3>
    <div class="product-thumb"><img src=""></div>
    <div class="product-desc">{$obj->buy_back}</div>
    <div class="product-info">
    Price {$currency}{$obj->rental} 
    
    <input type="hidden" name="product_code" value="{$obj->book_ID}" />
    <input type="hidden" name="type" value="add" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="type" value="add" class="insidebt btn-danger">ADD TO BUY CART</button></div>
      </form>

      <form method="post" action="Cart2_update.php">
     <input type="hidden" name="product_code" value="{$obj->book_ID}" /> 
    <input type="hidden" name="sub" value="sell" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="sub" value="sell" class="insidebt btn-danger">ADD TO SELL CART</button></div>
    </div></div>
    </form>
     </div></div>

    
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>
				
									<center>End</center>
			</div> 






			<div id="s1b3l" class="collapse booklist">
               <?php

$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$results = $mysqli->query("SELECT book_ID,book_name, buy_back, rental, market, penalty  FROM books WHERE book_code='CHEM'");

if($results){ 
	
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
     <div class="outer">
				<div class="inside"></div>
				<div class="inside2">
    <form method="post" action="Cart_update.php">
    <div class="product-content"><h3>{$obj->book_name}</h3>
    <div class="product-thumb"><img src=""></div>
    <div class="product-desc">{$obj->buy_back}</div>
    <div class="product-info">
    Price {$currency}{$obj->rental} 
    
    <input type="hidden" name="product_code" value="{$obj->book_ID}" />
    <input type="hidden" name="type" value="add" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="type" value="add" class="insidebt btn-danger">ADD TO BUY CART</button></div>
      </form>

      <form method="post" action="Cart2_update.php">
     <input type="hidden" name="product_code" value="{$obj->book_ID}" /> 
    <input type="hidden" name="sub" value="sell" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="sub" value="sell" class="insidebt btn-danger">ADD TO SELL CART</button></div>
    </div></div>
    </form>
    </div></div>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>
				
									<center>End</center>
			</div> 









			<div id="s1b4l" class="collapse booklist">

               <?php

$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$results = $mysqli->query("SELECT book_ID,book_name, buy_back, rental, market, penalty  FROM books WHERE book_code='CP'");

if($results){ 
	
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
     <div class="outer">
				<div class="inside"></div>
				<div class="inside2">
    <form method="post" action="Cart_update.php">
    <div class="product-content"><h3>{$obj->book_name}</h3>
    <div class="product-thumb"><img src=""></div>
    <div class="product-desc">{$obj->buy_back}</div>
    <div class="product-info">
    Price {$currency}{$obj->rental} 
    
    <input type="hidden" name="product_code" value="{$obj->book_ID}" />
    <input type="hidden" name="type" value="add" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="type" value="add" class="insidebt btn-danger">ADD TO BUY CART</button></div>
      </form>

      <form method="post" action="Cart2_update.php">
     <input type="hidden" name="product_code" value="{$obj->book_ID}" /> 
    <input type="hidden" name="sub" value="sell" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="sub" value="sell" class="insidebt btn-danger">ADD TO SELL CART</button></div>
    </div></div>
    </form>
    </div></div>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>
									<center>End</center>
			</div> 








			<div id="s1b5l" class="collapse booklist">

               <?php

$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$results = $mysqli->query("SELECT book_ID,book_name, buy_back, rental, market, penalty  FROM books WHERE book_code='FME'");

if($results){ 
	
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
     <div class="outer">
				<div class="inside"></div>
				<div class="inside2">
    <form method="post" action="Cart_update.php">
    <div class="product-content"><h3>{$obj->book_name}</h3>
    <div class="product-thumb"><img src=""></div>
    <div class="product-desc">{$obj->buy_back}</div>
    <div class="product-info">
    Price {$currency}{$obj->rental} 
    
    <input type="hidden" name="product_code" value="{$obj->book_ID}" />
    <input type="hidden" name="type" value="add" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="type" value="add" class="insidebt btn-danger">ADD TO BUY CART</button></div>
      </form>

      <form method="post" action="Cart2_update.php">
     <input type="hidden" name="product_code" value="{$obj->book_ID}" /> 
    <input type="hidden" name="sub" value="sell" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="sub" value="sell" class="insidebt btn-danger">ADD TO SELL CART</button></div>
    </div></div>
    </form>
    </div></div>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>
									<center>End</center>
			</div> 






			<div id="s1b6l" class="collapse booklist">

               <?php

$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$results = $mysqli->query("SELECT book_ID,book_name, buy_back, rental, market, penalty  FROM books WHERE book_code='TE'");

if($results){ 
	
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
     <div class="outer">
				<div class="inside"></div>
				<div class="inside2">
    <form method="post" action="Cart_update.php">
    <div class="product-content"><h3>{$obj->book_name}</h3>
    <div class="product-thumb"><img src=""></div>
    <div class="product-desc">{$obj->buy_back}</div>
    <div class="product-info">
    Price {$currency}{$obj->rental} 
    
    <input type="hidden" name="product_code" value="{$obj->book_ID}" />
    <input type="hidden" name="type" value="add" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="type" value="add" class="insidebt btn-danger">ADD TO BUY CART</button></div>
      </form>

      <form method="post" action="Cart2_update.php">
     <input type="hidden" name="product_code" value="{$obj->book_ID}" /> 
    <input type="hidden" name="sub" value="sell" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="sub" value="sell" class="insidebt btn-danger">ADD TO SELL CART</button></div>
    </div></div>
    </form>
    </div></div>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>
									<center>End</center>
			</div>

				<div class="booksdisplayhere visible-sm visible-xs">
					<span style="position: relative; z-index: 0;background-color: white;">"Click on a subject to display it's book's list"</span>
				</div>

	<br><br>
	
	<div class="fix">
		<u><h1>SEMESTER 2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></u>
	</div>

	<br>
		<button id="s2b1" type="button" class="sub" data-toggle="collapse">S1</button>
		<button id="s2b2" type="button" class="sub" data-toggle="collapse">S2</button>
		<button id="s2b3" type="button" class="sub" data-toggle="collapse">S3</button>
		<button id="s2b4" type="button" class="sub" data-toggle="collapse">S4</button>
		<button id="s2b5" type="button" class="sub" data-toggle="collapse">S5</button>
		<button id="s2b6" type="button" class="sub" data-toggle="collapse">S6</button>

		

			<div id="s2b1l" class="collapse booklist">
				

				<?php

$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$results = $mysqli->query("SELECT book_ID,book_name, buy_back, rental, market, penalty  FROM books WHERE book_code='MA'");

if($results){ 
	
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
     <div class="outer">
				<div class="inside"></div>
				<div class="inside2">
    <form method="post" action="Cart_update.php">
    <div class="product-content"><h3>{$obj->book_name}</h3>
    <div class="product-thumb"><img src=""></div>
    <div class="product-desc">{$obj->buy_back}</div>
    <div class="product-info">
    Price {$currency}{$obj->rental} 
    
    <input type="hidden" name="product_code" value="{$obj->book_ID}" />
    <input type="hidden" name="type" value="add" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="type" value="add" class="insidebt btn-danger">ADD TO BUY CART</button></div>
      </form>

      <form method="post" action="Cart2_update.php">
     <input type="hidden" name="product_code" value="{$obj->book_ID}" /> 
    <input type="hidden" name="sub" value="sell" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="sub" value="sell" class="insidebt btn-danger">ADD TO SELL CART</button></div>
    </div></div>
    </form>
    </div></div>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>

				
									<center>End</center>
			</div> 












			<div id="s2b2l" class="collapse booklist">

               <?php

$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$results = $mysqli->query("SELECT book_ID,book_name, buy_back, rental, market, penalty  FROM books WHERE book_code='TE'");

if($results){ 
	
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
     <div class="outer">
				<div class="inside"></div>
				<div class="inside2">

    <form method="post" action="Cart_update.php">
    <div class="product-content"><h3>{$obj->book_name}</h3>
    <div class="product-thumb"><img src=""></div>
    <div class="product-desc">{$obj->buy_back}</div>
    <div class="product-info">
    Price {$currency}{$obj->rental} 
    
    <input type="hidden" name="product_code" value="{$obj->book_ID}" />
    <input type="hidden" name="type" value="add" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="type" value="add" class="insidebt btn-danger">ADD TO BUY CART</button></div>
      </form>

      <form method="post" action="Cart2_update.php">
     <input type="hidden" name="product_code" value="{$obj->book_ID}" /> 
    <input type="hidden" name="sub" value="sell" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="sub" value="sell" class="insidebt btn-danger">ADD TO SELL CART</button></div>
    </div></div>
    </form>

    	</div>	

				</div>

EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>
				
									<center>End</center>
			</div> 






			<div id="s2b3l" class="collapse booklist">
               <?php

$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$results = $mysqli->query("SELECT book_ID,book_name, buy_back, rental, market, penalty  FROM books WHERE book_code='TE'");

if($results){ 
	
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
     <div class="outer">
				<div class="inside"></div>
				<div class="inside2">
    <form method="post" action="Cart_update.php">
    <div class="product-content"><h3>{$obj->book_name}</h3>
    <div class="product-thumb"><img src=""></div>
    <div class="product-desc">{$obj->buy_back}</div>
    <div class="product-info">
    Price {$currency}{$obj->rental} 
    
    <input type="hidden" name="product_code" value="{$obj->book_ID}" />
    <input type="hidden" name="type" value="add" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="type" value="add" class="insidebt btn-danger">ADD TO BUY CART</button></div>
      </form>

      <form method="post" action="Cart2_update.php">
     <input type="hidden" name="product_code" value="{$obj->book_ID}" /> 
    <input type="hidden" name="sub" value="sell" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="sub" value="sell" class="insidebt btn-danger">ADD TO SELL CART</button></div>
    </div></div>
    </form>
    </div></div>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>
				
									<center>End</center>
			</div> 









			<div id="s2b4l" class="collapse booklist">

               <?php

$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$results = $mysqli->query("SELECT book_ID,book_name, buy_back, rental, market, penalty  FROM books WHERE book_code='CHEM'");

if($results){ 
	
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
     <div class="outer">
				<div class="inside"></div>
				<div class="inside2">
    <form method="post" action="Cart_update.php">
    <div class="product-content"><h3>{$obj->book_name}</h3>
    <div class="product-thumb"><img src=""></div>
    <div class="product-desc">{$obj->buy_back}</div>
    <div class="product-info">
    Price {$currency}{$obj->rental} 
    
    <input type="hidden" name="product_code" value="{$obj->book_ID}" />
    <input type="hidden" name="type" value="add" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="type" value="add" class="insidebt btn-danger">ADD TO BUY CART</button></div>
      </form>

      <form method="post" action="Cart2_update.php">
     <input type="hidden" name="product_code" value="{$obj->book_ID}" /> 
    <input type="hidden" name="sub" value="sell" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="sub" value="sell" class="insidebt btn-danger">ADD TO SELL CART</button></div>
    </div></div>
    </form>
    </div></div>
    
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>
									<center>End</center>
			</div> 








			<div id="s2b5l" class="collapse booklist">

               <?php

$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$results = $mysqli->query("SELECT book_ID,book_name, buy_back, rental, market, penalty  FROM books WHERE book_code='FME'");

if($results){ 
	
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
     <div class="outer">
				<div class="inside"></div>
				<div class="inside2">

    <form method="post" action="Cart_update.php">
    <div class="product-content"><h3>{$obj->book_name}</h3>
    <div class="product-thumb"><img src=""></div>
    <div class="product-desc">{$obj->buy_back}</div>
    <div class="product-info">
    Price {$currency}{$obj->rental} 
    
    <input type="hidden" name="product_code" value="{$obj->book_ID}" />
    <input type="hidden" name="type" value="add" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="type" value="add" class="insidebt btn-danger">ADD TO BUY CART</button></div>
      </form>

      <form method="post" action="Cart2_update.php">
     <input type="hidden" name="product_code" value="{$obj->book_ID}" /> 
    <input type="hidden" name="sub" value="sell" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="sub" value="sell" class="insidebt btn-danger">ADD TO SELL CART</button></div>
    </div></div>
    </form>
    </div></div>
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>
									<center>End</center>
			</div> 






			<div id="s2b6l" class="collapse booklist">

               <?php

$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$results = $mysqli->query("SELECT book_ID,book_name, buy_back, rental, market, penalty  FROM books WHERE book_code='TE'");

if($results){ 
	
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
     <div class="outer">
				<div class="inside"></div>
				<div class="inside2">

    <form method="post" action="Cart_update.php">
    <div class="product-content"><h3>{$obj->book_name}</h3>
    <div class="product-thumb"><img src=""></div>
    <div class="product-desc">{$obj->buy_back}</div>
    <div class="product-info">
    Price {$currency}{$obj->rental} 
    
    <input type="hidden" name="product_code" value="{$obj->book_ID}" />
    <input type="hidden" name="type" value="add" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="type" value="add" class="insidebt btn-danger">ADD TO BUY CART</button></div>
      </form>

      <form method="post" action="Cart2_update.php">
     <input type="hidden" name="product_code" value="{$obj->book_ID}" /> 
    <input type="hidden" name="sub" value="sell" />
    <input type="hidden" name="return_url" value="{$current_url}" />
    <div align="center"><button type="submit" name="sub" value="sell" class="insidebt btn-danger">ADD TO SELL CART</button></div>
    </div></div>
    </form>
    </div></div>
    
EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>
									<center>End</center>
			</div>


				<div class="booksdisplayhere visible-sm visible-xs">
							<span style="position: relative; z-index: 0;background-color: white;">"Click on a subject to display it's book's list"</span>
				</div>


</div>
    











<div class="shopping-cart">


</div>

<?php
echo "MY CART";
if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0 )
{
    echo '<div class="cart-view-table-front" id="view-cart">';
    echo '<h3>My Buying Cart</h3>';
    echo '<form method="post" action="Cart_update.php">';
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
        echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /> Remove</td>';
        echo '</tr>';
        $subtotal = ($product_price);
        $total = ($total + $subtotal);
    }
    echo '<td colspan="4">';
    echo '<button type="submit">Update</button><a href="view_cart.php" class="button">Checkout</a>';
    echo '</td>';
    echo '</tbody>';
    echo '</table>';
    
    $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
    echo '</form>';
    echo '</div>';



}
?>



<?php

//echo "MY CART";
if(isset($_SESSION["cart_products_sell"]) && count($_SESSION["cart_products_sell"])>0 )
{
    echo '<div class="cart-view-table-front" id="view-cart">';
    echo '<h3>Your Selling Cart</h3>';
    echo '<form method="post" action="Cart2_update.php">';
    echo '<table width="100%"  cellpadding="6" cellspacing="0">';
    echo '<tbody>';

    $total_sell =0;
    $b = 0;
    foreach ($_SESSION["cart_products_sell"] as $cart_itm_sell)
    {
        echo "<tr>";
        $product_code_sell = $cart_itm_sell["product_code"];
        $product_name_sell = $cart_itm_sell["book_name"];
       
        $product_price_sell = $cart_itm_sell["buy_back"];
        
             
        echo '<td>'.$product_name_sell.'</td>';
        echo '<td>'.$product_price_sell.'</td>';
        echo '<td><input type="checkbox" name="remove_codes[]" value="'.$product_code_sell.'" /> Remove</td>';
        echo '</tr>';
        $subtotal_sell = ($product_price_sell);
        $total_sell = ($total_sell + $subtotal_sell);
    }
    echo '<td colspan="4">';
    echo '<button type="submit">Update</button><a href="view2_cart.php" class="button">Checkout</a>';
    echo '</td>';
    echo '</tbody>';
    echo '</table>';
    
    $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
    echo '</form>';
    echo '</div>';

}
?>














<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "your apikey",
    authDomain: "your authdomain",
    databaseURL: "your database url",
    projectId: "your projectid",
    storageBucket: "your storage bucket",
    messagingSenderId: "your message sender id"
  };
  firebase.initializeApp(config);
</script>

<script type="text/javascript" src="login.js"></script>

</body>
</html>






