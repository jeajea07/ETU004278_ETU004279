<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Créer un compte</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>

<body class="bg-light">

  <!-- Barre de navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="../assets/images/logo.png" alt="Logo" width="40" class="me-2">
        <span>Viby</span>
      </a>
    </div>
  </nav>

  <!-- Contenu principal -->
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h1 class="card-title text-center mb-4">Créer un compte</h1>
            <form action="../inc/creationbdd.php" method="POST">
              
              <div class="mb-3">
                <input class="form-control" type="text" name="nom" placeholder="Entrer votre nom" required>
              </div>

              <div class="mb-3">
                <input class="form-control" type="email" name="mail" placeholder="jeannie@gmail.com" required>
              </div>

              <div class="mb-3">
                <input class="form-control" type="text" name="ville" placeholder="Entrer votre ville" required>
              </div>

              <div class="mb-3">
                <label class="form-label d-block mb-2">Genre</label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="genre" value="H" id="masculin" required>
                  <label class="form-check-label" for="masculin">Masculin</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="genre" value="F" id="feminin">
                  <label class="form-check-label" for="feminin">Féminin</label>
                </div>
              </div>

              <div class="mb-3">
                <input class="form-control" type="password" name="pass" placeholder="Mot de passe" required>
              </div>

              <div class="mb-3">
                <input class="form-control" type="date" name="dtn" required>
              </div>

              <div class="d-grid">
                <input class="btn btn-primary" type="submit" value="Continuer">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pied de page -->
  <footer class="mt-5 bg-dark text-white py-3">
  1
  
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

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
