<?php
/* Smarty version 3.1.29, created on 2017-02-14 08:58:30
  from "C:\wamp64\www\projet2\template\employesVueRechercher.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a2c6b67783d8_54164920',
  'file_dependency' => 
  array (
    '686157bb842c545f037d5cd745a1838c8af0490f' => 
    array (
      0 => 'C:\\wamp64\\www\\projet2\\template\\employesVueRechercher.tpl',
      1 => 1487062319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a2c6b67783d8_54164920 ($_smarty_tpl) {
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
        <h2><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h2>
        <br>
        <form method="POST" action="index.php">
        <input type="hidden" name="gestion" value="employes">
        <input type="hidden" name="action" value="Rechercher">
        Rechercher par nom d'auteur
        <input type="text" name="nom">
        <input type="submit" name="Rechercher" value="Rechercher">
        </form>
        <!--<form method="post" action="index.php">
        <input type="hidden" name="gestion" value="employes">
        <input type="hidden" name="action" value="Trier">
                Trier
                 <select name="choix" id="choix">
                     <option value="">---Choix----</option>
                     <option value="nom">Nom</option>
                     <option value="prenom">Prenom</option>
                 </select>
                <input type="submit" name="Trier" value="Trier">
            </form>-->
        <br>
        <table>
            <tr>
                <th></th>
                <th>reference</th>
                <th>designation</th>
                <th>prix</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['Employe']->value['nom'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['Employe']->value['prenom'];?>
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
        <form>
        <input type="submit" name"Retour" value="Retour a l'accueil">
        </form>
        <br>
        Nombre d'enregistrements : <?php echo $_smarty_tpl->tpl_vars['nbligne']->value;?>

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
