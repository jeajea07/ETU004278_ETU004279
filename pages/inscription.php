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
            <h1>Créer un compte</h1>
            <form action="../inc/creationbdd.php" method="POST">
                <p><input class="champ" type="text" name="nom" placeholder="Entrer votre nom"></p>
                <p><input class="champ" type="email" name="mail" placeholder="jeannie@gmail.com"></p>
                <p><input class="champ" type="password" name="pass" placeholder="13526mlkj"></p>
                <p><input class="champ" type="date" name="dtn" placeholder="yyyy/mm/jj"></p>
                <p><input id="connexion" type="submit" value="Continuer"></p>
            </form>
            
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
