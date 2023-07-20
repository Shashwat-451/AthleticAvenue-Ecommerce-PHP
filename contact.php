<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact || BOLT Sports Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <style>
      body{
        background-color: #f5f5f5;
      }
      .container{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        width:1200px;
      }
      .items{
        width: 50%;
        height: auto;
        padding: 20px;
        text-align: center;
        
      
      }
      h1{
        
            font-family:Georgia;
            font-size: 3rem;
            color:black;
            
      }
      h5{
        font-family:Georgia;
            font-size: 1.2rem;
            color:black;
      }
      #item1{
        display:flex;
        justify-content: center;
        align-items: center;
        flex-basis:30%;
        align-self:center;
      }
      .btn{
        margin-top:30px;
        background-color: black;
        color:white;
        padding: 20px;
        border-radius: 20px;
        text-decoration: none;
        font-family:Georgia;
        font-size: 1rem;
      }
      .btn:hover{
        background-color: black;
        color:white;
      }
      .top-bar-section ul li > a {
    display: block;
    width: 100%;
    color: white;
    padding: 10px 0 20px 0;
  margin-top:15px;
    padding-left: 15px;
    font-family: Georgia;
    font-size: 1.1rem;
    font-weight: normal;
    text-transform: none;
}
.top-bar {
    overflow: hidden;
    height: 65px;
    line-height: 45px;
    position: relative;
    background: #333333;
    margin-bottom: 0;
}
.logo{
  font-family:Georgia;
  font-size: 1.1rem;
  color:white;
  text-decoration: none;
}
      </style>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Athletics Avenue</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
         
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
        
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:30px;">
      <div class="small-12">

      

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; Athletics Avenue. All Rights Reserved.</p>
        </footer>

      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
