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
    <title>ShopMedz</title>
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
        <a class="navbar-brand" href="home.html"><span><img src="icons/logo_ico.png" width="30px" height="auto"> &nbsp ShopBox.com</span></a>
      </div>
      
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.html">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Offers</a></li>
        <li><a href="about us.html">About Us</a></li>
        <li><a href="contact us.html">Contact Us</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav>

  <h1>Welcome to our site.</h1>
  
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