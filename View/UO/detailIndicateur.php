<!DOCTYPE html>
<html>

<head>
    <title>Configurer Indicateur</title>
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

        /* main section */
        .main {
            width: 100%;
            height: 100vh;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('../images/admin2.png') center/cover no-repeat;
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

        .form-container button.btn {
            width: 100%;
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container button.btn:hover {
            background-color: #0056b3;
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
    <div class="main">
        <div>
            <h1 class="animate__animated animate__fadeInDown">Configurer Indicateur</h1>
            <p class="animate__animated animate__fadeInDown">
                Gérez les indicateurs de performance avec une configuration simple et intuitive.
            </p>
            <a href="#" class="btn">Voir plus</a>
        </div>
    </div>
    <section class="config-indicateur-section layout_padding mt-5" style="margin-top: 80px;margin-bottom: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Left Boxes -->
                    <?php require_once "../../Controller/responsable/configurerIndicateur.php"; ?>

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


</body>
<?php require_once "../includes/footer.php" ?>

</html>