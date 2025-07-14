<?php
    session_start();
    $bdd = mysqli_connect('localhost', 'ETU004279', 'TqzstuXv', 'db_s2_ETU004279');
    //$bdd = mysqli_connect('localhost', 'root', '', 'Objets');

    if(isset( $_POST['pass']) && isset($_POST['mail'])){
        $pass = $_POST['pass'];
        $mail = $_POST['mail'];

        $sql = "SELECT * FROM membre WHERE mdp = '%s' AND email = '%s'";
        $sqlf = sprintf($sql, $pass, $mail);
        $resultats = mysqli_query($bdd , $sqlf);
        //echo $sqlf;
        $donnees = mysqli_fetch_assoc($resultats);
        //var_dump($donnees);
        if($donnees){
            $_SESSION['mail'] = $mail;
            header("Location: ../model.php?page=accueil");
        }
        else{
            header("Location:../pages/index.php?echec=1");
        }
    }
?>