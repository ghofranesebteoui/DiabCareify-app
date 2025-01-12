<!DOCTYPE html>
<html>

<head>
    <title>Gestion des Programmes</title>
</head>

<body>
    <h2>Ajouter un Programme</h2>
    <form method="POST" action="../../Controller/Responsable/gestionProgrammes.php">
        <label for="nom">Nom Programme :</label><br>
        <input type="text" name="nom" id="nom" required><br><br>
        <button type="submit">Ajouter Programme</button>
    </form>
</body>

</html>