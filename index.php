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
                    //Permet de récuperer les données de la base de donnée
                    $bdd = new PDO('mysql:host=localhost;dbname=penguins;charset=utf8', 'root', '');
                    } catch (Exception $e) // Si erreur
                    {
                    die('Erreur : ' . $e->getMessage());
                    }
                    
                if (isset($_POST['valider']))
                    {
                    $login = $_POST['login'];
                    $password = $_POST['password'];
                    
                    echo "<br>$login<br>$password";
                    // enlever les commentaires pour afficher le test de la page de connexion
                    /* $reponse = $bdd->query("SELECT * FROM connexion WHERE login = '$login' AND password = '$password'");

                      while ($donnees = $reponse->fetch())
                      {
                      echo "<br>";
                      echo $donnees['nom'];
                      echo "<br>";
                      echo $donnees['prenom'];
                      echo "<br>";
                      echo $donnees['mail'];
                      echo "<br>";
                      echo 'Bienvenue '. $donnees['prenom'] . ' vous venez de vous connecter avec succes !';
                      }

                      $reponse->closeCursor(); // Termine le traitement de la requête */

                    // enlever les commentaires pour la page de d'inscription

                   /* $req = $bdd->prepare('INSERT INTO connexion(login, password) VALUES (:login, :password)');

                      $req->execute(array(
                      ':password' => $password,
                      ':login' => $login
                      ));
                    echo "<br>membre enregister ! ";
                    }*/

                /* SELECT COUNT FROM nomdelatable WHERE login = '' et mdp = ''; */
                ?>

                </body>
                </html>
