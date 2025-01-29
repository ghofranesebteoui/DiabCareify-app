<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace UO</title>
    <link rel="icon" href="../images/img4.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Vendor CSS Files -->
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
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
        background: linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('../images/user.png') center/cover no-repeat;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        /* Aligne le contenu à gauche */
        text-align: center;
        /* Alignement du texte à gauche */
        color: #fff;
        padding: 0 5%;
        /* Ajoute un padding pour éviter que le contenu ne touche complètement le bord */
    }

    .main h1 {
        font-size: 30px;
        font-weight: bold;
        margin-top: -3rem;
        margin-bottom: 50px;
        padding-bottom: 20px;
        position: relative;
    }

    .main h1::before {
        content: "";
        position: absolute;
        display: block;
        width: 120px;
        height: 1px;
        background: #ddd;
        bottom: -10px;
        /* Laisse un espace sous le trait */
        left: 50%;
        /* Aligne le trait à gauche */
    }

    .main .btn {
        background-color: transparent;
        color: #fff;
        border: 2px solid #fff;
        padding: 10px 20px;
        font-size: 1rem;
        border-radius: 25px;
        transition: all 0.3s ease;
        /* Espacement entre le bouton et le titre */
        margin-left: 15%;
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
</style>

<body>
    <?php require_once "nav.php" ?>
    <div class="main">
        <div>
            <h1 class="animate__animated animate__fadeInDown">Bienvenue dans l'espace UO de notre application <br>de gestion du taux des diabétiques et hypertendus dépistés <br> au stade de complication.</h1>
            <a href="#" class="btn">Voir plus</a>
        </div>
    </div>
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

    <?php require_once "../includes/footer.php" ?>
</body>

</html>