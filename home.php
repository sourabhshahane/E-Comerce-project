<?php
  // Include config file
  require_once "config.php";
  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | ShopBOX</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/ico" href="icons/logo_ico.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>     
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="home.php"><span><img src="icons/logo_ico.png" width="30px" height="auto"> &nbsp ShopBox.com</span></a>
      </div>
      
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
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

  <?php 
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
    {
  ?>
  <h1>Hi, <b><?php echo htmlspecialchars($_SESSION['name']); ?></b>. Welcome to ShopBOX.</h1>
  
  <?php }
  else {
  ?>
  <h1>Welcome to ShopBOX, Please <a href="register.php">Signup</a> / <a href="login.php">Login</a> to use all the features...</h1>
  <?php } ?>

  <div class="w3-content w3-section" style="max-width:500px">
    <img class="mySlides w3-animate-right" src="images/logo_full.png" style="width:100%">
    <img class="mySlides w3-animate-right" src="images/1.JPG" style="width:100%">
    <img class="mySlides w3-animate-right" src="images/2.jpg" style="width:100%">
    <img class="mySlides w3-animate-right" src="images/3.jpg" style="width:100%">
  </div>
  
  <script>
  var myIndex = 0;
  carousel();
  
  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2500);    
  }
  </script>
  
</body>
</html>
