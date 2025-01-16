<?php
require_once '../../Model/Crud.php';

class PartagerIndicateurController
{
    public function activerAcces()
    {
        $crud = new Crud();
        $sql = "UPDATE indicateur SET partage = 1 WHERE id = 1";
        $crud->executeQuery($sql);
        header('Location: success.php?message=Indicateur partagé avec succès');
    }
}

$controller = new PartagerIndicateurController();
$controller->activerAcces();
