<?php
/* Smarty version 3.1.29, created on 2017-02-12 21:03:21
  from "C:\wamp64\www\projet2\template\loginVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a0cd9906d924_18710902',
  'file_dependency' => 
  array (
    '3dd28222efea17edae76c54bc6610a9473936e9c' => 
    array (
      0 => 'C:\\wamp64\\www\\projet2\\template\\loginVue.tpl',
      1 => 1486933397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a0cd9906d924_18710902 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="POST" action="index.php">
            <input type="hidden" name="gestion" value="login">
            <input type="hidden" name="action" value="login">
            Login <input type="text" name="f_login" value="">
            Mot de passe: <input type="password" name="f_pw" value="">
            <input type="submit" name="login" value="Se connecter">
        </form>
        <!--<form method="POST" action="index.php">
        <input type="text" name="fLogin">
        <input type="password" name="fMdp">
        <input type="submit" name="valider" value="Confirmer">
    </form>-->
    </body>
</html><?php }
}
