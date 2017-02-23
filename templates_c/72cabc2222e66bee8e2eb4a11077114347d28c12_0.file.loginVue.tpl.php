<?php
/* Smarty version 3.1.29, created on 2017-02-17 08:48:27
  from "C:\wamp64\www\authentification\template\loginVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a6b8db097937_26886521',
  'file_dependency' => 
  array (
    '72cabc2222e66bee8e2eb4a11077114347d28c12' => 
    array (
      0 => 'C:\\wamp64\\www\\authentification\\template\\loginVue.tpl',
      1 => 1487321288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a6b8db097937_26886521 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Projet2</title>
    </head>
    <body>
        <form method="POST" action="index.php">
            <input type="hidden" name="gestion" value="login">
            <input type="hidden" name="action" value="login">
            Login <input type="text" id="identifiant" name="identifiant" value="">
            Mot de passe: <input type="password" id="password" name="password" value="">
            <input type="submit" name="login" value="Se connecter">
        </form>
    </body>
</html><?php }
}
