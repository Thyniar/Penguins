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
        <form method="post" name="motdepasseoublier">
            <input class="form-control" type="text" name="mail" placeholder="Mail">
            <input class="form-control" type="texte" name="password" placeholder="Password">
            <input class="form-control" type="texte" name="passwordConfirm" placeholder="Password">
            <button type="submit" name="valider"class="btn btn-default pull-right">Valider</button>
        </form>
        <?php
        try {
            //Permet de récuperer les données de la base de donnée
            $bdd = new PDO('mysql:host=localhost;dbname=penguins;charset=utf8', 'root', '');
        } catch (Exception $e) { // Si erreur
            die('Erreur : ' . $e->getMessage());
        }

        if (isset($_POST['valider'])) {
            if ($_POST['password'] === $_POST['passwordConfirm']) {
                $mail = $_POST['mail'];
                $mdp = $_POST['password'];

                $sql = ("UPDATE password SET password = '$mdp' WHERE mail = '$mail' ");

                if ($bdd->query($sql) === TRUE) {
                    echo "Record updated successfully";
                } else {
                    
                }

                $bdd->close();

                echo "fait";
            }
        }
        ?>
    </body>
</html>
