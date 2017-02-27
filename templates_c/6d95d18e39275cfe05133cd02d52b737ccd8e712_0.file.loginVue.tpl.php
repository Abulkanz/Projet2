<?php
/* Smarty version 3.1.29, created on 2017-02-27 19:54:34
  from "C:\wamp64\www\Projet2zoo\vues\loginVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58b483fa55af56_60934244',
  'file_dependency' => 
  array (
    '6d95d18e39275cfe05133cd02d52b737ccd8e712' => 
    array (
      0 => 'C:\\wamp64\\www\\Projet2zoo\\vues\\loginVue.tpl',
      1 => 1488225270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b483fa55af56_60934244 ($_smarty_tpl) {
?>
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
                    <form method="POST" action="index.php">
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
</html><?php }
}
