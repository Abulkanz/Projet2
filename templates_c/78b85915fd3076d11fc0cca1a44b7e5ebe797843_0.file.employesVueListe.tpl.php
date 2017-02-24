<?php
/* Smarty version 3.1.29, created on 2017-02-24 15:57:28
  from "C:\wamp64\www\authentification\template\employesVueListe.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58b057e8335b49_89913849',
  'file_dependency' => 
  array (
    '78b85915fd3076d11fc0cca1a44b7e5ebe797843' => 
    array (
      0 => 'C:\\wamp64\\www\\authentification\\template\\employesVueListe.tpl',
      1 => 1487941943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b057e8335b49_89913849 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Projet2</title>
</head>
    <body>
        <nav>
            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="accueil">
                <input type="submit" name="accueil" value="accueil">
            </form>
            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="employes">
                <input type="submit" name="employes" value="utilisateur">
            </form>
            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="animaux">
                <input type="submit" name="animaux" value="animaux">
            </form>
            <form method="POST" name="gestion">
                <input type="hidden" name="gestion" value="carte">
                <input class="lienNav" type="submit" name="carte" value="Carte">
            </form>
            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="statistique">
                <input type="submit" name="statistique" value="statistique">
            </form>
            <?php echo $_smarty_tpl->tpl_vars['login']->value;?>

            <ul>
                <li>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="gestion" value="profil">
                        <input type="hidden" name="identifiant" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
">
                        <input type="hidden" name="action" value="profil">
                        <input type="submit" name="profil" value="Profil">
                    </form>
                </li>
                <li>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="gestion" value="aide">
                        <input type="submit" name="aide" value="aide">
                    </form>
                </li>
                <li>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="gestion" value="animaux">
                        <input type="hidden" name="action" value="Deconnexion">
                        <input type="submit" name="Deconnexion" value="Deconnexion">
                    </form>
                </li>
            </ul>
        </nav>
        <h2><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h2>
        <br>
        <table>
            <tr>
                <th></th>
                <th>nom</th>
                <th>prenom</th>
                <th>fonction</th>
                <th colspan="3">Action</th>
            </tr>
            <?php
$_from = $_smarty_tpl->tpl_vars['listeEmploye']->value;
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
            <tr>
                <td><img src="img/<?php echo $_smarty_tpl->tpl_vars['Employe']->value['avatar'];?>
" class="miniature"></td>        
                <td><?php echo $_smarty_tpl->tpl_vars['Employe']->value['nomEmploye'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['Employe']->value['prenomEmploye'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['Employe']->value['fonction'];?>
</td>
                <td>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="identifiant" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['idEmploye'];?>
">
                        <input type="hidden" name="gestion" value="employes">
                        <input type="hidden" name="action" value="consulter">
                        <input type="submit" name="consulter" value="Consulter">
                    </form>
                </td>
                <td>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="identifiant" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['idEmploye'];?>
">
                        <input type="hidden" name="gestion" value="employes">
                        <input type="hidden" name="action" value="modifier">
                        <input type="submit" name="modifier" value="Modifier">
                    </form>
                </td>
                <td>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="identifiant" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['idEmploye'];?>
">
                        <input type="hidden" name="gestion" value="employes">
                        <input type="hidden" name="action" value="supprimer">
                        <input type="submit" name="supprimer" value="Supprimer">
                    </form>
                </td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['Employe'] = $__foreach_Employe_0_saved_local_item;
}
if ($__foreach_Employe_0_saved_item) {
$_smarty_tpl->tpl_vars['Employe'] = $__foreach_Employe_0_saved_item;
}
?>
        </table>
        <br>
        nombre d'enregistrements : <?php echo $_smarty_tpl->tpl_vars['nbligne']->value;?>

        <br>
        <form method="POST" action="index.php">
            <p>
                <label>Ajout d'un employé</label>
                <input type="hidden" name="gestion" value="employes">
                <input type="hidden" name="action" value="ajouter">
                <input type="submit" name="ajouter" value="Ajouter">
            </p>
        </form>
    </body>
</html><?php }
}
