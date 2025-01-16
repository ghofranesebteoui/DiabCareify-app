<?php
require_once '../../Model/Crud.php';

class SuiviUOsController
{
    public function afficherSuivi()
    {
        $crud = new Crud();
        $sql = "SELECT * FROM uo_suivi";
        $suivi = $crud->executeSelect($sql);
        include '../../View/Responsable/suiviUOs.php';
    }
}

$controller = new SuiviUOsController();
$controller->afficherSuivi();
