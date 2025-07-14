<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Connexion - Viby</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Ton style personnalisé -->
  <link rel="stylesheet" href="../assets/CSS/style.css" />
</head>
<body class="bg-light">

  <!-- Barre de navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container d-flex align-items-center">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="../assets/images/logo.png" alt="Logo" width="50" class="me-2" />
        <span class="fs-4">Viby</span>
      </a>
    </div>
  </nav>

  <!-- Contenu principal -->
  <div class="container mt-5">
    <div class="row justify-content-center align-items-center">
      <!-- Formulaire -->
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-body">
            <h1 class="card-title text-center">Ha, te revoilà !</h1>
            <p class="text-center">Nous sommes si heureux de te revoir !</p>

            <form action="../inc/verification.php" method="POST">
              <div class="mb-3">
                <input class="form-control" type="email" name="mail" placeholder="Entrer votre adresse mail" required />
              </div>

              <div class="mb-3">
                <input class="form-control" type="password" name="pass" placeholder="Entrer votre mot de passe" required />
              </div>

              <?php if (isset($_GET['echec'])): ?>
                <div class="text-danger text-center mb-3 fw-bold" style="font-size: 13px;">
                  Veuillez vérifier votre mail ou mot de passe !
                </div>
              <?php endif; ?>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Connexion</button>
              </div>
            </form>

            <p class="text-center mt-3">
              Besoin d'un compte ?
              <a href="model.php?page=inscription" class="text-decoration-none text-primary fw-semibold">S'inscrire</a>
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <footer class="bg-dark text-white mt-5 py-3">
    <div class="container text-center">
      <ul class="list-inline mb-2">
        <li class="list-inline-item"><a href="inscription.php" class="text-white text-decoration-none">S'inscrire</a></li>
        <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Télécharger Viby app</a></li>
        <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Cookies</a></li>
        <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Aide</a></li>
        <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Paramètre</a></li>
        <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">À propos</a></li>
      </ul>
      <small>&copy; 2025 Réseaux sociaux - Viby</small>
    </div>
  </footer>

</body>
</html>
