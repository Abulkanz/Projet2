<?php
/* Smarty version 3.1.29, created on 2017-02-28 06:38:32
  from "C:\wamp64\www\Projet2zoo\vues\profilVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58b51ae8099df1_26981259',
  'file_dependency' => 
  array (
    '402fe828187c18d9b3bd7275e3987f7477e2f6a0' => 
    array (
      0 => 'C:\\wamp64\\www\\Projet2zoo\\vues\\profilVue.tpl',
      1 => 1488233654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b51ae8099df1_26981259 ($_smarty_tpl) {
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
                    <li><input class="lienNav" type="submit" name="lignes_commande" value="Statistiques"></li>
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
                                    <input type="hidden" name="gestion" value="animaux">
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
                            <img class="avataruser" src="img/<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
">
                        </td>
                        <td id="chpDesc">
                            <?php
$_from = $_smarty_tpl->tpl_vars['profilEmploye']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_Employe_0_saved_item = isset($_smarty_tpl->tpl_vars['Employe']) ? $_smarty_tpl->tpl_vars['Employe'] : false;
$_smarty_tpl->tpl_vars['Employe'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['Employe']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['Employe']->value) {
$_smarty_tpl->tpl_vars['Employe']->_loop = true;
$__foreach_Employe_0_saved_local_item = $_smarty_tpl->tpl_vars['Employe'];
?>
                            <fieldset id="fsFiche">
                                <legend class="nomAnimal"><strong>Fiche de l'employe</strong></legend>
                                <form id="formAnimal" method="POST" action="index.php">
                                    <strong class="espAnimal"><?php echo $_smarty_tpl->tpl_vars['Employe']->value['login'];?>
</strong>
                                    <br>
                                    <label for="numParcelle"><strong>Civilite</strong></label>
                                    <input type="text" id="numParcelle" value="<?php echo $_smarty_tpl->tpl_vars['Civilite']->value;?>
">
                                    <br>
                                    <label for="taille"><strong>Nom</strong></label>
                                    <input type="text" id="taille" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['nomEmploye'];?>
">
                                    <br>
                                    <label for="poids"><strong>Prenom</strong></label>
                                    <input type="text" id="poids" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['prenomEmploye'];?>
">
                                    <br>
                                    <label for="dOb"><strong>Fonction</strong></label>
                                    <input type="text" id="dOb" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['fonction'];?>
">
                                    <br>
                                    <label for="pOb"><strong>Adresse mail</strong></label>
                                    <input type="text" id="pOb" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['adressemail'];?>
">
                                    <br>
                                    <label for="pere"><strong>Droits</strong></label>
                                    <input type="text" id="pere" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['droits'];?>
">
                                </form>
                            </fieldset>
                            <?php
$_smarty_tpl->tpl_vars['Employe'] = $__foreach_Employe_0_saved_local_item;
}
if ($__foreach_Employe_0_saved_item) {
$_smarty_tpl->tpl_vars['Employe'] = $__foreach_Employe_0_saved_item;
}
?>
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
