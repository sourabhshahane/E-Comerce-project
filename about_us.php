<?php
  // Include config file
  require_once "config.php";
  session_start();

?>

<html>
<head>
    <title>About us | ShopBOX</title>
	<link rel="icon" type="image/ico" href="icons/logo_ico.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		.static{
			position:static;
			width:700px;
			height:auto;
		}

		.static2{
			position:static;
			width:1200px;
			height:auto;
			
		}

		.static3{
			position:static;
			height:auto;
			width:1500px;
		}
			
		h1{
			margin-left:350px;
			color: #E81C73;
			font-size:250%;
			font-family: ;
		}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          

		#image{
			height:150px;
			width:150px;
			-webkit-box-shadow: 5px 5px 5px #111;
			
		}

		#image2{
			height:200px;
			width:500px;
			margin-left:100px;
			-webkit-box-shadow: 5px 5px 5px #111;
			box-shadow: 5px 5px 5px black; 
			position: relative;
			float:right;
			margin-right: 100px;	
			
		}

		#para2{
			font-size:150%;
			color:black;
			margin-left:70px;
			margin-right:70px;
		}

		footer{
			clear: both;
			position: relative;
		}
		
		.foot{
			text-align: center;
			color: white;
			text-shadow: -1px 1px 0 #000,
				  1px 1px 0 #000,
				 1px -1px 0 #000;
		}

		.box
		{
			width:auto;
			height:auto;
			background:rgba(255, 255, 255, 0.75);
			border:2px solid rgb(54, 54, 54);

			/*transform: translate(170%,10%);*/
		}
	 </style>
</head>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="home.php"><span><img src="icons/logo_ico.png" width="30px" height="auto"> &nbsp; ShopBox.com</span></a>
      </div>
      
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories<span class="caret"></span></a>
          <ul class="dropdown-menu">
		  <li><a href="categories/all.php">All Purpose Cleaners</a></li>
            <li><a href="categories/baby.php">Baby Bath & Hygiene</a></li>
            <li><a href="categories/bath.php">Bath & Shower</a></li>
            <li><a href="categories/chips.php">Chips,Namkeen & Snacks</a></li>
            <li><a href="categories/choco.php">Chocolates & Biscuits</a></li>
            <li><a href="categories/choco_sweet">Chocolates & Sweets</a></li>
            <li><a href="categories/cook.php">Cooking & Baking Needs</a></li>
            <li><a href="categories/cook_sause.php">Cooking, Sauces & Vinegar</a></li>
            <li><a href="categories/creams.php">Creams, Lotions & Skin Care</a></li>
            <li><a href="categories/dals.php">Dals & Pulses</a></li>
            <li><a href="categories/deos.php">Deos, Perfumes & Talc</a></li>
            <li><a href="categories/deter.php">Detergents & Dishwash</a></li>
            <li><a href="categories/drinks.php">Drinks & Beverages</a></li>
            <li><a href="categories/frag.php">Fragrances & Deos</a></li>
            <li><a href="categories/ghee.php">Ghee & Oils</a></li>
            <li><a href="categories/grocery.php">Grocery & Gourmet Foods</a></li>
            <li><a href="categories/hair.php">Hair Care</a></li>
            <li><a href="categories/jams.php">Jams & Honey</a></li>
            <li><a href="categories/makeup.php">Makeup</a></li>
            <li><a href="categories/noodels.php">Noodles & Pasta</a></li>
            <li><a href="categories/oral.php">Oral Care</a></li>
            <li><a href="categories/pasta.php">Pasta, Soup & Noodles</a></li>
            <li><a href="categories/pickles.php">Pickles & Chutney</a></li>
            <li><a href="categories/ready.php">Ready To Cook</a></li>
            <li><a href="categories/sauces.php">Sauces, Spreads & Dips</a></li>
            <li><a href="categories/shoe.php">Shoe Polish</a></li>
            <li><a href="categories/skin.php">Skin Care</a></li>
            <li><a href="categories/snacks.php">Snacks, Dry Fruits, Nuts</a></li>
            <li><a href="categories/soaps.php">Soaps & Body Wash</a></li>
            <li><a href="categories/station.php">Stationery</a></li>
            <li><a href="categories/tea.php">Tea</a></li>
          </ul>
        </li>
        <li><a href="my_orders.php">My Orders</a></li>
        <li><a href="cart.php">My Cart</a></li>
        <li class = "active"><a href="about_us.php">About Us</a></li>
        <li><a href="contact_us.php">Contact Us</a></li>
      </ul>

	  <ul class="nav navbar-nav navbar-right">
        <?php 
           if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        ?>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        <?php
        }
        else{?>
        
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php
        }
        ?>
      </ul>
    </div>
  </nav>
<body style = "background-image: url('images/back_abt.jpg'); background-repeat:no-repeat;background-attachment: fixed; background-size: cover;">

	 <img id = "image" src = "images/SHOP_BOX_back_r.png"/>
	 <img id = "image2" src = "https://i.pinimg.com/originals/e0/74/09/e0740900279f738e2a3cf811d4e83e05.jpg"/>
	 <div class="box">
		<h1><em>About ShopBOX</em></h1>
		 <p id = "para2">&nbsp; &nbsp; &nbsp; &nbsp; <strong>ShopBox</strong> is an ShopBox is an E-Commerce(Electronic Commerce) website for buying services through internet. Electronic commerce draws an technologies such as mobile commerce, electronic fund transfer, internet marketing, online transaction processing,etc. Our website is very helpful in these highly growing E-commerce marketing era. It includes all purpose cleaners, Namkeen & snacks, skin care, perfumes and talc, detergents and dishwash, drinks and beverages, grocery, hair care, makeup, spreads and dips, shoe polish, stationary, tea,etc. Amazing offers are available on every product so you will definitely save your money. You can purchase required product by using online payment method or you can also place order by using cash on delivery. We provide fastest home delivery within less or no price.<p>
		<br>
	 </div>
    
	 <footer>
		<hr style = "border: solid #1D9FDC; width: 100%; height: 1px;border-width: 1px; color : #CEDD2A;">	
		<p class="foot">Designed and developed by <b>Sanika Zinjad</b> and team, <b>All rights reserved <br> <br> ShopBOX.com 2020</b></p>
	</footer>
</body>
</html>
	 