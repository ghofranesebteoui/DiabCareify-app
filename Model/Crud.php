<?php
class Crud
{
    private $pdo;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=e_commerce";
        $user = "root";
        $pw = "";
        try {
            $this->pdo = new PDO($dsn, $user, $pw);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }

    // Méthode pour exécuter une requête d'insertion, de mise à jour ou de suppression
    public function executeQuery($sql)
    {
        try {
            $this->pdo->query($sql);
        } catch (PDOException $e) {
            die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
        }
    }

    // Méthode pour exécuter une requête de sélection
    public function executeSelect($sql)
    {
        try {
            $result = $this->pdo->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Erreur lors de la récupération des données : " . $e->getMessage());
        }
    }

    // Fonctionnalités spécifiques

    // Ajouter un UO
    public function ajouterUO($nom, $email)
    {
        $sql = "INSERT INTO unite_operationnelle (nomUO,emailUO) VALUES ('$nom','$email')";
        $this->executeQuery($sql);
    }

    // Supprimer un UO
    public function supprimerUO($id)
    {
        $sql = "DELETE FROM unite_operationnelle WHERE idUO = $id";
        $this->executeQuery($sql);
    }

    // Configurer un indicateur
    public function configurerIndicateur($formule, $objectif)
    {
        $sql = "UPDATE indicateur SET formuleCalcul = '$formule', objectif = '$objectif' WHERE idIndicateur = 1";
        $this->executeQuery($sql);
    }


    // Suivi des UOs
    public function obtenirSuiviUOs()
    {
        $sql = "SELECT uo.nom AS uo_nom, 
                       IFNULL(uo_donnees.id, 'Non saisi') AS statut 
                FROM unite_operationnelle uo 
                LEFT JOIN uo_donnees ON uo.id = uo_donnees.uo_id";
        return $this->executeSelect($sql);
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
        return $this->executeSelect($sql);
    }
}
