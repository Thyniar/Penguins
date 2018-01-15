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
        <a>SooooooooooOOOooooo you've forgotten your password ? <br> Shame on you bastard ! <br></a>

        <form method="post" name="motdepasseoublier">
            <input class="form-control" type="text" name="mail" placeholder="Mail">
            <button type="submit" name="valider"class="btn btn-default pull-right">Valider</button>
        </form>

        <?php
        try {
            //Permet de récuperer les données de la base de donnée
            $bdd = new PDO('mysql:host=localhost;dbname=penguins;charset=utf8', 'root', '');
        } catch (Exception $e) { // Si erreur
            die('Erreur : ' . $e->getMessage());
        }

       /* if (isset($_POST['valider'])) {

            $mail = $_POST['mail'];
            $reponse = $bdd->query("SELECT mail FROM membre WHERE mail = '$mail'");
            $donnees = $reponse->fetch();

            ini_set('display_errors', 1);

            error_reporting(E_ALL);

            $from = "admin@penguins.fr";

            $to = "$mail";

            $subject = "Récuperation du mot de passe";

            $message = "PHP mail marche";

            $headers = "From :" . $from;

            mail($to, $subject, $message, $headers);

            echo "L'email a été envoyé.";
        }*/
        ?>
        
        <a>SoooooOOOooo it seems that we also are some kind of idiot and we can't send a bloody friking mail to someone so ...
            <br> here is a link to the page you're suppose to go</a> <a href="takeyourpassword.php">here</a>


    </body>
</html>
