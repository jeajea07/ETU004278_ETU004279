<?php
    $listeObjets = getListeObjets();
    $listeCategorie=getCategorie();

    if (isset($_GET['categorie']) && isset($_GET['nom'])) {
        $listeObjets = recherche($_GET['categorie'], $_GET['nom']);
    } 
?>
<main>
    <div class="formulaire">
        <form class="row g-3 mb-5 bg-light p-3 rounded shadow-sm" action="model.php" method="GET">
        <input type="hidden" name="page" value="accueil">

        <div class="col-md-3">
            <label for="departement" class="form-label">Catégories</label>
            <select id="departement" class="form-select" name="categorie">
                <option value="">Choisir...</option>
                <?php foreach ($listeCategorie as $categorie) { ?>
                    <option value="<?= $categorie['id_categorie'] ?>"><?= $categorie['nom_categorie'] ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="col-md-3">
            <label for="nom" class="form-label">Nom de l'objet</label>
            <input type="text" id="nom" class="form-control" name="nom" placeholder="Nom">
        </div>

        <div class="col-md-2 d-flex align-items-end">
            <button type="submit" class="btn btn-primary w-100">
                <i class="bi bi-search me-1"></i> Rechercher
            </button>
        </div>

        <div class="mt-4 mb-4">
            <a href="model.php?page=ajouter" class="btn btn-primary">
                <i class="bi bi-plus-circle me-1"></i> Ajouter un objet
            </a>
        </div>

    </form>

    </div>
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-dark text-white">
            <strong>Résultats</strong>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-4">
            <?php if (!empty($listeObjets)) : ?>
                <?php foreach ($listeObjets as $objet) { ?>
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <img src="assets/images/<?= htmlspecialchars($objet['nom_image']) ?>" 
                                class="card-img-top object-fit-cover" 
                                alt="<?= htmlspecialchars($objet['nom_image']) ?>" 
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($objet['nom_objet']) ?></h5>
                                <p class="card-text mb-1"><strong>Catégorie :</strong> <?= htmlspecialchars($objet['nom_categorie']) ?></p>
                                <p class="card-text mb-1"><strong>Propriétaire :</strong> <?= htmlspecialchars($objet['nom_membre']) ?></p>
                                <p class="card-text"><strong>Retour :</strong> <?= htmlspecialchars($objet['date_retour']) ?></p>
                                <a href="#" class="btn btn-outline-success btn-sm mt-2">Emprunter</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php else : ?>
                <div class="col-12 text-center text-muted">
                    Aucun résultat trouvé.
                </div>
            <?php endif; ?>
        </div>
        </div>
    </div>
</main>