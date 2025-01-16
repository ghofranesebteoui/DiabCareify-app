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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login</title>
    <style>
        body {
            background-color: #f8f9fa;
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

        .footer {
            margin-top: 5px;
            margin-bottom: 5px;
            background-color: #0056b3;
            color: white;
            padding: 20px 0;
        }

        .footer a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
        }

        .footer a:hover {
            color: #004494;
            text-decoration: underline;
        }
    </style>
</head>

<body>
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

    <footer class="footer text-center">
        <div class="footer d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2025. All rights reserved.
            </div>
            <!-- Right -->
            <div>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>

    </footer>
    <?php
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