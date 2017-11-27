<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    
    </head>
    <body>
        <?php
        // On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
        session_start();

// On récupère nos variables de session
        if (isset($_SESSION['login']) && isset($_SESSION['password']))
            {

            // On teste pour voir si nos variables ont bien été enregistrées
            echo '<html>';
            echo '<head>';
            echo '<title>Page de notre section membre</title>';
            echo '</head>';

            echo '<body>';
            echo 'Votre login est ' . $_SESSION['login'] . ' et votre mot de passe est ' . $_SESSION['password'] . '.';
            echo '<br />';

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
