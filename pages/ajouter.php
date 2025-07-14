<?php
    $listeCategorie=getCategorie();
?>
<main>
    <div class="container mt-5">
        <h1 class="mb-4">Ajouter un objet à prêter</h1>
        
        <?php if(isset($error)): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>
        
        <form method="POST" action="pages/upload.php" class="row g-3" enctype="multipart/form-data">
            <div class="col-md-6">
                <label for="nom" class="form-label">Nom de l'objet*</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            
            <div class="col-md-6">
                <label for="categorie" class="form-label">Catégorie*</label>
                <select class="form-select" id="categorie" name="categorie" required>
                    <option value="">Choisir une catégorie</option>
                    <?php foreach ($listeCategorie as $categorie) { ?>
                    <option value="<?= $categorie['id_categorie'] ?>"><?= $categorie['nom_categorie'] ?></option>
                <?php } ?>
                </select>
            </div>
            
            <div class="upload">
                    <label for="fichier">Choisir un fichier :</label>
                    <input type="file" name="fichier" id="fichier" required>
                    <input type="submit" value="Uploader">
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Publier l'objet</button>
            </div>
        </form>
    </div>
    
</main>