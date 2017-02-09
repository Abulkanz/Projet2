<?php
/* Smarty version 3.1.29, created on 2017-02-09 08:19:05
  from "C:\Wamp64\www\Projet2\vues\accueilVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589c25f9033528_72174650',
  'file_dependency' => 
  array (
    'db760722a7f159c98904b503cd5cc2e1d50865eb' => 
    array (
      0 => 'C:\\Wamp64\\www\\Projet2\\vues\\accueilVue.tpl',
      1 => 1486483301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589c25f9033528_72174650 ($_smarty_tpl) {
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
        <div class="conteneur noOverF">
            <img class="logo" src="img/logoSinges.png">
            <header>
                <form method="POST" name="gestion">
                    <ul>
                        <li>
                            <input type="hidden" name="gestion" value="accueil">
                            <input class="lienNav" type="submit" value="Accueil">
                        </li>
                        <li>
                            <input type="hidden" name="gestion" value="animaux">
                            <input class="lienNav" type="submit" value="Animaux">
                        </li>
                        <li><input class="lienNav" type="submit" name="commandes" value="Carte"></li>
                        <li><input class="lienNav" type="submit" name="lignes_commande" value="Statistiques"></li>
                        <img class="avatar" src="img/avatarTest.png" alt=""/>
                    </ul>
                </form>
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
</html><?php }
}
