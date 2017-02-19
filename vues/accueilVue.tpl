<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style/styles.css" rel="stylesheet">
        <title>Projet2</title>
    </head>
    <body>
        <div class="conteneur noOverF">
            <img class="logo" src="img/logoSinges.png">
            <header>
                <ul>
                    <li>
                        <form method="POST" name="gestion">
                            <input type="hidden" name="gestion" value="accueil">
                            <input class="lienNav" type="submit" value="Accueil">
                        </form>
                    </li>
                    <li>
                        <form method="POST" name="gestion">
                            <input type="hidden" name="gestion" value="animaux">
                            <input class="lienNav" type="submit" value="Animaux">
                        </form>
                    </li>
                    <li>
                        <form method="POST" name="gestion">
                            <input type="hidden" name="gestion" value="login">
                            <input class="lienNav" type="submit" value="Carte">
                        </form>
                    </li>
                    <li><input class="lienNav" type="submit" name="lignes_commande" value="Statistiques"></li>
                    <img class="avatar" src="img/avatarTest.png" alt=""/>
                </ul>

                <!--ul>
                    <li><a href="page1.html">Accueil</a></li>
                    <li><a href="page2.html">Animaux</a></li>
                    <li><a href="#">Carte</a></li>
                    <li><a href="#">Statistiques</a></li>
                </ul-->
            </header>
            <div class="conteneurModules">
                <div class="blocModules">
                    <div class="module"></div>
                    <div class="module"></div>
                    <div class="module"></div>
                    <div class="module"></div>
                </div>
                <div class="blocModules">
                    <div class="module"></div>
                    <div class="module"></div>
                    <div class="module"></div>
                    <div class="module"></div>
                </div>
            </div>
        </div>
    </body>
</html>