<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analyser Résultats</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
        }

        h2 {
            text-align: center;
            color: #333;
        }
    </style>
</head>

<body>
    <h2>Résultats Consolidés</h2>
    <table>
        <tr>
            <th>Unité Opérationnelle</th>
            <th>Valeur (%)</th>
        </tr>
        <?php if (!empty($resultats)) { ?>
            <?php foreach ($resultats as $resultat) { ?>
                <tr>
                    <td><?= htmlspecialchars($resultat['nomUO']) ?></td>
                    <td><?= number_format($resultat['valeur'], 2) ?>%</td>
                </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="2">Aucun résultat disponible.</td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>