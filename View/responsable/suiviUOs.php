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
    <h2>Suivi des Résultats des UOs</h2>

    <?php
    require_once '../../Model/Crud.php';

    $crud = new Crud();

    $suiviUOs = $crud->obtenirSuiviUOs();

    if (!empty($suiviUOs)) {
    ?>
        <table>
            <tr>
                <th>Unité Opérationnelle</th>
                <th>Statut des Données</th>
            </tr>
            <?php foreach ($suiviUOs as $suivi) { ?>
                <tr>
                    <td><?= htmlspecialchars($suivi['nomUO']) ?></td>
                    <td><?= ($suivi['statut'] === 'Non saisi') ? 'Aucune donnée' : 'Données soumises' ?></td>
                </tr>
            <?php } ?>
        </table>
    <?php
    } else {
    ?>
        <p style="text-align: center;">Aucune Unité Opérationnelle disponible.</p>
    <?php
    }
    ?>
</body>

</html>