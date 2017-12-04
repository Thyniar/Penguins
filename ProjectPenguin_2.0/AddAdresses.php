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


        <div class="container col-lg-4 col-lg-offset-4"id="AddAddress">
            <h1><b>Add a new address</b></h1>
            <br>
            <form method="post" name="addresse">
                <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                    <input class="form-control" type="text" name="full_name" placeholder="Full name">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-building fa-fw"></i></span>
                    <input class="form-control" type="text" name="num_voie" placeholder="Number">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                    <input class="form-control" type="text" name="nom_voie" placeholder="Street name">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-map-signs fa-fw"></i></span>
                    <input class="form-control" type="text" name="cp" placeholder="Zip Code">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-map fa-fw"></i></span>
                    <input class="form-control" type="text" name="nom_ville" placeholder="City">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-globe fa-fw"></i></span>
                    <input class="form-control" type="text" name="pays" placeholder="State / Province / Region">
                </div>
                <br>
                <button type="submit" name="validerAddress"class="btn btn-default pull-right">Add Adress</button>       
            </form>
        </div>

        <?php
        
        function ErrorMessage($mot) {
            
            echo "<br>le champs $mot n'est pas remplis !";
        }

        try {
            //Permet de rÃ©cuperer les donnÃ©es de la base de donnÃ©e
            $bdd = new PDO('mysql:host=localhost;dbname=penguins;charset=utf8', 'root', '');
        } catch (Exception $e) { // Si erreur
            die('Erreur : ' . $e->getMessage());
        }
        $cmpt = 6;

        if (isset($_POST['validerAddress'])) {
            
            if (empty($_POST['full_name'])) {
            ErrorMessage('full_name');
            $cmpt--;
            }
            
            if (empty($_POST['num_voie'])) {
            ErrorMessage('num_voie');
            $cmpt--;
            }
            
            if (empty($_POST['nom_voie'])) {
            ErrorMessage('nom_voie');
            $cmpt--;
            }
            
            if (empty($_POST['cp'])) {
            ErrorMessage('cp');
            $cmpt--;
            }
            
            if (empty($_POST['nom_ville'])) {
            ErrorMessage('nom_ville');
            $cmpt--;
            }

            if (empty($_POST['pays'])) {
            ErrorMessage('pays');
            $cmpt--;
            }


            if ($cmpt == 6) {
            $fullName = $_POST['full_name'];
            $numVoie = $_POST['num_voie'];
            $nomVoie = $_POST['nom_voie'];
            $cp = $_POST['cp'];
            $nomVille = $_POST['nom_ville'];
            $pays = $_POST['pays'];
            $idMembre = $_SESSION['id'];

            $req = $bdd->prepare('INSERT INTO addresses(full_name,num_voie,nom_voie,cp,nom_ville,pays, id_membre)'
            .' VALUES(:full_name, :num_voie, :nom_voie, :cp , :nom_ville, :pays, :id_membre)');
            $req->execute(array(
            ':full_name' => $fullName,
            ':num_voie' => $numVoie,
            ':nom_voie' => $nomVoie,
            ':cp' => $cp,
            ':nom_ville' => $nomVille,
            ':pays' => $pays,
            ':id_membre' => $idMembre
            ));
        
            header('location: Addresses.php');
            }
        }
        ?>

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
