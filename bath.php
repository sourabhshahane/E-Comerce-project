<?php	
//connection to database
session_start();
$connect = mysqli_connect('localhost','root','','shopbox');
?>

<!DOCTYPE html>  
<html>  	
    <head>  
        <title>Bath & Shower | ShopBox</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="icon" type="image/ico" href="icons/logo_ico.png">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style type="text/css">
            h3 {
                font-family: Arial;
                font-weight: bold;
                align-content: center;
            }

            .img-responsive {
                height: 300px;
                width: 300px;
                float: left;
                
                padding: 10px;
            }

            .name {
                font-family: Times new roman;
                font-size: 30px;
                color: lightseagreen;
            }

            hr {
                border-top: 2px solid red;
            }

            .box{
                border:1px solid #333;
                background-color:#f1f1f1;
                border-radius:5px;
                padding:16px;
            }
            </style>  
    </head>  

    <body> 
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="home_u.php"><span><img src="icons/logo_ico.png" width="30px" height="auto"> &nbsp ShopBox.com</span></a>
      </div>
      
      <ul class="nav navbar-nav">
        #<li class="active"><a href="home_u.php">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="all.php">All Purpose Cleaners</a></li>
            <li><a href="baby.php">Baby Bath & Hygiene</a></li>
            <li><a href="bath.php">Bath & Shower</a></li>
            <li><a href="chips.php">Chips,Namkeen & Snacks</a></li>
            <li><a href="choco.php">Chocolates & Biscuits</a></li>
            <li><a href="choco_sweet">Chocolates & Sweets</a></li>
            <li><a href="cook.php">Cooking & Baking Needs</a></li>
            <li><a href="cook_sause.php">Cooking, Sauces & Vinegar</a></li>
            <li><a href="creams.php">Creams, Lotions & Skin Care</a></li>
            <li><a href="dals.php">Dals & Pulses</a></li>
            <li><a href="deos.php">Deos, Perfumes & Talc</a></li>
            <li><a href="deter.php">Detergents & Dishwash</a></li>
            <li><a href="drinks.php">Drinks & Beverages</a></li>
            <li><a href="frag.php">Fragrances & Deos</a></li>
            <li><a href="ghee.php">Ghee & Oils</a></li>
            <li><a href="grocery.php">Grocery & Gourmet Foods</a></li>
            <li><a href="hair.php">Hair Care</a></li>
            <li><a href="jams.php">Jams & Honey</a></li>
            <li><a href="makeup.php">Makeup</a></li>
            <li><a href="noodels.php">Noodles & Pasta</a></li>
            <li><a href="oral.php">Oral Care</a></li>
            <li><a href="pasta.php">Pasta, Soup & Noodles</a></li>
            <li><a href="pickles.php">Pickles & Chutney</a></li>
            <li><a href="ready.php">Ready To Cook</a></li>
            <li><a href="sauces.php">Sauces, Spreads & Dips</a></li>
            <li><a href="shoe.php">Shoe Polish</a></li>
            <li><a href="skin.php">Skin Care</a></li>
            <li><a href="snacks.php">Snacks, Dry Fruits, Nuts</a></li>
            <li><a href="soaps.php">Soaps & Body Wash</a></li>
            <li><a href="station.php">Stationery</a></li>
            <li><a href="tea.php">Tea</a></li>
          </ul>
        </li>
        <li><a href="cart.php">My Cart</a></li>
        <li><a href="about us.html">About Us</a></li>
        <li><a href="contact us.html">Contact Us</a></li>
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
        <br>  
        <div class="container" style="width:auto;">  
        <h3>All products with category: Bath & Shower</h3>
        <br>
        <?php
        $qury = "SELECT * FROM `e_commerce_products` WHERE Category = 'Bath & Shower' ORDER BY Product_id ASC";
        $result = mysqli_query($connect,$qury);
        if(mysqli_num_rows($result) >0)
        {
            while($row = mysqli_fetch_array($result))
            {
        ?>  
                <div class="box" style="height:350px">
                    <a href="product.php?Product_id=<?php echo $row['Product_id'];?>">
                    <img src="<?php echo $row['Image Urls'];?>" class="img-responsive"/><br>
                    <h3 class="name"><?php echo $row['Product Title'];?></h3></a>
                    <h4><b>Brand name : </b><?php echo $row['Brand'];?></h4>
                    <h4><b>Pack Size Or Quantity : </b><?php echo $row['Pack Size Or Quantity'];?></h4>
                    <?php 
                    if($row['Offers'] === 'NA')
                    {?>
                        <h4><b>Mrp : ₹</b><?php echo $row['Mrp'];?></h4>
                        <h4><b>Price : ₹</b><?php echo $row['Price'];?></h4>
                    <?php
                    }
                    else{?>
                        <del><h4 style="color:tomato"><b>Mrp : ₹</b><?php echo $row['Mrp'];?></h4></del>
                        <ins><h4 style="color:green"><b>Price : ₹</b><?php echo $row['Price'];?> &nbsp; You can save by *<?php $r = $row['Offers']; echo nl2br(str_replace("|", "\n *", $r))?></h4></ins>
                        
                    <?php
                    }
                    ?>
                </div> 
                <br>
        <?php 
            } 
        } 
        ?>
            
      </body>  
 </html>
