
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




