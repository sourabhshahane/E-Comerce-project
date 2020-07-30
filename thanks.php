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
          echo "Inserted into order";
          $qury = "DELETE FROM cart WHERE order_id=?";
          $qury = str_replace("?", $orders[$i], $qury);
          mysqli_query($connect, $qury);
          $i = $i + 1;
        }
      }
    }
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <h1>Thank you for ordering with SHOPBOX...</h1>
</body>
</html>