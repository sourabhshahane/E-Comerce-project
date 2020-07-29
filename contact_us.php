<html>
<head>
    <title>ShopBOX | We're always happy to help</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/ico" href="icons/logo_ico.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	 <style> 
		body{
			background-image: url('images/contact-mobile.svg');
			background-repeat:no-repeat; 
			background-attachment: fixed; 
			background-size: cover;
		}

		h1{
			font: size 120%;
			font-family:Times New Roman;
			color: whitesmoke;
			text-align:left;
			position:static;
			width:600px;
			height:auto;
			margin-left:220px;
		}

		#call{ 
			margin-left:50px; 
			height:50px; 
			width:50px;
			position:static;
			vertical-align: middle;
			}
		
		#head_img{
			margin-left:400px;
			height:150px; 
			width:150px;
			position:static;
		}
				
		#mailings{
			margin-left:150px; 
			font-size:20px;
			font-family: Times New Roman;
			color:black;
			position:static;
			width:1500px;
			height:auto;
		}

		#link{
			color: rgb(37, 196, 23);
		}
		
		footer{
			clear: both;
			position: relative;
		}

		.header{
			font-size: 30px;
            color: #EC1E78
		}

		.foot{
			text-align: center;
            color: whitesmoke;
		}
		
	 </style>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="home.php"><span><img src="icons/logo_ico.png" width="30px" height="auto"> &nbsp ShopBox.com</span></a>
      </div>
      
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories<span class="caret"></span></a>
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
        <li><a href="cart.php">My Cart</a></li>
        <li><a href="about_us.php">About Us</a></li>
        <li class="active"><a href="contact_us.php">Contact Us</a></li>
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
	<img id = "head_img" src = "icons/support-tickets.png"/>
	<h1>Dear customer, Welcome to Help desk</h1>
	<hr width="50%" style="margin-left: 100px; background-color: #66B54A; border: solid #EAC146; border-width: 1px; size: 5px;">
	<p class = "header" style="margin-left:100px;">Mail us regarding your queries on</p>
	<div id = "mailings">
		<ul>
			<li><p>Technical support: &nbsp; <a id = "link" href = "mailto:lagadprerana2000@gmail.com">lagadprerana2000@gmail.com</a></p></li>
			<li><p>Order related Support: &nbsp; <a id = "link" href = "mailto:sanikazinjad0241@gmail.com">sanikazinjad0241@gmail.com</a></p></li>
			<li><p>General queries: &nbsp; <a id = "link" target="_blank" href = "mailto:sourabhshahane865@gmail.com">sourabhshahane865@gmail</a></p></li>
		</ul>	
	</div>
	<b class="header" style="margin-left:300px;">or</b>
	<br>
	<br>
	<span style="margin-left:50px; font-size: 30px;"  class="header"> <img id = "call" src = "icons/call-sign.png"/> Call us on: <b style="color: rgb(37, 196, 23);">1800-000-7776 </b></span>
	<br>
	<footer>
		<hr style = "border: none #7FC8D3; width: 100%; height: 2px; background-color: #7FC8D3;">	
		<p class="foot">Designed and developed by <b>Sanika Zinjad</b> and team, <b>All rights reserved <br> <br> ShopBOX.com 2020</b></p>
	</footer>
</body>
</html>
	 