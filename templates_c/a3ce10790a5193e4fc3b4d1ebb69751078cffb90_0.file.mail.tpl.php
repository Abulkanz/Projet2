<?php
/* Smarty version 3.1.29, created on 2017-02-24 16:39:37
  from "C:\wamp64\www\authentification\template\mail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58b061c92abee2_02818823',
  'file_dependency' => 
  array (
    'a3ce10790a5193e4fc3b4d1ebb69751078cffb90' => 
    array (
      0 => 'C:\\wamp64\\www\\authentification\\template\\mail.tpl',
      1 => 1487954369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b061c92abee2_02818823 ($_smarty_tpl) {
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
Cher <?php echo $_smarty_tpl->tpl_vars['Employe']->value['nomEmploye'];?>
,

Bienvenu et merci d'être devenu membre de notre groupe d'utilisateur,

Cliquez sur le lien ci-dessous pour vous identifier avec votre nom d'utilisateur '<?php echo $_smarty_tpl->tpl_vars['Employe']->value['idEmploye'];?>
'
et vous pourrez utiliser nos forums.

Liste principale
Quelques groupes d'utilisateurs
<?php
$_smarty_tpl->tpl_vars['Employe'] = $__foreach_Employe_0_saved_local_item;
}
if ($__foreach_Employe_0_saved_item) {
$_smarty_tpl->tpl_vars['Employe'] = $__foreach_Employe_0_saved_item;
}
}
}
