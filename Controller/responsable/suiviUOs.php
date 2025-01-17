<?php
require_once '../../Model/Crud.php';

class SuiviUOs
{
    public function afficherSuivi()
    {
        $crud = new Crud();

        $suiviUOs = $crud->obtenirSuiviUOs();

        include '../../View/responsable/suiviUOs.php';
    }
}

$controller = new SuiviUOs();
$controller->afficherSuivi();
