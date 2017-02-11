<?php
/* Smarty version 3.1.29, created on 2017-02-11 13:26:53
  from "C:\wamp64\www\projet2\template\employesVueConsult.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589f111d980f28_75468814',
  'file_dependency' => 
  array (
    'fad43b5f001b52e056b22bbf7833d0294d192ed5' => 
    array (
      0 => 'C:\\wamp64\\www\\projet2\\template\\employesVueConsult.tpl',
      1 => 1486819609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589f111d980f28_75468814 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h2>
        <?php
$_from = $_smarty_tpl->tpl_vars['consultEmploye']->value;
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
        <form method="post" action="index.php">
                <input type="hidden" name="gestion" value="employes">
                <input type="hidden" name="action" value="envoyermail">
                Designation :<input type="text" name="designation" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['idSexe'];?>
" required><br>
                Prix unitaire :<input type="text" name="prixunitaireht" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['nom'];?>
"><br>
                Descriptif : :<input type="text" name="droits" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['droits'];?>
"><br>
                Stock : <input type="text" id="stock" name="stock" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['prenom'];?>
"><br>
                Quantité : <input type="text" name="quantite" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['fonction'];?>
"><br>
                Poids Piece: <input type="text" name="poidspiece" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['adressemail'];?>
"><br>
                <input type="submit" name="envoyermail" value="Envoyer la fiche par mail" />
                <input type="submit" name="valider" value="Retour" />
        </form> 
        <?php
$_smarty_tpl->tpl_vars['Employe'] = $__foreach_Employe_0_saved_local_item;
}
if ($__foreach_Employe_0_saved_item) {
$_smarty_tpl->tpl_vars['Employe'] = $__foreach_Employe_0_saved_item;
}
?>
    </body>
</html><?php }
}
