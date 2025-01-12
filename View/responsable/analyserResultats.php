<!DOCTYPE html>
<html>

<head>
    <title>Analyser Résultats</title>
</head>

<body>
    <h2>Résultats Consolidés</h2>
    <table border="1">
        <tr>
            <th>UO</th>
            <th>Valeur</th>
        </tr>
        <?php foreach ($resultats as $resultat) { ?>
            <tr>
                <td><?= $resultat['uo_nom'] ?></td>
                <td><?= $resultat['valeur'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>