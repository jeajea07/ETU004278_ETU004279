<?php
    require('connexion.php');
    function insert_user($nom, $dtn, $genre, $mail,$ville, $pass,$image){
            $sql = "INSERT INTO membre(nom , date_naissance, genre, email, ville, mdp, image_profil) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')";
            $sqlf = sprintf($sql,$nom, $dtn, $genre, $mail,$ville, $pass,$image);
            //echo $sqlf;
            $resultats = mysqli_query(bddconnect() , $sqlf);
    }

    function getListeObjets(){
        $sql="SELECT * FROM v_liste_objets";
        $variable= mysqli_query(bddconnect(),$sql);
        //var_dump($variable);
        $result=array();
        while ($demande = mysqli_fetch_assoc($variable)) {
            $result[] = $demande;
        }
    
        return $result;
    }

    function getMembre($mail){
        $sql = "SELECT * FROM membre WHERE email = '%s'";
        $sqlf = sprintf($sql, $mail);
        $resultat = mysqli_query(bddconnect(), $sqlf);
        $resultf = mysqli_fetch_assoc($resultat);
        return $resultf; 
    }

    function getCategorie(){
        $sql="SELECT * FROM categorie_objet";
        $variable= mysqli_query(bddconnect(),$sql);
        //var_dump($variable);
        $result=array();
        while ($demande = mysqli_fetch_assoc($variable)) {
            $result[] = $demande;
        }
    
        return $result;
    }

    function getObjetCategorie($id){
        $sql="SELECT * FROM v_liste_objets WHERE id_categorie = '%s'";
        $sqlf=sprintf($sql, $id);
        $variable= mysqli_query(bddconnect(),$sqlf);
        //var_dump($variable);
        $result=array();
        while ($demande = mysqli_fetch_assoc($variable)) {
            $result[] = $demande;
        }
    
        return $result;
    }

?>