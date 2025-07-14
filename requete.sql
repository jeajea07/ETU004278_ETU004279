CREATE DATABASE Objets;
USE Objets;
-- Table des membres
CREATE TABLE membre (
    id_membre INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    date_naissance DATE,
    genre ENUM('H', 'F'),
    email VARCHAR(150),
    ville VARCHAR(100),
    mdp VARCHAR(255),
    image_profil VARCHAR(255)
);

-- Table des catégories d'objet
CREATE TABLE categorie_objet (
    id_categorie INT AUTO_INCREMENT PRIMARY KEY,
    nom_categorie VARCHAR(100) NOT NULL
);

-- Table des objets
CREATE TABLE objet (
    id_objet INT AUTO_INCREMENT PRIMARY KEY,
    nom_objet VARCHAR(100),
    id_categorie INT,
    id_membre INT,
    FOREIGN KEY (id_categorie) REFERENCES categorie_objet(id_categorie),
    FOREIGN KEY (id_membre) REFERENCES membre(id_membre) 
);

-- Table des images d'objet
CREATE TABLE images_objet (
    id_image INT AUTO_INCREMENT PRIMARY KEY,
    id_objet INT,
    nom_image VARCHAR(255) ,
    FOREIGN KEY (id_objet) REFERENCES objet(id_objet)
);

-- Table des emprunts
CREATE TABLE emprunt (
    id_emprunt INT AUTO_INCREMENT PRIMARY KEY,
    id_objet INT,
    id_membre INT,
    date_emprunt DATE,
    date_retour DATE,
    FOREIGN KEY (id_objet) REFERENCES objet(id_objet),
    FOREIGN KEY (id_membre) REFERENCES membre(id_membre) 
);


/*OBJETS*/
CREATE OR REPLACE VIEW v_liste_objets AS
SELECT 
    o.id_objet,
    o.nom_objet,
    c.id_categorie,
    c.nom_categorie,
    (
        SELECT nom_image 
        FROM images_objet i 
        WHERE i.id_objet = o.id_objet 
        LIMIT 1
    ) AS nom_image,
    e.id_emprunt,
    e.date_emprunt,
    e.date_retour,
    m.id_membre,
    m.nom AS nom_membre
FROM objet o
JOIN categorie_objet c ON c.id_categorie = o.id_categorie
LEFT JOIN emprunt e ON o.id_objet = e.id_objet
LEFT JOIN membre m ON e.id_membre = m.id_membre;


CREATE OR REPLACE VIEW v_objets_categories AS
SELECT 
    o.id_objet,
    o.nom_objet,
    c.id_categorie,
    c.nom_categorie,
    o.id_membre
FROM objet o
JOIN categorie_objet c ON o.id_categorie = c.id_categorie
GROUP BY c.nom_categorie;

