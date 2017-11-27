<?php
include('fonction_panier.php');
/* Démarrage ou prolongation de la session */
session_start();
?>
<?php
// dédier au test de démarage
/* Ici, on sait que le panier existe, donc on ajoute l'article dedans. */
/* array_push($_SESSION['panier']['id_article'],$select['id']); 
  array_push($_SESSION['panier']['qte'],$select['qte']);
  array_push($_SESSION['panier']['taille'],$select['taille']);
  array_push($_SESSION['panier']['prix'],$select['prix']); */
?>


<html>
    <head>
        <title>Get your penguins</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a href="fonction_panier.php"></a>
</head>
<body>

    <?php
    if (!isset($_SESSION['panier']))
        {
        /* Initialisation du panier */
        $_SESSION['panier'] = array();
        /* Subdivision du panier */
        $_SESSION['panier']['qte'] = array();
        $_SESSION['panier']['taille'] = array();
        $_SESSION['panier']['prix'] = array();
        }
    $test1 = array();
    $test1['id'] = "phlevis501";
    $test1['qte'] = 2;
    $test1['taille'] = "56";
    $test1['prix'] = 84.95;

    $test2['id'] = "vm654321";
    $test2['qte'] = 1;
    $test2['taille'] = "34";
    $test2['prix'] = 434.95;
    ?>
    <input type="button" value="Ajouter un élément au panier" name="bajout">
    <pre> 
        <?php
        
        if($_POST['bajout'])
            {
            ajout($test1);
            }
        ?>
        <?php
        var_dump($_SESSION['panier']);
        ?> 
    </pre>
</body>
</html>
