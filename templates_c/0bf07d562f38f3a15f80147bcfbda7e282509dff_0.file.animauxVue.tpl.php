<?php
/* Smarty version 3.1.29, created on 2017-03-01 11:57:18
  from "C:\wamp64\www\Projet2zoo\vues\animauxVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58b6b71eaa1251_14147428',
  'file_dependency' => 
  array (
    '0bf07d562f38f3a15f80147bcfbda7e282509dff' => 
    array (
      0 => 'C:\\wamp64\\www\\Projet2zoo\\vues\\animauxVue.tpl',
      1 => 1488368645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b6b71eaa1251_14147428 ($_smarty_tpl) {
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
                    <?php echo $_smarty_tpl->tpl_vars['employes']->value;?>

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
            <?php echo $_smarty_tpl->tpl_vars['aucRes']->value;?>

            <div class="conteneurTable">
                <?php echo $_smarty_tpl->tpl_vars['initTable']->value;?>

                <?php
$_from = $_smarty_tpl->tpl_vars['listeAnimaux']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_Animal_0_saved_item = isset($_smarty_tpl->tpl_vars['Animal']) ? $_smarty_tpl->tpl_vars['Animal'] : false;
$_smarty_tpl->tpl_vars['Animal'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['Animal']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['Animal']->value) {
$_smarty_tpl->tpl_vars['Animal']->_loop = true;
$__foreach_Animal_0_saved_local_item = $_smarty_tpl->tpl_vars['Animal'];
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['Animal']->value['photo'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['Animal']->value['prenomAnimal'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['Animal']->value['nomEspece'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['Animal']->value['sexe'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['Animal']->value['age'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['Animal']->value['statut'];?>
</td>
                        <td <?php echo $_smarty_tpl->tpl_vars['style']->value;?>
><form method='POST' action='index.php'>
                            <?php echo $_smarty_tpl->tpl_vars['boutonmodifier']->value;?>

                            <input type="hidden" name="gestion" value="animaux">
                            <input type='hidden' name='idAnimal' value="<?php echo $_smarty_tpl->tpl_vars['Animal']->value['idAnimal'];?>
">
                            <input type="hidden" name="action" value="modifier">
                        </form>
                        <form method='POST' action='index.php'>
                            <?php echo $_smarty_tpl->tpl_vars['boutonsupprimer']->value;?>

                            <input type="hidden" name="gestion" value="animaux">
                            <input type='hidden' name='idAnimal' value="<?php echo $_smarty_tpl->tpl_vars['Animal']->value['idAnimal'];?>
">
                            <input type="hidden" name="action" value="supprimer">
                        </form></td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['Animal'] = $__foreach_Animal_0_saved_local_item;
}
if ($__foreach_Animal_0_saved_item) {
$_smarty_tpl->tpl_vars['Animal'] = $__foreach_Animal_0_saved_item;
}
?>
                </table>
            </div>
        </div> 
        <?php echo $_smarty_tpl->tpl_vars['js']->value;?>
 
    </body>
</html><?php }
}
