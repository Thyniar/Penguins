<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

    </head>
    <body>
        <?php

        // fonctions

        function afficheMembre()
            {
            echo '<html>';
            echo '<head>';
            echo '<title>Page de notre section membre</title>';
            echo '</head>';

            echo '<body>';
            echo 'Votre login est ' . $_SESSION['login'] . ' et votre mot de passe est ' . $_SESSION['password'] . '.';
            echo '<br />';
            }

        function testaffiche()
            {
            try
                {
                //Permet de rÃ©cuperer les donnÃ©es de la base de donnÃ©e
                $bdd = new PDO('mysql:host=localhost;dbname=penguins;charset=utf8', 'root', '');
                } catch (Exception $e) // Si erreur
                {
                die('Erreur : ' . $e->getMessage());
                }
            $test = $_SESSION['login'];

            $reponse = $bdd->query("SELECT * FROM addresses NATURAL JOIN membre");
           
            
            /*while ($donnees = $reponse->fetch())
                { //debut de la boucle while
                echo $donnees['full_name'].', ';
                echo $donnees['nom_voie'].'<br>';
                } // fin de la boucle while*/
            }
        ?>
        <?php
// On récupère nos variables de session
        if (isset($_SESSION['login']) && isset($_SESSION['password']))
            {

            // On teste pour voir si nos variables ont bien été enregistrées

            afficheMembre();
            testaffiche();

            // On affiche un lien pour fermer notre session
            echo '<a href="../logout.php">logout</a>';
            echo "<br>";
            echo '<a href="panier.php">panier</a>';
            } else
            {
            echo 'Les variables ne sont pas déclarées.';
            }
        ?>
    </body>
</html>
