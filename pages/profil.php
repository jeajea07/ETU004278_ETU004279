<?php
if (isset($_GET['mail']) && isset($_GET['id'])) {
    $mail = $_GET['mail'];
    $membreActuel = getMembre($mail);
    $listeObjets = getObjetCategorie($_GET['id']);
}
?>
<main>
    <div class="card mb-4 shadow-sm">
        <div class="card-body d-flex align-items-center">
            <img src="assets/images/<?= htmlspecialchars($membreActuel['image_profil']) ?>" 
                 alt="Photo de profil" 
                 class="rounded-circle me-4" 
                 width="100" 
                 height="100">
            <div>
                <h4 class="mb-1"><?= htmlspecialchars($membreActuel['nom']) ?></h4>
                <p class="mb-0 text-muted">Naissance : <?= htmlspecialchars($membreActuel['date_naissance']) ?></p>
                <p class="mb-0 text-muted">Genre : <?= htmlspecialchars($membreActuel['genre']) ?></p>
                <p class="mb-0 text-muted">Ville : <?= htmlspecialchars($membreActuel['ville']) ?></p>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title mb-3">Objets du membre</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>Objet</th>
                            <th>Catégorie</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($listeObjets)) : ?>
                            <?php foreach ($listeObjets as $objet) : ?>
                                <tr>
                                    <td><?= htmlspecialchars($objet['nom_objet']) ?></td>
                                    <td><?= htmlspecialchars($objet['nom_categorie']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="2" class="text-center text-muted">Aucun objet trouvé.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>
 