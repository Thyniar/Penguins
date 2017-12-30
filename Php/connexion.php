<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!--
    Lien utile :
                - https://trello.com/b/5kkgAgXn/projet
                - https://github.com/Thyniar/Penguins
-->

<html>
    <head>
        <title>Get your penguins</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <a href="inscription.php">Inscripiton</a>
        <a href="connexion.php">Connexion</a>

        <form name="inscription" method="post"</br>
            <center>
                ID: <input type="text" name="login"/> </br>
                </br>
                Password : <input type="password" name="password"/> </br>
                </br>
                <input type="submit" name="valider" value="Valider">
                </form>


                <?php
                try
                    {
                    //Permet de rÃ©cuperer les donnÃ©es de la base de donnÃ©e
                    $bdd = new PDO('mysql:host=localhost;dbname=penguins;charset=utf8', 'root', '');
                    } catch (Exception $e) // Si erreur
                    {
                    die('Erreur : ' . $e->getMessage());
                    }

                if (isset($_POST['valider']))
                    {
                    $login = $_POST['login'];
                    $password = $_POST['password'];

                    //echo "<br>$login<br>$password";
                    // enlever les commentaires pour afficher le test de la page de connexion
                    $reponse = $bdd->query("SELECT * FROM membre WHERE login = '$login' AND password = '$password'");
                    $donnees = $reponse->fetch();
                    if ($login == $donnees['login'] && $password == $donnees['password'])
                        {

                        session_start();

                        $_SESSION['login'] = $login;
                        $_SESSION['password'] = $password;

                        /* Initialisation du panier */
                        $_SESSION['panier'] = array();
                        
                        // on redirige notre visiteur vers une page de notre section membre
                        header('location: membres.php');
                        } else
                        {
                        
                        }
                    $reponse->closeCursor(); // Termine le traitement de la requÃªte */
                    }
                ?>

                </body>
                </html>
