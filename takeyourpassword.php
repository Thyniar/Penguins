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
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "penguins";

        if (isset($_POST['valider']))
            {
            if ($_POST['password'] === $_POST['passwordConfirm'])
                {
                $mail = $_POST['mail'];
                $mdp = $_POST['password'];

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error)
                    {
                    die("Connection failed: " . $conn->connect_error);
                    }

                $sql = "UPDATE membre SET password = '$mdp' WHERE mail = '$mail' ";

                if ($conn->query($sql) === TRUE)
                    {
                    echo "Record updated successfully";
                    } else
                    {
                    echo "Error updating record: " . $conn->error;
                    }

                $conn->close();
                }
            }
        ?>
    </body>
</html>
