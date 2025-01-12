<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="./indexR.php"><i class="fa-solid fa-user-tie"></i> Espace Responsable</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="./indexR.php"><i class="fa-solid fa-house"></i> Accueil
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-bars"></i> Menu</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="../../view/responsable/creerIndicateur.php">Créer un Indicateur</a>
                        <a class="dropdown-item" href="../../view/responsable/ajouterProgramme.php">Ajouter un Programme</a>
                        <a class="dropdown-item" href="../../view/responsable/ajouterUO.php">Ajouter une Unité Opérationnelle</a>
                        <a class="dropdown-item" href="../../view/responsable/supprimerUO.php">Supprimer une Unité Opérationnelle</a>
                        <a class="dropdown-item" href="../../view/responsable/partagerIndicateur.php">Partager un Indicateur</a>
                        <a class="dropdown-item" href="../../view/responsable/analyserResultats.php">Analyser les Résultats</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../login.php"><i class="fas fa-sign-in"></i> Connexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php"><i class="fas fa-sign-out"></i> Déconnexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>