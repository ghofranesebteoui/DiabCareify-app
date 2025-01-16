<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiabCareify</title>
    <link rel="icon" href="img4.png" type="image/png">
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


        .main {
            width: 100%;
            height: 100vh;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('bgImage.png') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }

        .main h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 1rem;
            margin-left: 20%;
        }

        .main p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            margin-left: 40%;
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
            margin-left: 20%;
        }

        .main .btn:hover {
            background-color: #fff;
            color: #000;
        }

        .navbar-brand img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .about_section {
            padding: 50px 0;
        }

        .img-box img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .detail-box {
            text-align: left;
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
            background: linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('form.png') center/cover no-repeat;
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
            /* Utiliser 'contain' pour afficher l'image complète sans la couper */
            object-position: center center;
            /* Centrer l'image */
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
            /* Dark blue for a classy feel */
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
            /* Light blue on hover for better contrast */
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
            /* Default dark color */
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
            /* Highlight social icons on hover */
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
            /* Ajuster la marge */
        }

        .footer_section .footer_content {
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php require_once "navGen.php" ?>
    <div class="main">
        <div>
            <h1>Bienvenue dans notre application de gestion du taux <br>des diabétiques et hypertendus dépistés <br> au stade de complication.</h1>
            <p>
                Notre plateforme aide les responsables et les unités opérationnelles à collecter, traiter et analyser les données liées au diabète. Elle simplifie la gestion des résultats et permet une analyse globale pour mieux comprendre et agir face aux défis du diabète en Tunisie.
            </p>

            <a href="#" class="btn">Voir plus</a>
        </div>
    </div>
    <!-- special section-->
    <section class="spcl_section layout_padding mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Left Boxes -->
                    <div class="detail_container">
                        <div class="detail-box">
                            <img src="analyse.jpg" alt="Analyse des Données" class="img-fluid mb-3" style="width: 80px; height: 80px;border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                            <h5>Analyse des Données</h5>
                            <p>Obtenez des statistiques précises sur le taux de diabète par unité opérationnelle à travers la Tunisie.</p>
                        </div>
                        <div class="detail-box">
                            <img src="prevention.jpg" alt="Prévention Ciblée" class="img-fluid mb-3" style="width: 80px; height: 80px;border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                            <h5>Prévention Ciblée</h5>
                            <p>Aidez les unités opérationnelles à planifier des actions efficaces pour réduire le taux de diabète.</p>
                        </div>
                        <div class="detail-box">
                            <img src="inter.png" alt="Visualisation Intuitive" class="img-fluid mb-3" style="width: 80px; height: 80px;border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                            <h5>Visualisation Intuitive</h5>
                            <p>Interprétez facilement les données grâce à des graphiques clairs et interactifs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 ml-auto">
                    <!-- Right Image -->
                    <div class="img-box">
                        <img src="diabete.png" alt="" style="width: 100%; height: calc(100% - 20px); object-fit: cover; border-radius: 10px;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section-->
    <section class="about_section layout_padding-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="about.png" alt="" class="img-fluid">
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
    <!-- contact section-->
    <section class="contact_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Saisir vos informations</h2>
            </div>
            <div class="">
                <div class="row">
                    <div class="col-md-7 mx-auto">
                        <form action="">
                            <div class="contact_form-container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Nom de la région">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="number" placeholder="Patients au stade de complications">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" placeholder="Patients chroniques détectés">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="date" placeholder="Date du post de données">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="time" placeholder="Heure du post de données">
                                    </div>
                                </div>
                                <div class="btn_box">
                                    <button type="submit">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- client section-->
    <section class="client_section layout_padding mt-5">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>AVIS DE NOS UNITÉS OPÉRATIONNELLES</h2>
            </div>
            <div class="carousel slide" id="carouselExampleControls" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="box">
                            <div class="img-box">
                                <img src="1.png" alt="">
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
                                <img src="2.png" alt="">
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
                                <img src="4.png" alt="">
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
                                <img src="3.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h4>UO Bizerte</h4>
                                <p>Nous sommes ravis des résultats obtenus. L’outil est intuitif et facile à utiliser, et l’accompagnement tout au long du projet a été irréprochable.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn-box">
                    <a href="#carouselExampleControls" class="carousel-control-prev" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a href="#carouselExampleControls" class="carousel-control-next" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <!-- Contenu principal à gauche -->
                    <div class="footer_content">
                        <h4>Contact</h4>
                        <div class="contact_link_box">
                            <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i><span>Lieu</span></a><br>
                            <a href=""><i class="fa fa-phone" aria-hidden="true"></i><span>Appeler +216 12345678</span></a><br>
                            <a href=""><i class="fa fa-envelope" aria-hidden="true"></i><span>diabcareify@gmail.com</span></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 footer-col">
                    <!-- Contenu principal au centre -->
                    <div class="footer_content">
                        <a href="" class="footer-logo">DiabCareify</a>
                        <p>Atteindre à....</p>
                        <div class="footer_social">
                            <a href=""><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
                            <a href=""><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
                            <a href=""><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 footer-col">
                    <!-- Contenu principal à droite -->
                    <div class="footer_content">
                        <h4>Liens utiles</h4>
                        <ul class="footer-links">
                            <li><a href="#">À propos de nous</a></li>
                            <li><a href="#">Politique de confidentialité</a></li>
                            <li><a href="#">Conditions d'utilisation</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>
                    <div class="footer_info">
                        <p>&copy; <span id="displayYear"></span> Tous droits réservés par <a href="#">DiabCareify</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>