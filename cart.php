<?php
  // Include config file
  require_once "config.php";
  session_start();
  $connect = mysqli_connect('localhost','root','','shopbox');

  if(isset($_GET["action"]))
    {
        if($_GET["action"] == "delete")
        {
            $qury = "DELETE FROM cart WHERE order_id=?";
            $qury = str_replace("?", $_GET['order_id'], $qury);
            mysqli_query($connect, $qury);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart | ShopBOX</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/ico" href="icons/cart_logo_cir.png">
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
        <li class="active"><a href="cart.php">My Cart</a></li>
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

  <div>
    <?php 
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
    {
        $uid = $_SESSION['user_id'];
        $qury = "SELECT * FROM e_commerce_products INNER JOIN cart ON e_commerce_products.Product_id=cart.p_id AND cart.u_id=?";
        $qury = str_replace("?", $uid, $qury);
        $result = mysqli_query($connect, $qury);
        if(mysqli_num_rows($result) > 0) 
        {
                ?>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                        <tr> 
                            <th>Product image</th> 
                            <th width="40%">Item Name</th>  
                            <th width="10%">Quantity</th>  
                            <th width="20%">Price</th>  
                            <th width="15%">Total</th>  
                            <th width="5%">Action</th>  
                        </tr>  
        <?php
            $total = 0;  
            $orders = array();
            while($row = mysqli_fetch_array($result))
            {
                array_push($orders, $row['order_id']);
        ?> 
                        <tr>
                            <td><img src="<?php echo $row['Image Urls'];?>" style="width: 100px;"></td>
                            <td><?php echo $row['Product Title'];?></td>  
                            <td><?php echo $row['quantity']; ?></td>  
                            <td>₹ <?php echo $row['Price'];?></td>
                            <td>₹ <?php echo number_format($row["quantity"] * $row["Price"],2);?></td>  
                            <td><a href="cart.php?action=delete&order_id=<?php echo $row['order_id'];?>"><span class="btn btn-danger">Remove</span></a></td>
                        </tr>
                        <?php $total = $total + ($row["quantity"] * $row['Price']);   
            }
            ?>
                        <tr>
                            <td></td>
                            <td></td>  
                            <td></td>  
                            <td><h2>Grand Total</h2></td>
                            <td><h2>₹ <?php echo number_format($total);?></h2></td>  
                            <td><a href="thanks.php?action=purchase&order_id=<?php 
                            $i = 0;
                            while($i < count($orders))
                            {
                                echo $orders[$i];
                                if($i + 1 != count($orders))
                                {
                                    echo ",";
                                }
                                $i = $i + 1;
                            }
                            ?>"><span class="btn btn-success">Buy now</span></a></td>
                        </tr>
                    </table>
                </div>
            </div>  
    <?php
        }
        else 
        {?>
            <h1><?php echo "Your cart is empty.";?></h1>
        <?php
        }    
    }
    else 
    {?>
        <h1><?php echo "You are not logged in, Please login first.";?></h1>
    <?php
    }    
    ?>

    </div>
</body>
</html>
