<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="style/styles.css" rel="stylesheet">
        <title>Projet2</title>
    </head>
    <body>
        <div id="accueil" class="noOverF">
            <header>
                <div id="boiteLogo"><img id="logoAcc" src="img/logoSinges.png"></div>
            </header>
            <main>
                <div class="formLogin">
                    <form method="POST" name="gestion">
                        <label><h1>BIENVENUE</h1></label>
                        <input type="hidden" name="gestion" value="login">
                        <input type="hidden" name="action" value="login">
                        <input type="text" id="identifiant" name="identifiant" value="" placeholder="username" />
                        <input type="password" id="password" name="password" value="" placeholder="password" />
                        <input id="boutonCo" type="submit" name="login" value="Se connecter">
                        <p class="message"><a href="#">Mot de passe oublié ?</a></p>
                    </form>
                </div>
            </main>
        </div>  
    </body>
</html>