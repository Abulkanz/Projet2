<?php
/* Smarty version 3.1.29, created on 2017-02-09 08:19:54
  from "C:\Wamp64\www\Projet2\vues\animauxVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589c262adc0755_01933738',
  'file_dependency' => 
  array (
    '9f1673bb4cccb05cc26be98795ac7a955a0b6f05' => 
    array (
      0 => 'C:\\Wamp64\\www\\Projet2\\vues\\animauxVue.tpl',
      1 => 1486628389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589c262adc0755_01933738 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style/styles.css" rel="stylesheet">
        <title>Ouhouhin-Animaux</title>
    </head>
    <body>
        <div class="conteneur">
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
            <div class="conteneurTable">
                <table class="tAnimaux">
                    <tr>
                        <th>Photo</th>
                        <th>Espèce</th>
                        <th>Prénom</th>
                        <th>Sexe</th>
                        <th>Poids</th>
                        <th>Taille</th>
                        <th>Date de naissance</th>
                        <th>Age</th>
                        <th>Lieu de naissance</th>
                        <th>Statut</th>
                    </tr>
                    <tr>
                        <td><img class="vignLienFiche" src="img/photos/babouin.jpg" alt=""/></a></td>
                        <td>Babouin</td>
                        <td>Patio</td>
                        <td>Male</td>
                        <td>33 kg</td>
                        <td>102 cm</td>
                        <td>07/05/07</td>
                        <td>9 ans</td>
                        <td>Ethiopie</td>
                        <td>Prêté</td>
                    </tr>
                </table>
            </div>
        </div>  
    </body>
</html><?php }
}
