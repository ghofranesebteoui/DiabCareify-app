<!DOCTYPE html>
<html>

<head>
    <title>Gérer UOs</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
        }

        /* main section */
        .main {
            width: 100%;
            height: 100vh;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('../images/admin3.png') center/cover no-repeat;
            display: flex;
            align-items: center;
            color: #fff;
            padding: 0 10%;
            text-align: center;
        }

        .main h1 {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
            padding-bottom: 20px;
            position: relative;
        }

        .main h1::before {
            content: "";
            position: absolute;
            display: block;
            width: 120px;
            /* Longueur du trait */
            height: 1px;
            /* Épaisseur du trait */
            background: #ddd;
            bottom: -10px;
            /* Distance sous le h1 */
            left: 50%;
            /* Position centré horizontalement */
            transform: translateX(-50%);
            /* Ajustement pour centrer */
        }

        .main p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            max-width: 600px;
            line-height: 1.6;
        }

        .main .btn {
            background-color: transparent;
            color: #fff;
            border: 2px solid #fff;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .main .btn:hover {
            background-color: #fff;
            color: #000;
        }



        /* navbar section */

        .navbar-brand img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .fixed-top {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1030;
            /* Pour s'assurer qu'elle est au-dessus d'autres éléments */
        }

        /* Conteneur principal du formulaire et de l'image */
        .form-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: -10%;
            /* Réduire l'espacement entre le formulaire et l'image */
            margin-left: 5%;
            /* Espace avant et après */
        }

        /* Section du formulaire */
        .form-section {
            width: 70%;
            /* Formulaire prend 50% de la largeur */
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Ajustement de l'image avec un margin-left pour la déplacer à gauche */
        .img-box img {
            width: 150%;
            margin-left: -50%;
            /* Déplace l'image vers la gauche */
        }


        /* Style des titres */
        h2,
        h3 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: #333;
        }

        /* Style des labels */
        label {
            font-size: 1rem;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }

        /* Style des champs de saisie */
        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            box-sizing: border-box;
        }

        /* Boutons de soumission */
        button[name="ajouter"] {
            background-color: #4CAF50;
            /* Vert pour le bouton Ajouter UO */
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[name="supprimer"] {
            background-color: #f44336;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }


        button[name="ajouter"]:hover {
            background-color: #45a049;
            /* Changement de couleur au survol */
        }

        button[name="supprimer"]:hover {
            background-color: #d32f2f;
            /* Changement de couleur au survol pour le bouton reset */
        }




        /* footer section*/
        .footer_section {
            background-color: #2c3e50;
            color: #ffffff;
            padding: 80px 0 40px 0;
            text-align: center;
            font-family: 'Arial', sans-serif;
            position: relative;
        }

        .footer_section h4 {
            font-size: 30px;
            margin-bottom: 20px;
            text-transform: uppercase;
            font-weight: 700;
        }

        .footer_section h4,
        .footer_section .footer-logo {
            font-weight: 600;
            margin-bottom: 20px;
            font-family: 'Playfair Display', serif;
        }

        .footer_section .footer-col {
            margin-bottom: 30px;
        }

        .footer_section .footer_contact .contact_link_box {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .footer_section .footer_contact .contact_link_box a {
            margin: 8px 0;
            color: #ffffff;
            font-size: 16px;
            transition: color 0.3s;
        }

        .footer_section .footer_contact .contact_link_box a i {
            margin-right: 10px;
        }

        .footer_section .footer_contact .contact_link_box a:hover {
            color: #3498db;
        }

        .footer_section .footer-logo {
            display: block;
            font-weight: bold;
            font-size: 36px;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 15px;
        }

        .footer_section .footer_social {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .footer_section .footer_social a {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #2c3e50;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ffffff;
            margin: 0 8px;
            font-size: 20px;
            transition: all 0.3s;
        }

        .footer_section .footer_social a:hover {
            color: #ffffff;
            background-color: #3498db;
        }

        .footer_section .footer-info {
            text-align: center;
            margin-top: 25px;
            font-size: 14px;
        }

        .footer_section .footer-info p {
            color: #ffffff;
            margin: 0;
        }

        .footer_section .footer-info p a {
            color: #3498db;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }

        .footer_section .footer-info p a:hover {
            color: #ffffff;
        }

        .footer-links {
            list-style-type: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #3498db;
        }

        .footer-col {
            margin-bottom: 20px;
        }

        .footer_section .footer_content {
            padding: 10px;
        }
    </style>
</head>


<body>
    <nav class="navbar fixed-top navbar-expand-lg bg-light" data-bs-theme="light">
        <div class="container-fluid">
            <a class="navbar-brand" href="indexR.php"><img src="../images/img4.png" alt="" class="brand-logo"> DiabCareify</a>&nbsp;
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="indexR.php"><i class="fa-solid fa-house"></i>&nbsp;Acceuil
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main">
        <div>
            <h1 class="animate__animated animate__fadeInDown">Gestion des Unités Opérationnelles</h1>
            <p class="animate__animated animate__fadeInDown">
                Cette page vous permet d'ajouter ou de supprimer des unités opérationnelles (UOs).<br> Vous pouvez gérer les UOs ci-dessous. </p>

            <a href="#" class="btn">Voir plus</a>
        </div>
    </div>

    <section class="form-container" style="margin-top: 80px;margin-bottom: 80px;">
        <div class="form-section">
            <h2>Gérer UOs</h2>
            <form action="../../Controller/responsable/gererUOs.php" method="POST">
                <input type="hidden" name="action" value="ajouter"> <label for="id">Id UO :</label><br>
                <input type="text" name="id" id="id" required><br><br>
                <label for="nom">Nom UO :</label><br>
                <input type="text" name="nom" id="nom" required><br><br>
                <label for="email">Email UO :</label><br>
                <input type="email" name="email" id="email" required><br><br>
                <button name="ajouter" type="submit">Ajouter UO</button>
            </form>

            <h3>Supprimer une UO</h3>
            <form action="../../Controller/responsable/gererUOs.php" method="POST">
                <input type="hidden" name="action" value="supprimer">
                <input type="number" name="id" id="id" required><br><br>
                <button name="supprimer" type="submit">Supprimer UO</button>
            </form>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-5 ml-auto">
                <!-- Right Image -->
                <div class="img-box">
                    <img src="../images/formulaire.jpg" alt="" style=" height: calc(100% - 20px); object-fit: cover; border-radius: 10px;">
                </div>
            </div>
        </div>
    </section>

</body>
<?php require_once "../includes/footer.php"; ?>


</html>