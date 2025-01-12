<!DOCTYPE html>
<html>

<head>
    <title>Suivi des UOs</title>
</head>

<body>
    <h2>Suivi des UOs</h2>
    <table border="1">
        <tr>
            <th>UO</th>
            <th>Statut</th>
        </tr>
        <?php foreach ($suivi as $uo) { ?>
            <tr>
                <td><?= $uo['uo_nom'] ?></td>
                <td><?= $uo['statut'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>