<?php
/* Smarty version 3.1.29, created on 2017-02-26 18:04:19
  from "C:\wamp64\www\Projet2\vues\animauxVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58b318a31dc922_35309809',
  'file_dependency' => 
  array (
    'e53266a835b45d8c7c403b6ec89d404bd251e1aa' => 
    array (
      0 => 'C:\\wamp64\\www\\Projet2\\vues\\animauxVue.tpl',
      1 => 1488132149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b318a31dc922_35309809 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style/font-awesome.min.css" rel="stylesheet" type="text/css"/>
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
                    <img class="avatar" src="img/avatarTest.png" alt=""/>
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
                        <td><form method='POST' action='index.php'>
                            <input class="action" type='submit' name='modifier' value='Modifier'>
                            <input type="hidden" name="gestion" value="fiche">
                            <input type='hidden' name='idAnimal' value="<?php echo $_smarty_tpl->tpl_vars['Animal']->value['idAnimal'];?>
">
                            <input type="hidden" name="action" value="modifier">
                        </form>
                        <form method='POST' action='index.php'>
                            <input class="action" type='submit' name='supprimer' value='Supprimer'>
                            <input type="hidden" name="gestion" value="fiche">
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
    </body>
</html><?php }
}
