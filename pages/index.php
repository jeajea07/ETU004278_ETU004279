<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/CSS/style.css">
    <title>Document</title>
</head>
<body>
    <tbody>
    <nav>
        <div class="tete">
            <div class="logo"><img src="../assets/images/logo.png" alt="Logo" width="60px"></div>
            <div class="nom">Viby</div>
        </div>
    </nav>

    <div class="contenu">
        <div class="formulaire">
            <h1>Ha, te revoilà !</h1>
            <p>Nous sommes si heureux de te revoir !</p>
            <form action="../inc/verification.php" method="POST">
                <p><input class = "champ" type="email" name="mail" placeholder="Entrer votre adresse mail" required></p>
                <p><input class = "champ" type="password" name="pass" placeholder="Entrer votre mots de passe" required></p>
                <span style="color:red; font-weight:bold; font-size:12px; text-align:center;">
                    <?php
                        if(isset($_GET['echec'])){
                            echo 'Veuillez verifier votre mail ou mots de passe!';
                        }
                    ?>
                </span>
                <p><input id="connexion" type="submit" value="Connexion" required></p>
            </form>
            <p>Besoin d'un compte? <a id="inscription" href="inscription.php" > S'inscrire</a></p>
            
        </div>

        <div class="illustration">
            <img src="../assets/images/illu.png" alt="Illustration">
        </div>
    </div>

    <div class="foot">
            <ul>
                <li><a href="inscription.php">S'inscrire</a></li>
                <li><a href=".#">Télécharger Viby app</a></li>
                <li><a href="#">Coockies</a></li>
                <li><a href=".#">Aide</a></li>
                <li><a href="#">Paramètre</a></li>
                <li><a href="#">A propos</a></li>
                <li><a href="#">&copy; 2025 Réseaux sociaux</a></li>
            </ul>
    </div>

    </tbody>
    </body>
    </html>
