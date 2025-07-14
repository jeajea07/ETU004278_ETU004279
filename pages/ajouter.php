<?php 




?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un objet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .preview-image {
            max-width: 100px;
            max-height: 100px;
            margin-right: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Ajouter un objet à prêter</h1>
        
        <?php if(isset($error)): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>
        
        <form method="POST" action="ajouter_objet.php" class="row g-3" enctype="multipart/form-data">
            <div class="col-md-6">
                <label for="nom" class="form-label">Nom de l'objet*</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            
            <div class="col-md-6">
                <label for="categorie" class="form-label">Catégorie*</label>
                <select class="form-select" id="categorie" name="categorie" required>
                    <option value="">Choisir une catégorie</option>
                    <?php foreach ($listeCategories as $categorie) { ?>
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>