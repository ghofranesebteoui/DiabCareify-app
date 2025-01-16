<?php
require_once '../../Model/Crud.php';

class GererUOsController
{
    public function ajouterUO($nom)
    {
        $crud = new Crud();
        $sql = "INSERT INTO unite_operationnelle (nom) VALUES ('$nom')";
        $crud->executeQuery($sql);
        header('Location: success.php?message=UO ajoutée avec succès');
    }

    public function supprimerUO($id)
    {
        $crud = new Crud();
        $sql = "DELETE FROM unite_operationnelle WHERE id = $id";
        $crud->executeQuery($sql);
        header('Location: success.php?message=UO supprimée avec succès');
    }
}
