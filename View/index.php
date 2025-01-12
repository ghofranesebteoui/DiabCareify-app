<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GDT</title>
    <link rel="icon" href="GDT.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styles pour la navbar */
        .navbar-custom {
            background-color: #193768;
            /* Couleur de fond bleue */
        }

        .navbar-custom .navbar-nav .nav-link {
            color: white;
            /* Couleur des liens */
        }

        .navbar-custom .dropdown-menu {
            background-color: #193768;
            /* Couleur des menus déroulants */
        }

        .navbar-custom .dropdown-item {
            color: white;
            /* Couleur des éléments déroulants */
        }

        .navbar-custom .dropdown-item:hover {
            background-color: #1d4a8d;
            /* Couleur au survol */
        }

        .navbar-custom .navbar-brand {
            color: white;
            /* Couleur du titre/branding */
            font-weight: bold;
        }

        /* Styles pour la grille */
        body {
            background-color: #193768;
            /* Couleur de fond globale */
            color: white;
        }

        .region-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            /* Grille responsive */
            gap: 20px;
            padding: 20px;
        }

        .region-card {
            background-color: #1d4a8d;
            /* Couleur des cartes */
            border: none;
            border-radius: 8px;
            text-align: center;
            padding: 20px;
            transition: transform 0.2s;
        }

        .region-card:hover {
            transform: scale(1.05);
            /* Zoom au survol */
        }

        .region-card img {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .region-card h5 {
            margin-top: 10px;
        }

        /* Header */
        header.header {
            margin-top: 20px;
            /* Ajout d'un espace au-dessus du header */
        }

        .header {
            display: flex;
            align-items: center;
            background-color: white;
            padding: 10px 20px;
            color: white;
        }

        .header img {
            max-width: 100px;
            /* Taille du logo */
            height: auto;
            border-radius: 50%;
            margin-right: 15px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            background-color: white;
            padding: 10px;
            color: #193768;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <?php include 'navGen.php'; ?>
    <header class="header">
        <img src="GDT.png" alt="Website Logo">
        <h1>Gestion des Diabètes en Tunisie</h1>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>