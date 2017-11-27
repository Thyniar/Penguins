<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Your Penguin</title>
        <link href="CSS/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Log.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="landing">

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
                    <li><a href="#"><i class="fa fa-user"></i> Sign Up </a></li>
                    <li><a href="#"><i class="fa fa-sign-in"></i> Sign In </a></li>
                    <li><a href="Contact.php"><i class="fa fa-address-book"></i> Contact</a>
                    <li><a href="#"><i class="fa fa-shopping-cart" id="caddie"></i></a></li>
                </ul>
            </nav>

        </header>



        <div class="container col-lg-12" id="CoInsc">
            <div class="row">
                <div class="col-lg-2 col-lg-offset-2">
                    <h1>Log in :</h1>
                    <br>
                    <form method="post" name="connexion">
                        <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                            <input class="form-control" type="text" name="login" placeholder="Login">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                            <input class="form-control" type="password" name="password" placeholder="Password">
                        </div>
                        <br>
                        <button type="submit" name="validerConnexion"class="btn btn-default pull-right">Connect</button>
                    </form>

                    <?php
                    try {
                        //Permet de récuperer les données de la base de donnée
                        $bddConnexion = new PDO('mysql:host=localhost;dbname=penguins;charset=utf8', 'root', '');
                    } catch (Exception $e) { // Si erreur
                        die('Erreur : ' . $e->getMessage());
                    }
                    if (isset($_POST['validerConnexion'])) {
                        $login = $_POST['login'];
                        $password = $_POST['password'];
                        //echo "<br>$login<br>$password";
                        // enlever les commentaires pour afficher le test de la page de connexion
                        $reponse = $bddConnexion->query("SELECT * FROM connexion WHERE login = '$login' AND password = '$password'");
                        $donnees = $reponse->fetch();
                        if ($login == $donnees['login'] && $password == $donnees['password']) {
                            session_start();
                            $_SESSION['login'] = $login;
                            $_SESSION['password'] = $password;
                            // on redirige notre visiteur vers une page de notre section membre
                            header('location: membres.php');
                        } else {
                            // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
                            echo '<body onLoad="alert(\'Membre non reconnu...\')">';
                        }
                        $reponse->closeCursor(); // Termine le traitement de la requÃªte */
                    }
                    ?>
                </div>

                <div class="col-lg-3 col-lg-offset-3">
                    <h1>Register :</h1>
                    <br>
                    <form method="post" name="inscription">
                        <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                            <input class="form-control" type="text" name="login" placeholder="Login">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                            <input class="form-control" type="text" name="nom" placeholder="Name">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                            <input class="form-control" type="text" name="prenom" placeholder="Surname">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                            <input class="form-control" type="password" name="password" placeholder="Password">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                            <input class="form-control" type="mail" name="mail" placeholder="Email">
                        </div>
                        <br>
                        <button type="submit" name="validerInscription"class="btn btn-default pull-right">Register</button>                       
                    </form>
                    
                    <?php

                    function
                    ErrorMessage($mot) {
                        echo "<br>le champs $mot n'est pas remplis !";
                    }

                    try {
                        //Permet de rÃ©cuperer les donnÃ©es de la base de donnÃ©e
                        $bddInscription = new PDO('mysql:host=localhost;dbname=penguins;charset=utf8', 'root', '');
                    } catch (Exception $e) { // Si erreur
                        die('Erreur : ' . $e->getMessage());
                    }
                    $cmpt = 5;

                    if (isset($_POST['validerInscription'])) {
                        if (empty($_POST['login'])) {
                            ErrorMessage('login');
                            $cmpt--;
                        }
                        if (empty($_POST['password'])) {
                            ErrorMessage('password');
                            $cmpt--;
                        }
                        if (empty($_POST['mail'])) {
                            ErrorMessage('mail');
                            $cmpt--;
                        }
                        if (empty($_POST['prenom'])) {
                            ErrorMessage('prenom');
                            $cmpt--;
                        }
                        if (empty($_POST['nom'])) {
                            ErrorMessage('nom');
                            $cmpt--;
                        }

                        if ($cmpt == 5) {
                            $login = $_POST['login'];
                            $password = $_POST['password'];
                            $nom = $_POST['nom'];
                            $prenom = $_POST['prenom'];
                            $mail = $_POST['mail'];
                            $req = $bddInscription->prepare('INSERT INTO connexion(login, password, nom, prenom, mail)'
                                    . ' VALUES (:login, :password, :nom, :prenom, :mail)');
                            $req->execute(array(
                                ':password' => $password,
                                ':nom' => $nom,
                                ':prenom' => $prenom,
                                ':mail' => $mail,
                                ':login' => $login
                            ));
                            echo "<br>membre enregister ! ";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <br><br>


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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
</html>
