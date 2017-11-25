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
                Nom : <input  name="nom"/> </br>
                </br>
                Prenom : <input  name="prenom"/> </br>
                </br>
                Mail : <input  name="mail"/> </br>
                </br>
                <input type="submit" name="valider" value="Valider">
                </form>


                <?php

                function

                ErrorMessage($mot)
                    {

                    echo "<br>le champs $mot n'est pas remplis !";
                    }

                try
                    {
                    //Permet de rÃ©cuperer les donnÃ©es de la base de donnÃ©e
                    $bdd = new PDO('mysql:host=localhost;dbname=penguins;charset=utf8', 'root', '');
                    } catch (Exception $e) // Si erreur
                    {
                    die('Erreur : ' . $e->getMessage());
                    }
                $cmpt = 5;
                
                if (isset($_POST['valider']))
                    {

                    if (empty($_POST['login']))
                        {
                        ErrorMessage('login');
                        $cmpt--;
                        }
                    if (empty($_POST['password']))
                        {
                        ErrorMessage('password');
                        $cmpt--;
                        }
                    if (empty($_POST['mail']))
                        {
                        ErrorMessage('mail');
                        $cmpt--;
                        }
                    if (empty($_POST['prenom']))
                        {
                        ErrorMessage('prenom');
                        $cmpt--;
                        
                        }
                    if (empty($_POST['nom']))
                        {
                        ErrorMessage('nom');
                        $cmpt--;
                        
                        }
                        
                    if($cmpt==5)
                        {

                        $login = $_POST['login'];
                        $password = $_POST['password'];
                        $nom = $_POST['nom'];
                        $prenom = $_POST['prenom'];
                        $mail = $_POST['mail'];

                       $req = $bdd->prepare('INSERT INTO membre(login, password, nom, prenom, mail)'
                                . ' VALUES (:login, :password, :nom, :prenom, :mail)');

                        $req->execute(array(
                            ':password' => $password,
                            ':nom' => $nom,
                            ':prenom' => $prenom,
                            ':mail' => $mail,
                            ':login' => $login
                        ));
                         echo '<body onLoad="alert(\'Membre ajouté !\')">';
                        
                         
                        }
                    }
                ?>

                </body>
                </html>
