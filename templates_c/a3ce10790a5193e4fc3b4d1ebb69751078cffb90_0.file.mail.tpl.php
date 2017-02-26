<?php
/* Smarty version 3.1.29, created on 2017-02-25 12:07:28
  from "C:\wamp64\www\authentification\template\mail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58b17380988b78_81445753',
  'file_dependency' => 
  array (
    'a3ce10790a5193e4fc3b4d1ebb69751078cffb90' => 
    array (
      0 => 'C:\\wamp64\\www\\authentification\\template\\mail.tpl',
      1 => 1488024437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b17380988b78_81445753 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp64\\www\\authentification\\include\\libs\\smarty\\plugins\\modifier.date_format.php';
$_from = $_smarty_tpl->tpl_vars['corspmail']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_mail_0_saved_item = isset($_smarty_tpl->tpl_vars['mail']) ? $_smarty_tpl->tpl_vars['mail'] : false;
$_smarty_tpl->tpl_vars['mail'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['mail']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['mail']->value) {
$_smarty_tpl->tpl_vars['mail']->_loop = true;
$__foreach_mail_0_saved_local_item = $_smarty_tpl->tpl_vars['mail'];
?>
Cher <?php echo $_smarty_tpl->tpl_vars['mail']->value['prenomAnimal'];?>
,

Bienvenu et merci d'être devenu membre de notre groupe d'utilisateur,

Cliquez sur le lien ci-dessous pour vous identifier avec votre nom d'utilisateur '<?php echo $_smarty_tpl->tpl_vars['mail']->value['idAnimaux'];?>
'
<?php echo smarty_modifier_date_format(time(),$_smarty_tpl->tpl_vars['mail']->value['date_naissance']);?>

et vous pourrez utiliser nos forums.
<img src="http://92.39.241.41/plesk-site-preview/arossignol.fr/92.39.241.41/projet1/images/sliders/slide1.jpg">
Liste principale
Quelques groupes d'utilisateurs
<?php
$_smarty_tpl->tpl_vars['mail'] = $__foreach_mail_0_saved_local_item;
}
if ($__foreach_mail_0_saved_item) {
$_smarty_tpl->tpl_vars['mail'] = $__foreach_mail_0_saved_item;
}
}
}
