<?php

require_once '../../Model/Crud.php';
$crud = new Crud();

if (isset($_POST['ajouter'])) {
    $idValeur = htmlspecialchars($_POST['idValeur']);
    $idUO = htmlspecialchars($_POST['idUO']);
    $nbChroniques = htmlspecialchars($_POST['nbChroniques']);
    $nbComplications = htmlspecialchars($_POST['nbComplications']);
    $dateSaisie = htmlspecialchars($_POST['dateSaisie']);
    $tempsSaisie = htmlspecialchars($_POST['tempsSaisie']);
    $statutSaisie = htmlspecialchars($_POST['statutSaisie']);

    $res = $crud->ajouterValeur($idValeur, $idUO, $nbChroniques, $nbComplications, $dateSaisie, $tempsSaisie, $statutSaisie);

    if ($res) {
        header('Location: ../../View/includes/success.php');
        exit();
    } else {
        echo "Erreur lors de l'ajout de la valeur.";
    }
}
