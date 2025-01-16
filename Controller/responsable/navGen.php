<?php
require_once '../../Model/Crud.php';

class ConfigurerIndicateurController
{
    public function afficherFormulaire()
    {
        include '../../View/Responsable/configurerIndicateur.php';
    }

    public function configurerIndicateur($formule, $objectif)
    {
        $crud = new Crud();
        $sql = "UPDATE indicateur SET formule = '$formule', objectif = '$objectif' WHERE id = 1";
        $crud->executeQuery($sql);
        header('Location: success.php?message=Indicateur configuré avec succès');
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new ConfigurerIndicateurController();
    $controller->configurerIndicateur($_POST['formule'], $_POST['objectif']);
} else {
    $controller = new ConfigurerIndicateurController();
    $controller->afficherFormulaire();
}
