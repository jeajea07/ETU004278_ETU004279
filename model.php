<?php
    session_start();
    require('inc/fonctions.php');

    $mail = $_SESSION['mail'];
    $membreActuel = getMembre($mail);
    ini_set("display_errors", "1");
    error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/CSS/style.css">
    
    <title>Site Immobilier</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <i class="bi bi-book-half me-2"></i> Bibliothèque Communautaire
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="#">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Objets</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Catégories</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Membres</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/index.php">Déconnexion</a></li>
                    </ul>
                </div>

                <div class="ms-3 d-none d-lg-block">
                    <a href="pages/profil.php?mail=".$membreActuel['idmembre']><img src="assets/images/<?php echo $membreActuel['image_profil']?>" alt="profil" class="rounded-circle" width="40" height="40"></a>
                </div>

            </div>
        </nav>
    </header>

    <main class="container mt-4">
         <?php
            ini_set("display_errors", "1");
            error_reporting(E_ALL);
            if(isset($_GET['page'])){
            include('pages/'.trim($_GET['page']).'.php');
            }
        ?>
    </main>

      <footer class="mt-5 bg-dark text-white py-3">
    <div class="container text-center">
      <ul class="list-inline mb-2">
        <li class="list-inline-item"><a class="text-white text-decoration-none" href="inscription.php">S'inscrire</a></li>
        <li class="list-inline-item"><a class="text-white text-decoration-none" href="#">Télécharger l'app</a></li>
        <li class="list-inline-item"><a class="text-white text-decoration-none" href="#">Cookies</a></li>
        <li class="list-inline-item"><a class="text-white text-decoration-none" href="#">Aide</a></li>
        <li class="list-inline-item"><a class="text-white text-decoration-none" href="#">Paramètre</a></li>
        <li class="list-inline-item"><a class="text-white text-decoration-none" href="#">À propos</a></li>
      </ul>
      <small>&copy; 2025 Réseaux sociaux - Viby</small>
    </div>
  </footer>

    </body>


</html>
