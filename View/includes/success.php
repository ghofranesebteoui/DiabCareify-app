<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succès</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
        }

        .container {
            text-align: center;
            background: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #4CAF50;
            font-size: 24px;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            color: #555;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 14px;
            color: #fff;
            background-color: #4CAF50;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Récupération du message de succès via les paramètres GET -->
        <?php
        if (isset($_GET['message'])) {
            $message = htmlspecialchars($_GET['message']); // Sécurisation des données
            echo "<h1>Succès !</h1>";
            echo "<p>$message</p>";
        } else {
            echo "<h1>Opération réussie !</h1>";
            echo "<p>Votre opération a été effectuée avec succès.</p>";
        }
        ?>
        <a href="index.php" class="btn">Retour à l'accueil</a>
    </div>
</body>

</html>