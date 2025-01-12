<!DOCTYPE html>
<html>

<head>
    <title>Gérer UOs</title>
</head>

<body>
    <h2>Gérer UOs</h2>
    <form method="POST" action="../../Controller/Responsable/ajouterUO.php">
        <label for="nom">Nom UO :</label><br>
        <input type="text" name="nom" id="nom" required><br><br>
        <button type="submit">Ajouter UO</button>
    </form>

    <h3>Supprimer une UO</h3>
    <form method="POST" action="../../Controller/Responsable/supprimerUO.php">
        <label for="id">ID UO :</label><br>
        <input type="number" name="id" id="id" required><br><br>
        <button type="submit">Supprimer UO</button>
    </form>
</body>

</html>