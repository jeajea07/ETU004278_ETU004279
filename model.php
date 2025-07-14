<?php
    session_start();
    require('inc/fonctions.php');

    $mail = $_SESSION['mail'];
    $membreActuel = getMembre($mail);
    //var_dump( $membreActuel);
     //echo $membreActuel['image_profil'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <title>Site Immobilier</title>
</head>

<body>
    <!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Ma Bibliothèque</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <li class="nav-item">
                <a class="nav-link active" href="#">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Objets</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Catégories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Membres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Connexion</a>
            </li>
            </ul>
        </div>
        </div>
        <div class="mem">
            <p>

                <img src=" <?php echo $membre['image_profil']?>" alt="">
               
            </p>
        </div>
    </nav>
</header>
  

    <?php
        
        ini_set("display_errors", "1");
        error_reporting(E_ALL);
        if(isset($_GET['page'])){
           include('pages/'.trim($_GET['page']).'.php');
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>