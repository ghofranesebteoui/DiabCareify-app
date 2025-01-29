<?php
require_once '../../Model/connexion.php';

$connexion = new Connexion();
$pdo = $connexion->getConnexion();

$sql = "SELECT * FROM indicateur WHERE idIndicateur = 1";
$stmt = $pdo->prepare($sql);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $id = $row['idIndicateur'];
    $nom = $row['nomIndicateur'];
    $objectif = $row['objectif'];
    $formule = $row['formuleCalcul'];
    $date = $row['dateActualisation'];
} else {
    $id = "Aucun";
    $nom = "Aucun nom disponible";
    $objectif = "Aucun objectif disponible";
    $formule = "Aucune formule disponible";
    $date = "Aucune date disponible";
}
