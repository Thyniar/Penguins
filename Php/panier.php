<?php
include('fonction_panier.php');
/* Démarrage ou prolongation de la session */
session_start();
?>
<?php
// dédier au item de démarage
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
    if (!isset($_SESSION['panier'])) {
        /* Initialisation du panier */
        $_SESSION['panier'] = array();
    }
    $item1 = array();
    $item1['id'] = "42";
    $item1['prix'] = 84.95;
    ?>
    <form name="inscription" method="post"</br>

        <input type="submit" name="ajouter" value="Ajouter">
        <input type="submit" name="supprimer" value="Retirer">
        <input type="submit" name="vider" value="Vider le panier">
        <input type="submit" name="enlever" value="Enlever l'élément du panier">

    </form>

    <pre> 
        <?php
        if (isset($_POST['ajouter'])) {
            addItem($item1, 1);    
        }
        if (isset($_POST['supprimer'])) {
            deleteItem($item1, 1);
        }
        if (isset($_POST['vider'])) {
            emptyBasket();
        }
        if (isset($_POST['enlever'])) {
            EmptyItem($item1);
        }
        ?>
        <?php
        var_dump($_SESSION['panier']);
        ?> 
    </pre>
</body>
</html>
