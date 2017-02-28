<?php
/* Smarty version 3.1.29, created on 2017-02-28 17:53:32
  from "C:\wamp64\www\Projet2zoo\vues\animauxVueFiche.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58b5b91cba2d97_01661783',
  'file_dependency' => 
  array (
    'e21fbc7556a988eb34d306ea45229db9bee69fd8' => 
    array (
      0 => 'C:\\wamp64\\www\\Projet2zoo\\vues\\animauxVueFiche.tpl',
      1 => 1488302509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b5b91cba2d97_01661783 ($_smarty_tpl) {
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
                            <input type="hidden" name="gestion" value="carte">
                            <input class="lienNav" type="submit" value="Carte">
                        </form>
                    </li>
                     <li>
                        <form method="POST" name="gestion">
                            <input type="hidden" name="gestion" value="statistiques">
                            <input class="lienNav" type="submit" value="Statistiques">
                        </form>
                    </li>
                     <li>
                            <form method="POST" action="index.php">
                                <input type="text" name="objRech" placeholder="Rechercher">
                                <input type="hidden" name="gestion" value="animaux">
                                <input type="hidden" name="action" value="rechercher">
                                <input type="submit" name="rechAnimal" value="->">
                                <label for="tri">Trier par</label>
                                <select id="tri" name="selection">
                                    <option selected="selected" value="prenomAnimal">Prénom</option>
                                    <option value="nomEspece">Espèce</option>
                                    <option value="Sexe">Sexe</option>
                                    <option value="Age">Age</option>
                                    <option value="StatutA">Statut</option>
                                </select>
                            </form>
                    </li>
                    <li class="dropdown">
                        <span class="dropbtn" onclick="displayMenuUser()"><img class="avatar"  onclick="displayMenuUser()" src="img/userlogof.png"><span class="username"  onclick="displayMenuUser()"><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</span></span>
                        <div class="dropdown-content" id="menuUser">
                            <form method="POST" name="gestion">
                                <button class="lienNav">
                                    <input type="hidden" name="gestion" value="profil">
                                    <input type="hidden" name="action" value="profil">
                                    <input type="hidden" name="identifiant" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
">
                                    <img src="img/userlogof.png" style="width:20px; margin-right:5px">Profil
                                </button>
                            </form>
                            <form method="POST" name="gestion">
                                <button class="lienNav">
                                    <input type="hidden" name="gestion" value="aide">
                                    <img src="img/icone_aide.png" style="width:20px; margin-right:5px">Aide
                                </button>
                            </form>
                            <form method="POST" name="gestion">
                                 <button class="lienNav">
                                    <input type="hidden" name="gestion" value="accueil">
                                    <input type="hidden" name="action" value="deconnexion">
                                    <img src="img/iconedeconnexion.png" style="width:15px; margin-right:5px">Déconnexion
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </header>
            <div id="fiche">
                <table id="tFiche">
                    <tr>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['photo']->value;?>

                        </td>
                        <td id="chpDesc">
                            <fieldset id="fsFiche">
                                <legend class="nomAnimal"><strong><?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
 (Id n°<?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
)</strong></legend>
                                <form id="formAnimal" method="POST" action="index.php">
                                    <strong class="espAnimal"><?php echo $_smarty_tpl->tpl_vars['espece']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['pays']->value;?>
)</strong>
                                    <br>
                                    <label for="numParcelle"><strong>Numero de parcelle : </strong></label>
                                    <input type="text" id="numParcelle" value="<?php echo $_smarty_tpl->tpl_vars['parcelle']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['varCRUD']->value;?>
>
                                    <br>
                                    <label for="taille"><strong>Taille (cm): </strong></label>
                                    <input type="text" id="taille" value="<?php echo $_smarty_tpl->tpl_vars['taille']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['varCRUD']->value;?>
>
                                    <br>
                                    <label for="poids"><strong>Poids (kg): </strong></label>
                                    <input type="text" id="poids" value="<?php echo $_smarty_tpl->tpl_vars['poids']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['varCRUD']->value;?>
>
                                    <br>
                                    <label for="dOb"><strong>Né le : </strong></label>
                                    <input type="text" id="dOb" value="<?php echo $_smarty_tpl->tpl_vars['dOb']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['varCRUD']->value;?>
>
                                    <br>
                                    <label for="pOb"><strong>Lieu de Naissance : </strong></label>
                                    <input type="text" id="pOb" value="<?php echo $_smarty_tpl->tpl_vars['pOb']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['varCRUD']->value;?>
>
                                    <br>
                                    <label for="pere"><strong>Père : </strong></label>
                                    <input type="text" id="pere" value="<?php echo $_smarty_tpl->tpl_vars['pere']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['varCRUD']->value;?>
>
                                    <br>
                                    <label for="mere"><strong>Mère : </strong></label>
                                    <input type="text" id="mere" value="<?php echo $_smarty_tpl->tpl_vars['mere']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['varCRUD']->value;?>
>
                                    <br>
                                    <br>
                                    <textarea from="formAnimal" id="desc" <?php echo $_smarty_tpl->tpl_vars['varCRUD']->value;?>
><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</textarea>
                                    <?php echo $_smarty_tpl->tpl_vars['inputEdit']->value;?>

                                </form>
                            </fieldset>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <?php echo '<script'; ?>
>
            function agrImg($param) {
                if ($param.style.position == "absolute") {
                    $param.style.cssText = " width: 100%;object-fit: cover;padding: 1em;";
                    document.getElementById("fsFiche").style.display = "block";
                } else {
                    $param.style.cssText = "width:80%;position:absolute; top:43%; left:50%; transform:translate(-50%, -50%);";
                    document.getElementById("fsFiche").style.display = "none";
                }
            }
        <?php echo '</script'; ?>
>
        <?php echo $_smarty_tpl->tpl_vars['js']->value;?>

    </body>
</html><?php }
}
