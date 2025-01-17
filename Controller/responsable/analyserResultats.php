<?php
require_once '../../Model/Crud.php';

class AnalyserResultats
{
    public function afficherResultats()
    {
        $crud = new Crud();
        $sql = "SELECT * FROM unite_operationnelle";
        $resultats = $crud->getResultatsConsolides();
        include '../../View/responsable/analyserResultats.php';
    }
}

$controller = new AnalyserResultats();
$controller->afficherResultats();
