<?php

require_once '../../Model/Crud.php';
$crud = new Crud();

if (isset($_POST['ajouter'])) {
    $id = htmlspecialchars($_POST['id']);
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $uo = new UO($id, $nom, $email);
    $res = $crud->ajouterUO($id, $nom, $email);
} elseif (isset($_POST['supprimer'])) {
    $id = htmlspecialchars($_POST['id']);
    $res = $crud->supprimerUO($id);
}
