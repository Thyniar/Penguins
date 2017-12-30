<?php

function addItem($item, $qte) {
    /* On crée une variable pour trouver l'id du produit */
    $existe = array_search($item['id'], $_SESSION['panier']);

    /* On vérifie si le produit existe ou pas */
    /* si non on l'ajoute au panier */
    if ($existe === FALSE) {
        array_push($_SESSION['panier'], $item['id']);
        $_SESSION['panier'] [$item['id']] = array();

        $_SESSION['panier'] [$item['id']]['qte'] = $qte;
        $_SESSION['panier'] [$item['id']]['prix'] = $item['prix'];
    }

    /* si oui on augmente la quantité */ else {
        $_SESSION['panier'][$item['id']]['qte'] += $qte;
    }
}

function deleteItem($item, $qte) {
    /* On crée une variable pour trouver l'id du produit */
    $existe = array_search($item['id'], $_SESSION['panier']);


    if ($existe === FALSE || $_SESSION['panier'][$item['id']]['qte'] === 0) {
        echo "L'objet en question n'est pas dans le panier";
    } else {
        $_SESSION['panier'][$item['id']]['qte'] -= $qte;
    }
}

function emptyBasket()
{
    $_SESSION['panier'] = array();
}

function EmptyItem ($item)
{
    unset($_SESSION['panier'][$item['id']]);
}

?>