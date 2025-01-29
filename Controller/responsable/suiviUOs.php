<?php
require_once '../../Model/Crud.php';

// SuiviUOs.php (Controller)
class SuiviUOs
{
    public function afficherSuivi()
    {
        $crud = new Crud();
        $suiviUOs = $crud->obtenirSuiviUOsAvecStatutSaisie();

        // Assurez-vous que la variable est définie avant d'inclure la vue
        require_once "../../View/responsable/suiviUOs.php";
    }
}

$controller = new SuiviUOs();
$controller->afficherSuivi();
