<!DOCTYPE html>
<html>

<head>
    <title>Configurer Indicateur</title>
</head>

<body>
    <h2>Configurer Indicateur</h2>
    <form method="POST" action="../../Controller/Responsable/configurerIndicateur.php">
        <label for="formule">Formule :</label><br>
        <textarea name="formule" id="formule" rows="3" required></textarea><br><br>

        <label for="objectif">Objectif :</label><br>
        <input type="text" name="objectif" id="objectif" required><br><br>

        <button type="submit">Enregistrer</button>
    </form>
</body>

</html>