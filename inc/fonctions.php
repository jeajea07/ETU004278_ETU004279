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
        $sql="SELECT * FROM v_objets_categories WHERE id_membre = '%s'";
        $sqlf = sprintf($sql, $id);
        $variable= mysqli_query(bddconnect(),$sql);
        //var_dump($variable);
        $result=array();
        while ($demande = mysqli_fetch_assoc($variable)) {
            $result[] = $demande;
        }
    
        return $result;
    }

    function recherche($id, $nom){
        $sql="SELECT * FROM v_liste_objets WHERE 1=1";
        if (!empty($id)) {
            $nom = mysqli_real_escape_string(bddconnect(), $id);
            $sql .= " AND id_objet = $id";
        }
        if (!empty($nom)) {
            $nom = mysqli_real_escape_string(bddconnect(), $nom);
            $sql .= " AND (nom_objet LIKE '%$nom%')";
        }

        $result = mysqli_query(bddconnect(), $sql);
        $resultf = array();
        while ($employee = mysqli_fetch_assoc($result)) {
            $resultf[] = $employee;
        }
        return $resultf;
    }

    function insert_image($id, $image){
            $sql = "INSERT INTO images_objet(id_object, nom_images) VALUES ('%s', '%s')";
            $sqlf = sprintf($sql,$id,$image);
            //echo $sqlf;
            $resultats = mysqli_query(bddconnect() , $sqlf);
    }

    function insert_objet($id, $nom, $categorie, $membre){
            $sql = "INSERT INTO objet(id_objet , nom_objet , id_categorie, id_membre) VALUES ('%s', '%s', '%s','%s')";
            $sqlf = sprintf($sql,$id, $nom, $categorie, $membre);
            //echo $sqlf;
            $resultats = mysqli_query(bddconnect() , $sqlf);
    }

    function getMembreid($mail){
        $sql = "SELECT id_membre FROM membre WHERE mail = '%s'";
        $sqlf = sprintf($sql,$mail);;
        $resultat = mysqli_query(bddconnect() , $sqlf);
        $resultf = mysqli_fetch_assoc($resultat);
        return $resultf; 
    }

?>