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
        <link href="CSS/addresse.css" rel="stylesheet" type="text/css"/>
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
        
        <div class="container col-lg-10 col-lg-offset-2" id="address">
            <div class="row">
                <h1>Your Adresses</h1>
                <br>
                <div class="col-lg-3">
                    <a href="AddAdresses.php" class="btn btn-default"><h2><i class="fa fa-plus fa-3x"></i><br>
                            Add Address</h2>
                    </a>
                </div>

                <?php
                try {
                    //Permet de rÃ©cuperer les donnÃ©es de la base de donnÃ©e
                    $bdd = new PDO('mysql:host=localhost;dbname=penguins;charset=utf8', 'root', '');
                } catch (Exception $e) { // Si erreur
                    die('Erreur : ' . $e->getMessage());
                }
                $id=$_SESSION['id'];
                $reponse = $bdd->query("SELECT * FROM addresses WHERE id_membre ='$id'");
                $donnees = $reponse->fetch();
                
                if($donnees['id_add'] != NULL){
                echo '<div class="col-lg-2 well">';
                echo "<p><b>".$donnees['full_name']."</b></p>";
                echo "<p>".$donnees['num_voie'].' '.$donnees['nom_voie']."</p>";
                echo "<p>".$donnees['cp'].' '.$donnees['nom_ville']."</p>";
                echo "<p>".$donnees['pays']."</p>";
                ?>
                <br>
                <div id="lienmodif"><a href="#">Edit</a>|<a href="#">Delete</a></div>
                </div>
            <?php
                }
            ?>
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
