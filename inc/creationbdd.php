<?php
    require('fonctions.php');
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if(isset($_POST['nom']) && isset($_POST['dtn']) && isset($_POST['pass'])&& isset($_POST['ville']) && isset($_POST['genre'])&& isset($_POST['mail'])){
            $nom = $_POST['nom'];
            $dtn = $_POST['dtn'];
            $pass = $_POST['pass'];
            $mail = $_POST['mail'];
            $ville = $_POST['ville'];
            $genre= $_POST['genre'];
            $image = 'assets/images/icones/profil.png';
            $result = insert_user($nom, $dtn, $genre, $mail,$ville, $pass,$image);
            header("Location:../pages/index.php");
    }

?>