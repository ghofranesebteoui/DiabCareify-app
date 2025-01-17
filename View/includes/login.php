<?php
session_start();
if (isset($_GET['etat'])) {
    $etat = $_GET['etat'];
    switch ($etat) {
        case 1:
            echo "<script>alert('Merci pour votre visite à la prochaine fois');</script>";
            break;
        case 2:
            echo "<script>alert('Vous n\'etes pas autorisés');</script>";
            break;
        case 3:
            echo "<script>alert('Login et/ou mot de passe sont incorrects');</script>";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/img4.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar-brand img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .bg-primary {
            background-color: rgb(59, 113, 202) !important;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }

        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-primary:hover {
            background-color: #004494;
            border-color: #004494;
        }

        .form-outline {
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
    </style>
</head>

<body>
    <?php require_once "navLogin.php" ?>

    <section class="vh-100">
        <div class="container h-custom d-flex align-items-center justify-content-center">
            <div class="row w-100">
                <div class="col-md-6 text-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div class="form-container w-100">
                        <h3 class="text-center mb-4">Sign in</h3>
                        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                            <div class="d-flex justify-content-center mb-4">
                                <button type="button" class="btn btn-primary btn-floating mx-2">
                                    <i class="fab fa-facebook-f"></i>
                                </button>
                                <button type="button" class="btn btn-primary btn-floating mx-2">
                                    <i class="fab fa-twitter"></i>
                                </button>
                                <button type="button" class="btn btn-primary btn-floating mx-2">
                                    <i class="fab fa-linkedin-in"></i>
                                </button>
                            </div>

                            <div class="divider d-flex align-items-center my-4">
                                <span class="text-muted mx-3">Ou</span>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline">
                                <input type="text" name="login" id="form3Example3" class="form-control" placeholder="Adresse email" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline">
                                <input type="password" name="pw" id="form3Example4" class="form-control" placeholder="Mot de passe" />
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="form2Example3" />
                                    <label class="form-check-label" for="form2Example3"> Se souvenir de moi </label>
                                </div>
                                <a href="#!" class="text-body">Mot de passe oublié?</a>
                            </div>

                            <div class="text-center">
                                <button type="submit" name="ok" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            </div>

                            <p class="text-center mt-3">Vous n'avez pas un compte? <a href="#!" class="link-danger">Inscrivez-vous</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once "footer.php";


    if (isset($_POST['ok'])) {
        $login = htmlspecialchars($_POST['login']);
        $password = htmlspecialchars($_POST['pw']);
        if ($login === "admin" && md5($password) === "0192023a7bbd73250516f069df18b500") {
            $_SESSION['login'] = $login;
            $_SESSION['pw'] = $password;
            header("Location: responsable/indexR.php");
            exit;
        }
        if ($login === "user" && md5($password) === "6ad14ba9986e3615423dfca256d04e3f") {
            $_SESSION['login'] = $login;
            $_SESSION['pw'] = $password;
            header("Location: UO/indexUO.php");
            exit;
        }
        echo "<script>alert('Login et/ou mot de passe sont incorrects');</script>";
    }
    ?>
</body>

</html>