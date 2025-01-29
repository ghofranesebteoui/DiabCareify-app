<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiabCareify</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Favicon -->
    <link rel="icon" href="../images/img4.png" type="image/png">

    <!-- Bootstrap CSS (version 5.3.0-alpha1) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap JS (version 5.3.0-alpha1) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
            background: linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('../images/home.png') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            padding-top: 100px;
        }

        .main h1 {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
            padding-bottom: 20px;
            position: relative;
            margin-left: 40%;
        }

        .main h1::before {
            content: "";
            position: absolute;
            display: block;
            width: 120px;
            height: 1px;
            background: #ddd;
            bottom: 1px;
            right: calc(50% - 60px);
        }

        .main p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            margin-left: 20%;
            max-width: 600px;
            line-height: 1.6;
            margin-left: 50%;

        }

        .main .btn {
            background-color: transparent;
            color: #fff;
            border: 2px solid #fff;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 25px;
            transition: all 0.3s ease;
            margin-left: 40%;

        }

        .main .btn:hover {
            background-color: #fff;
            color: #000;
        }

        .content {
            text-align: center;
            margin: 0 auto;
            max-width: 800px;
        }


        /* Pour les tablettes (largeur d'écran <= 768px) */
        @media (max-width: 768px) {
            .main h1 {
                font-size: 2.5rem;
                /* Réduire la taille du titre */
                margin-left: 10%;
                /* Réduire la marge */
            }

            .main p {
                font-size: 1rem;
                /* Réduire la taille du texte */
                margin-left: 20%;
                /* Ajuster la marge */
                max-width: 500px;
                /* Réduire la largeur maximale */
            }

            .main .btn {
                font-size: 0.9rem;
                /* Réduire la taille du bouton */
                padding: 8px 16px;
                margin-left: 15%;
                /* Ajuster la marge */
            }
        }

        /* Pour les mobiles (largeur d'écran <= 576px) */
        @media (max-width: 576px) {
            .main h1 {
                font-size: 2rem;
                /* Taille encore plus petite */
                margin-left: 5%;
                /* Presque centré */
            }

            .main p {
                font-size: 0.9rem;
                /* Texte plus petit pour les petits écrans */
                margin-left: 10%;
                /* Centrer un peu plus le texte */
                max-width: 100%;
                /* Permettre à l'ensemble du texte d'être visible */
            }

            .main .btn {
                font-size: 0.8rem;
                /* Taille réduite pour les boutons */
                padding: 6px 12px;
                margin-left: 5%;
                /* Centrer plus le bouton */
            }

            .main {
                background-size: contain;
                /* L'image de fond devient plus petite */
            }
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

        /* img-box section*/
        .img-box img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);

        }

        .config-indicateur-section .img-box img {
            width: 120%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-right: 50%;
            margin-top: 50%;

        }

        /* Titre des informations de l'indicateur */
        .informations-indicateur-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: left;
            /* Aligner le titre à gauche */
            color: #333;
            /* Couleur sombre pour le titre */
            border-bottom: 2px solid #ddd;
            /* Ligne sous le titre pour le séparer */
            padding-bottom: 10px;
        }

        /* detail-box section */
        .detail-box {
            text-align: left;
        }

        .config-indicateur-section .detail-box {
            text-align: left;
            margin-right: 50%;
        }

        /* about section */
        .about_section {
            padding: 50px 0;
        }

        .about-heading {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #000;
        }

        .about-paragraph {
            font-size: 16px;
            color: #555;
            line-height: 1.8;
        }

        .about_section .detail-box a {
            display: inline-block;
            padding: 10px 45px;
            background-color: #96bbf5;
            color: #ffffff;
            border-radius: 5px;
            border: 1px solid #96bbf5;
            -webkit-transition: all .2s;
            transition: all .2s;
        }

        .about_section .detail-box a:hover {
            background-color: transparent;
            color: #96bbf5;
        }

        /* contact section */
        .contact_section {
            width: 100%;
            height: 100vh;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('../images/form.png') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }

        .contact_section .row {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .contact_section .contact_form-container {
            margin-top: 35px;
            margin-right: 15%;
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
            border-bottom: 1px solid #96bbf5;
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
            background-color: #96bbf5;
            color: #ffffff;
            border-radius: 5px;
            border: 1px solid #96bbf5;
            -webkit-transition: all .2s;
            transition: all .2s;
            text-transform: uppercase;
            font-weight: bold;
        }

        .contact_section .contact_form-container button:hover {
            background-color: transparent;
            color: #96bbf5;
        }

        .contact_bg_box {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contact_bg_box img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center center;
        }

        .contact_bg_box::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(24, 77, 71, 0.4), rgba(24, 77, 71, 0.85));
        }

        .contact_section .heading_container {
            margin-right: 10%;
        }

        .contact_section h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        /* client section */
        .client_section {
            text-align: center;
        }

        .client_section #carouselExampleControls {
            padding: 0 10%;
        }

        .client_section .box {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-top: 45px;
        }

        .client_section .box .img-box {
            width: 145px;
        }

        .client_section .box .img-box img {
            width: 100%;
            border-radius: 100%;
        }

        .client_section .box .detail-box {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-top: 20px;
        }

        .client_section .box .detail-box h4 {
            font-weight: bold;
            font-size: 18px;
            padding: 0 10px;
            border-bottom: 1px solid #ffffff;
        }

        .client_section .box .detail-box p {
            margin-top: 10px;
        }

        .client_section .carousel_btn-box {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .client_section .carousel-control-prev,
        .client_section .carousel-control-next {
            position: absolute;
            top: 50%;
            width: 45px;
            height: 45px;
            border: none;
            opacity: 1;
            background-color: #96bbf5;
            color: #ffffff;
            border-radius: 100%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            font-size: 18px;
        }

        .client_section .carousel-control-prev:hover,
        .client_section .carousel-control-next:hover {
            background-color: midnightblue;
        }

        .client_section .carousel-control-prev {
            left: 0;
        }

        .client_section .carousel-control-next {
            left: initial;
            right: 0;
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

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    <?php require_once "navGen.php" ?>
    <div class="main">
        <div>
            <h1 class="animate__animated animate__fadeInDown">Bienvenue dans notre application de gestion du taux des diabétiques et hypertendus dépistés <br> au stade de complication.</h1>
            <p class="animate__animated animate__fadeInUp">
                Notre plateforme aide les responsables et les unités opérationnelles à collecter, traiter et analyser les données liées au diabète. Elle simplifie la gestion des résultats et permet une analyse globale pour mieux comprendre et agir face aux défis du diabète en Tunisie.
            </p>

            <a href="#" class="btn">Voir plus</a>
        </div>
    </div>
    <!-- special section-->
    <section class="config-indicateur-section layout_padding mt-5" id="config-section" style="margin-top: 50px;margin-bottom: 0px;margin-right: 20%;margin-left: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Left Boxes -->
                    <?php require_once "../../Controller/responsable/configurerIndicateur.php"; ?>
                    <h2 class="informations-indicateur-title">Détails de l'Indicateur</h2>

                    <div class="detail_container">
                        <div class="detail-box">
                            <img src="../images/programme.jpg" alt="Programme de l'Indicateur" class="img-fluid mb-3" style="width: 80px; height: 80px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                            <h5>ID de l'Indicateur</h5>
                            <p><?php echo $id; ?></p>
                        </div>
                        <div class="detail-box">
                            <img src="../images/def.jpg" alt="Nom de l'Indicateur" class="img-fluid mb-3" style="width: 80px; height: 80px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                            <h5>Nom de l'Indicateur</h5>
                            <p><?php echo $nom; ?></p>
                        </div>
                        <div class="detail-box">
                            <img src="../images/obj.jpg" alt="Objectif de l'Indicateur" class="img-fluid mb-3" style="width: 80px; height: 80px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                            <h5>Objectif de l'Indicateur</h5>
                            <p><?php echo $objectif; ?></p>
                        </div>
                        <div class="detail-box">
                            <img src="../images/formule.jpg" alt="Formule de l'Indicateur" class="img-fluid mb-3" style="width: 80px; height: 80px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                            <h5>Formule de l'Indicateur</h5>
                            <p><?php echo $formule; ?></p>
                        </div>
                        <div class="detail-box">
                            <img src="../images/date.jpg" alt="Date de l'Indicateur" class="img-fluid mb-3" style="width: 80px; height: 80px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                            <h5>Date de l'Indicateur</h5>
                            <p><?php echo $date; ?></p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-5 ml-auto">
                    <!-- Right Image -->
                    <div class="img-box">
                        <img src="../images/config.jpg" alt="Configuration Indicateur" style="width: 100%; height: calc(100% - 20px); object-fit: cover; border-radius: 10px;">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- about section-->
    <section class="about_section layout_padding-bottom" id="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="../images/us.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <h2 class="about-heading">QUI SOMMES NOUS?</h2>
                        <p class="about-paragraph">
                            DiabCareify est une plateforme spécialisée conçue pour les responsables et les unités opérationnelles (UO) en Tunisie. Notre objectif principal est d'offrir un outil performant permettant une gestion efficace des données liées au diabète.
                            <br><br>
                            Les unités opérationnelles saisissent les données nécessaires, et notre plateforme permet aux responsables d'effectuer les calculs pour chaque UO. Grâce à ces résultats, une analyse globale et détaillée peut être réalisée, offrant ainsi des perspectives claires et précises pour mieux comprendre et agir face aux défis liés au diabète.
                        </p>
                        <a href="">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="client_section layout_padding mt-5">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>AVIS DE NOS UNITÉS OPÉRATIONNELLES</h2>
            </div>
            <!-- Carrousel -->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="box">
                            <div class="img-box">
                                <img src="../images/1.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h4>UO Ben Arous</h4>
                                <p>Un projet exceptionnel qui a permis de renforcer notre collaboration et d’améliorer nos processus internes. Nous avons constaté une amélioration significative de la productivité.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box">
                            <div class="img-box">
                                <img src="../images/2.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h4>UO Séliana</h4>
                                <p>L'approche innovante et la gestion efficace des sessions ont vraiment transformé notre manière de travailler. Une excellente expérience !</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box">
                            <div class="img-box">
                                <img src="../images/4.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h4>UO Zaghouan</h4>
                                <p>Grâce à ce projet, nous avons gagné en transparence et en fluidité dans nos opérations. Une vraie valeur ajoutée pour notre équipe.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box">
                            <div class="img-box">
                                <img src="../images/3.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h4>UO Bizerte</h4>
                                <p>Nous sommes ravis des résultats obtenus. L’outil est intuitif et facile à utiliser, et l’accompagnement tout au long du projet a été irréprochable.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contrôles du carrousel -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <?php require_once "footer.php" ?>


</body>

</html>