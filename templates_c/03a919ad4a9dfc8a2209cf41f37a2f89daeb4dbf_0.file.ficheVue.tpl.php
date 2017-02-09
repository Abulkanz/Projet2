<?php
/* Smarty version 3.1.29, created on 2017-02-09 14:02:29
  from "C:\Wamp64\www\Projet2\vues\ficheVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589c7675b036b6_51664291',
  'file_dependency' => 
  array (
    '03a919ad4a9dfc8a2209cf41f37a2f89daeb4dbf' => 
    array (
      0 => 'C:\\Wamp64\\www\\Projet2\\vues\\ficheVue.tpl',
      1 => 1486647962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589c7675b036b6_51664291 ($_smarty_tpl) {
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
            </header>
            <div class="conteneurModules">
                <div class="blocModules">
                    <div class="tiers"><img class="iPortrait" src="img/imgFiches/babouinMale.png" alt=""/></div>
                    <div class="tiers"></div>
                    <div class="tiers"></div>
                </div>
                <div class="blocModules">
                    <div class="deuxTiers"></div>
                    <div class="tiers"></div>
                </div>
            </div>
    </body>
</html><?php }
}
