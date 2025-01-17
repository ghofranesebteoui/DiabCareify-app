<?php
require_once '../../Model/Crud.php';

class GererUOs
{
    public function ajouterUO($nom, $email)
    {
        $crud = new Crud();
        $sql = "INSERT INTO unite_operationnelle (nomUO,emailUO) VALUES ('$nom','$email')";
        $crud->executeQuery($sql);
        header('Location: success.php?message=UO ajoutée avec succès');
    }

    public function supprimerUO($id)
    {
        $crud = new Crud();
        $sql = "DELETE FROM unite_operationnelle WHERE idUO = $id";
        $crud->executeQuery($sql);
        header('Location: success.php?message=UO supprimée avec succès');
    }
}
