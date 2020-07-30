<?php
  // Include config file
  require_once "config.php";
  session_start();
  $connect = mysqli_connect('localhost','root','','shopbox');

  if(isset($_GET["action"]))
    {
      $orders = explode(',', $_GET['order_id']);
      if($_GET["action"] == "purchase")
      {
        $i = 0;
        while ($i < count($orders)) 
        {
          $iqury = "INSERT INTO orders (u_id, p_id, order_id, quantity) SELECT u_id, p_id, order_id, quantity FROM cart WHERE order_id=?";
          $iqury = str_replace("?", $orders[$i], $iqury);
          mysqli_query($connect, $iqury);
          $qury = "DELETE FROM cart WHERE order_id=?";
          $qury = str_replace("?", $orders[$i], $qury);
          mysqli_query($connect, $qury);
          $i = $i + 1;
        }
      }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product | ShopBOX</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/ico" href="icons/logo_ico.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
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
        <li><a href="my_orders.php">My Orders</a></li>
        <li><a href="cart.php">My Cart</a></li>
        <li><a href="about_us.php">About Us</a></li>
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
  <h1>Thank you for ordering with SHOPBOX...</h1>
</body>
</html>