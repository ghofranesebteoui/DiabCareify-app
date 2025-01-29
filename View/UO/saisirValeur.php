<!DOCTYPE html>
<html>

<head>
    <title>Saisir les valeurs</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

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

        /* img-box section*/
        .img-box img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* detail-box section */
        .detail-box {
            text-align: left;
        }

        /* contact section */
        .contact_section {
            padding-top: 200px;
            /* Ajoute de l'espace en haut */
            padding-bottom: 200px;
            /* Ajoute de l'espace en bas */
            position: relative;
            color: #ffffff;
        }

        .contact_section .row {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .contact_section .contact_form-container {
            margin-top: 35px;
        }

        .contact_section .contact_form-container input {
            border: none;
            outline: none;
            color: #fefefe;
            height: 45px;
            width: 100%;
            margin: 15px 0;
            padding-left: 15px;
            background-color: transparent;
            border-bottom: 1px solid #fff;
        }

        .contact_section .contact_form-container input::-webkit-input-placeholder {
            color: #fafafa;
            text-transform: uppercase;
        }

        .contact_section .contact_form-container input:-ms-input-placeholder {
            color: #fafafa;
            text-transform: uppercase;
        }

        .contact_section .contact_form-container input::-ms-input-placeholder {
            color: #fafafa;
            text-transform: uppercase;
        }

        .contact_section .contact_form-container input::placeholder {
            color: #fafafa;
            text-transform: uppercase;
        }

        .contact_section .contact_form-container input.message_input {
            height: 75px;
        }

        .contact_section .contact_form-container input:focus {
            border-bottom: 1px solid #96bb7c;
        }

        .contact_section .contact_form-container input[type="date"]::-webkit-calendar-picker-indicator,
        .contact_section .contact_form-container input[type="time"]::-webkit-calendar-picker-indicator {
            color: #fff;
            -webkit-filter: invert(1);
            filter: invert(1);
        }

        .contact_section .contact_form-container .btn-box {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-top: 25px;
        }

        .contact_section .contact_form-container button {
            display: inline-block;
            padding: 10px 60px;
            background-color: #96bb7c;
            color: #ffffff;
            border-radius: 5px;
            border: 1px solid #96bb7c;
            -webkit-transition: all .2s;
            transition: all .2s;
            text-transform: uppercase;
            font-weight: bold;
        }

        .contact_section .contact_form-container button:hover {
            background-color: transparent;
            color: #96bb7c;
        }

        /* Correction pour afficher l'image complète sur toute la section */
        .contact_bg_box {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            /* Centrer l'image */
        }

        .contact_bg_box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* L'image couvre toute la section sans être déformée */
            object-position: center;
            /* Centrer l'image dans le conteneur */
        }

        /* Overlay pour l'image de fond */
        .contact_bg_box::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(24, 77, 71, 0.4), rgba(24, 77, 71, 0.85));
        }

        /* Modification de la police du h2 */
        .contact_section h2 {
            font-family: 'Arial', sans-serif;
            /* Exemple : Change cette police par celle que tu veux */
            font-size: 2rem;
            /* Ajuste la taille selon tes besoins */
            font-weight: bold;
            /* Modifie en fonction du style souhaité */
            text-transform: uppercase;
            margin-bottom: 20px;
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

        /* Formulaire */
        .form-container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-container label {
            display: block;
            font-size: 1rem;
            font-weight: bold;
            margin-bottom: 8px;
            color: #333;
        }

        .form-container textarea,
        .form-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-container textarea:focus,
        .form-container input:focus {
            border-color: #007BFF;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
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
            margin-left: 32%;
        }

        button[name="ajouter"]:hover {
            background-color: #45a049;
            /* Changement de couleur au survol */
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
                        <a class="nav-link active" href="indexUO.php"><i class="fa-solid fa-house"></i>&nbsp;Acceuil
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="contact_section layout_padding" style="margin-top: 70px;margin-bottom: 70px;">
        <div class="contact_bg_box">
            <img src="../images/formUser.png" alt="">
        </div>
        <div class="container">
            <div class="heading_container heading_center">
                <h2 style="margin-left: 20%;">Saisir les valeurs</h2>
            </div>
            <div class="" style="margin-right: 30%;">
                <div class="row">
                    <div class="col-md-7 mx-auto">
                        <form action="../../Controller/uniteOperationnelle/saisirValeur.php" method="post">
                            <div class="contact_form-container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="number" placeholder="IdValeur">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" placeholder="IdUO">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="number" placeholder="nbChroniques">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" placeholder="nbComplications">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="date" placeholder="dateSaisie">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="time" placeholder="tempsSaisie">
                                    </div>
                                </div>
                                <div class="row" style="margin-left: 33%;">
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="statutSaisie">
                                    </div>
                                </div>
                                <button type="submit" name="ajouter">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php require_once "../includes/footer.php" ?>

</html>