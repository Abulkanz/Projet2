<?php
/* Smarty version 3.1.29, created on 2017-02-07 14:52:32
  from "C:\Wamp64\www\p2\vues\loginVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5899df30c80887_70897230',
  'file_dependency' => 
  array (
    '9f7ab1112eb9e0a2db62cec0c1e0bce9c093af34' => 
    array (
      0 => 'C:\\Wamp64\\www\\p2\\vues\\loginVue.tpl',
      1 => 1486474930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5899df30c80887_70897230 ($_smarty_tpl) {
?>
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
        <div id="accueil">
            <header>
                <div id="boiteLogo"><img id="logoAcc" src="img/logoSinges.png"></div>
            </header>
            <main>
                <div class="form">
                    <form method="POST" name="gestion">
                        <label><h1>BIENVENUE</h1></label>
                        <input type="text" placeholder="username" />
                        <input type="password" placeholder="password" />
                        <input type="hidden" name="gestion" value="accueil">
                        <input id="boutonCo" type="submit" value="login">
                        <p class="message"><a href="#">Mot de passe oublié ?</a></p>
                    </form>
                </div>
            </main>
        </div>  
    </body>
</html><?php }
}
