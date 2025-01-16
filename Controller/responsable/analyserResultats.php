<?php
require_once '../../Model/Crud.php';

class AnalyserResultatsController
{
    public function afficherResultats()
    {
        $crud = new Crud();
        $sql = "SELECT * FROM uo_donnees";
        $resultats = $crud->executeSelect($sql);
        include '../../View/Responsable/analyserResultats.php';
    }
}

$controller = new AnalyserResultatsController();
$controller->afficherResultats();
