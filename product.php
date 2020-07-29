<?php   
//connection to database
session_start();
$connect = mysqli_connect('localhost','root','','shopbox');

if(isset($_POST["add_to_cart"]))    
{
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 'TRUE')
    {
        $sql = "INSERT INTO cart (u_id, p_id, quantity) VALUES (?,?,?)";

        if($stmt = mysqli_prepare($connect, $sql))
        {
            $item_quantity = $_POST['quantity'];
            $p_id = $_POST['hidden_id'];
            
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $_SESSION['user_id'], $p_id, $item_quantity);

            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: cart.php");
                echo "Successfully added to cart.";
            } else{
                echo "Error: Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    else 
    {
        echo "You are not logged in. Please log in to continue shopping.";        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopBox | Product</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/ico" href="icons/logo_ico.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <style>
      h3 {
      font-family: Arial;
      font-weight: bold;
      }
      .img-responsive{
        height: 600px;
        width: 600px;
        position:relative;
        float: left;
        padding: 10px;
      }
      .name {
        font-family: Times new roman;
        font-size: 30px;
      }
      hr {
        border-top: 2px solid red;
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
        <li class="active"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories<span class="caret"></span></a>
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
        if(isset($_GET["Product_id"]))
        {
          $Pid = $_GET["Product_id"];
          $qury = "SELECT * FROM e_commerce_products WHERE Product_id = ?";
          $qury = str_replace("?", $Pid,$qury);
          $result = mysqli_query($connect,$qury);

          if(mysqli_num_rows($result)>0)	
          {
              while($row = mysqli_fetch_array($result))
              {   
            ?>  <br>
                <div class="container" style="width:auto; margin-bottom:20px;padding-bottom: 10px">  
                <h2 style = "align= center; font-size:40px;"><?php echo $row['Product Title'] ?></h3><br />  
                    <div>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;">  

                            <img src="<?php echo $row['Image Urls'];?>" class="img-responsive"/><br />  

                                <h4 class=""><b>Product Description : </b><br><?php 
                                $r = $row['Product Description'];
                                $id = $row['Product_id'];

                                echo nl2br(str_replace("|", " :\n", $r));
                                ?></h4>
                                <h4><b>Brand name : </b><?php echo $row['Brand'];?></h4> 
                                <h4><b>Pack Size Or Quantity : </b><?php echo $row['Pack Size Or Quantity'];?></h4>  
                                <?php if($row['Offers'] === 'NA')
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
                                <?php
                                if ($row['Stock Availibility'] == "TRUE") {?>
                                  <h4 style="color: blue"><b> Stock Availibility :</b> In stock
                                <?php }
                                else {?>
                                  <h4 style="color: tomato"><b> Stock Availibility :</b> Out of stock
                                <?php }
                                ?></h4> 
                                
                            <input type="text" name="quantity" class="form-control" value="1" >
                                <input type="hidden" name="hidden_id" value="<?php echo $row['Product_id'] ?>" >
                                <input type="hidden" name="hidden_stock" value="<?php echo $row['Stock Availibility'] ?>" >
                          <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" >  
                          </div>  
                        </form>  
                    </div>  
                <?php
              } 
          }
          else {
            echo "Wrong Request, Page doesn't exist";
          }
        }
        	?>
      </body>  
</html>
