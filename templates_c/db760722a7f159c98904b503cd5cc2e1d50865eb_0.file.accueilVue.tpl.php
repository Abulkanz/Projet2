<?php
/* Smarty version 3.1.29, created on 2017-02-27 17:57:32
  from "C:\Wamp64\www\Projet2\vues\accueilVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58b4688c1e0bf2_52010754',
  'file_dependency' => 
  array (
    'db760722a7f159c98904b503cd5cc2e1d50865eb' => 
    array (
      0 => 'C:\\Wamp64\\www\\Projet2\\vues\\accueilVue.tpl',
      1 => 1488218244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b4688c1e0bf2_52010754 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="style/styles.css" rel="stylesheet">
        <link href="style/dropdown.css" rel="stylesheet">
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
                    <li class="dropdown">
                        <span class="dropbtn" onclick="displayMenuUser()"><img class="avatar"  onclick="displayMenuUser()" src="img/userlogof.png"><span class="username"  onclick="displayMenuUser()"><?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
</span></span>
                        <div class="dropdown-content" id="menuUser">
                            <form method="POST" name="gestion">
                                <button class="lienNav">
                                    <input type="hidden" name="gestion" value="animaux">
                                    <img src="http://epnet.epfl.ch/files/content/sites/network/files/Website%20Icon/Setting%20VF1.png" style="width:20px; margin-right:5px">Paramètres
                                </button>
                            </form>
                            <form method="POST" name="gestion">
                                <button class="lienNav"><img src="http://img.pngget.com/clip2/z4oajxtcanh.png" style="width:15px; margin-right:5px">Déconnexion</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </header>
            <div class="contGraphs">
                <div class="contGraphAccueil">
                    <canvas id="tailleEsp"></canvas>
                </div>
                <div class="contGraphAccueil">
                    <canvas id="poidsEsp"></canvas>
                </div>
                <div class="contGraphAccueil"></div>
                <div class="contGraphAccueil"></div>


            </div>

            <?php echo $_smarty_tpl->tpl_vars['js']->value;?>

    </body>
</html><?php }
}
