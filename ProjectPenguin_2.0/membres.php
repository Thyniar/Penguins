<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Your Penguins</title>
        <link href="CSS/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/membres.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php session_start(); ?>

        <!-- Header -->
        <header id="header">
            <h1><a href="index.php"><img class="img-responsive" src="Images/logoMenu2.png" alt=""/></a></h1>

            <nav id="navbis">
                <ul>
                    <li><a href="#"><i class="fa fa-snowflake-o"></i> Penguins</a></li>
                    <li><a href="#"><i class="fa fa-linux"></i> Cuddly Toys</a></li>
                </ul>   
            </nav>

            <nav>
                <ul>
                    <?php
                    if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
                        echo '<li><a href="membres.php"><i class="fa fa-user" style="font-size:30px;"></i></a></li>';
                        echo '<li><a href="Logout.php"><i class="fa fa-sign-out"></i> Log out </a></li>';
                    } else {
                        echo '<li><a href="Log.php"><i class="fa fa-user-plus"></i> Sign Up </a></li>';
                        echo '<li><a href="Log.php"><i class="fa fa-sign-in"></i> Sign In </a></li>';
                    }
                    ?>
                    <li><a href="Contact.php"><i class="fa fa-address-book"></i> Contact</a>
                    <li><a href="#"><i class="fa fa-shopping-cart" id="caddie"></i></a></li>
                </ul>
            </nav>

        </header>

        <div class="container col-lg-12" id="fiche">
            <div class="row">
                <h1><i class="fa fa-user-circle-o fa-5x"></i></h1>
                
                <div class="col-lg-8 col-lg-offset-2" id="bordertop"></div>
                <br>
                <div class="col-lg-4 col-lg-offset-2" id="info">
                    <p><i class="fa fa-user"></i> Login : <?php echo $_SESSION['login'];?></p>
                    <p><i class="fa fa-user"></i> Name :  <?php echo $_SESSION['nom'];?></p>
                    <p><i class="fa fa-user"></i> Surname : <?php echo $_SESSION['prenom'];?></p>
                    <p><i class="fa fa-envelope"></i> Mail : <?php echo $_SESSION['mail'];?></p>
                </div>
                
                <div class="col-lg-4" id="infoplus">
                    
                    <a href="#" class="btn btn-default pull-right"><h2><i class="fa fa-cubes"></i> Your Orders</h2>
                        <p>Track, return, or buys things again</p>
                    </a>
                    <br><br><br><br><br><br>
                    <a href="Addresses.php" class="btn btn-default pull-right"><h2><i class="fa fa-map-marker"></i> Your Addresses</h2>
                        <p>Edit addresses for orders and gifts</p>
                    </a>
                </div>
            </div>
        </div>



        <footer>
            <div class="container col-lg-12">
                <div class="row">                   
                    <ul>
                        <li><a href="https://www.facebook.com/Your-penguin-370472053409761"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a href="https://twitter.com/GetPenguin6"><i class="fa fa-twitter"></i></a>
                        <li><a href="#"><i class="fa fa-instagram"></i></a>
                    </ul>
                    <p><i class="fa fa-copyright"></i> copyright. All rights reserved.</p>
                    <p><i class="fa fa-camera"></i> Unsplash</p>
                </div>
            </div>
        </footer>
    </body>
</html>
