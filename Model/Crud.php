<?php
require_once "connexion.php";
require_once "suiviUOs.php";
require_once "valeurSource.php";
require_once "indicateur.php";
require_once "UO.php";

class Crud
{
    private $pdo;

    public function __construct()
    {
        $connexion = new Connexion();
        $this->pdo = $connexion->getConnexion();
    }


    // Ajouter un UO
    public function ajouterUO($id, $nom, $email)
    {
        $uo = new UO($id, $nom, $email);
        $nom = $uo->getNomUO();
        $email = $uo->getEmailUO();
        $sql = "INSERT INTO unite_operationnelle (idUO,nomUO,emailUO) 
        VALUES (id,'$nom','$email')";
        $res = $this->pdo->exec($sql);
        return $res;
    }

    // Supprimer un UO
    public function supprimerUO($id)
    {
        $sql = "DELETE FROM unite_operationnelle WHERE idUO = $id";
        $res = $this->pdo->exec($sql);
        return $res;
    }

    //Ajout des valeurs
    public function ajouterValeur($idValeur, $idUO, $nbChroniques, $nbComplications, $dateSaisie, $tempsSaisie, $statutSaisie)
    {
        $val = new ValeursSources($idValeur, $idUO, $nbChroniques, $nbComplications, $dateSaisie, $tempsSaisie, $statutSaisie);
        $idValeur = $val->getIdValeur();
        $idUO = $val->getIdUO();
        $nbChroniques = $val->getNbChroniques();
        $nbComplications = $val->getNbComplications();
        $dateSaisie = $val->getDateSaisie();
        $tempsSaisie = $val->getTempsSaisie();
        $statutSaisie = $val->getStatutSaisie();
        $sql = "INSERT INTO valeur_source (idValeur, idUO, nbChroniques, nbComplications, dateSaisie, tempsSaisie, statutSaisie)
                VALUES ($idValeur, $idUO, $nbChroniques, $nbComplications, '$dateSaisie', '$tempsSaisie', '$statutSaisie')";
        $res = $this->pdo->exec($sql);
        return $res;
    }


    // Suivi des UOs
    public function obtenirSuiviUOsAvecStatutSaisie()
    {
        $query = "SELECT uo.id AS idUO, uo.uo_nom, vs.statut_saisie, uo.date_debut, uo.date_fin, uo.statut
                  FROM suivi_uos uo
                  LEFT JOIN valeurs_sources vs ON uo.id = vs.idUO
                  WHERE uo.idIndicateur = 1
                  ORDER BY uo.date_debut";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getResultatsConsolides()
    {
        $sql = "
        SELECT 
            u.nomUO, 
            (SUM(v.nbComplications) / SUM(v.nbChroniques) * 100) AS valeur
        FROM 
            unite_operationnelle u
        JOIN 
            valeurs_sources v 
        ON 
            u.idUO = v.idUO
        GROUP BY 
            u.idUO
    ";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
}
