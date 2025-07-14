<?php
    $listeObjets = getListeObjets();
    $listeCategorie=getCategorie();
    var_dump($listeObjets);

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
            <a href="model.php?page=ajouter&">Ajouter objet</a>
        </div>
    </form>

    </div>
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-dark text-white">
            <strong>Résultats</strong>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered mb-0 align-middle text-center">
                <thead class="table-light">
                    <tr>
                        <th>Nom</th>
                        <th>Objets</th>
                        <th>Catégories</th>
                        <th>Membres</th>
                        <th>Date de retour</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($listeObjets)) : ?>
                        <?php foreach ($listeObjets as $objet) { ?>
                            <tr>
                                <td><?= $objet['nom_objet'] ?></td>
                                <td><?= $objet['nom_categorie']?></td>
                                <td><?= $objet['nom_membre'] ?></td>
                                <td><?= $objet['date_retour']?></td>
                            </tr>
                        <?php } ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="3" class="text-muted">Aucun résultat trouvé</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>