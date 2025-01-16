<?php
require_once '../../Model/Crud.php';

class GestionProgrammesController
{
    public function ajouterProgramme($nom)
    {
        $crud = new Crud();
        $sql = "INSERT INTO programme (nom) VALUES ('$nom')";
        $crud->executeQuery($sql);
        header('Location: success.php?message=Programme ajouté avec succès');
    }
}
