<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['categorie']) && isset($_POST['nom'])){
    $mail = $_SESSION['mail'];
    $nom = $_POST['nom'];
    $categorie = $_POST['categorie'];
    $membre = getMembreid($mail);
}

$uploadDir = __DIR__ . '/../assets/images/';
$maxSize = 2 * 1024 * 1024; // 2 Mo 
$allowedMimeTypes = ['image/jpeg', 'image/png', 'image/jpg']; 
 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['fichier'])) { 
    $file = $_FILES['fichier']; 
 
    if ($file['error'] !== UPLOAD_ERR_OK) { 
        die('Erreur lors de l’upload : ' . $file['error']); 
    } 
 
    if ($file['size'] > $maxSize) { 
        die('Le fichier est trop volumineux.'); 
    } 
 
    $finfo = finfo_open(FILEINFO_MIME_TYPE); 
    $mime = finfo_file($finfo, $file['tmp_name']); 
    finfo_close($finfo); 
 
    if (!in_array($mime, $allowedMimeTypes)) { 
        die('Type de fichier non autorisé : ' . $mime); 
    } 

    $originalName = pathinfo($file['name'], PATHINFO_FILENAME); 
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION); 
 
    $newName = $originalName . '_' . uniqid() . '.' . $extension; 
  
    if (move_uploaded_file($file['tmp_name'], $uploadDir . $newName)) { 
        $id = count(getListeObjets()) + 1;
        insert_image($id, $newName);
        insert_objet($id, $nom, $categorie, $membre);
        header('Location:../model.php?page=accueil');
        
    } else { 
        echo "Échec du déplacement du fichier."; 
    } 
} else { 
    echo "Aucun fichier reçu."; 
} 

?>