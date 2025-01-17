<?php
require_once '../../Model/Crud.php';

class ConfigurerIndicateur
{
    public function afficherFormulaire()
    {
        include '../../View/responsable/configurerIndicateur.php';
    }

    public function configurerIndicateur($formule, $objectif)
    {
        $crud = new Crud();
        $sql = "UPDATE indicateur SET formuleCalcul = '$formule', objectif = '$objectif' WHERE idIndicateur = 1";
        $crud->executeQuery($sql);
        header('Location: success.php?message=Indicateur configuré avec succès');
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new ConfigurerIndicateur();
    $controller->configurerIndicateur($_POST['formule'], $_POST['objectif']);
} else {
    $controller = new ConfigurerIndicateur();
    $controller->afficherFormulaire();
}
