<?php
  // Include config file
  require_once "config.php";
  session_start();
  $connect = mysqli_connect('localhost','root','','shopbox');

  // Change this total variable to change the number of photos(of products) you want for the slideshow,
  // This page will display products in the automatic slideshow with the given total limit of products in 
  // the descending order of discount values offered for the product.
  $total = 4;   // Currently four products are displayed in the automatic slideshow
  $total_grid = 20;
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
    <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 600px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: green;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: red;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
  animation-fill-mode: forwards; 
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

ul.products li {
    width: 310px;
    height: 425px;
    display: inline-block;
    vertical-align: top;
    *display: inline;
    *zoom: 1;
    border: 1px solid black;
    padding: 8px 8px 8px 8px;
    margin:5px 5px 5px 5px;
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
  <div class="slideshow-container">
  <?php
  
  $qury = "SELECT * FROM `e_commerce_products` WHERE `e_commerce_products`.`Offers` != 'NA' ORDER BY `e_commerce_products`.`Offers` DESC";
  
  $result = mysqli_query($connect, $qury);
        if(mysqli_num_rows($result) > 0)
          { 
            $i = 0;  
            while($row = mysqli_fetch_array($result))
            {
              $str = $row['Offers'];
              $str = str_replace('%','',$str);
              if(is_numeric($str) && $i < $total)
              { ?>
                <div class="mySlides fade">
                  <div class="numbertext"><b>Special Offers: <?php echo $i+1;?> out of <?php echo $total;?> | <?php echo $row['Category']?> | Hurry, Limited period Offers.</b></div>
                  <a target="_blank" href='product.php?Product_id=<?php echo $row['Product_id']?>'><img src=<?php echo $row['Image Urls'];?> style="width:100%;"></a>
                  <div class="text"><b>Discount : <?php echo $row['Offers'];?></b></div>
                </div>
                <?php
                $i = $i + 1;
              }
            }
          }
  ?>
</div>
<br>

<div style="text-align:center">
<?php 
  $i = 0;
  while($i < $total)
  {?>
      <span class="dot"></span> 
  <?php
      $i = $i + 1;
  }
?>
</div>
<br>
<br>
<h1>
Items You may be interested in...
</h1>
<br>
<br>
<ul class="products">
<?php
  
  $qury = "SELECT * FROM `e_commerce_products` ORDER BY rand()";
  
  $result = mysqli_query($connect, $qury);
        if(mysqli_num_rows($result) > 0)
          { 
            $i = 0;  
            while($row = mysqli_fetch_array($result))
            {
              if($i < $total_grid)
              { ?>
                  <li>
                      <a target="_blank" href="product.php?Product_id=<?php echo $row['Product_id'];?>">
                      <img src=<?php echo $row['Image Urls'];?> style="width:200px; height:200px;">
                      <h4><?php echo $row['Product Title'];?></h4></a>
                      <p style="color: blue;"> ₹ <?php echo $row['Price'];?></p>
                  </li>
                <?php
                $i = $i + 1;
              }
            }
          }
  ?>
</ul>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>


</body>
</html>
