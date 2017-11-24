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
        // On démarre la session
        session_start();

// On détruit les variables de notre session
        session_unset();

// On détruit notre session
        session_destroy();

// On redirige le visiteur vers la page d'accueil
        header('location: index.php');
        ?>
    </body>
</html>
