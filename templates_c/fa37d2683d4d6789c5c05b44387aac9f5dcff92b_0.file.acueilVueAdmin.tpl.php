<?php
/* Smarty version 3.1.29, created on 2017-02-21 16:57:01
  from "C:\wamp64\www\authentification\template\acueilVueAdmin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58ac715ddf1567_38211050',
  'file_dependency' => 
  array (
    'fa37d2683d4d6789c5c05b44387aac9f5dcff92b' => 
    array (
      0 => 'C:\\wamp64\\www\\authentification\\template\\acueilVueAdmin.tpl',
      1 => 1487696218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ac715ddf1567_38211050 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
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
            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="statistique">
                <input type="submit" name="statistique" value="statistique">
            </form>
            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="accueil">
                <input type="hidden" name="action" value="Deconnexion">
                <input type="submit" name="Deconnexion" value="Deconnexion">
            </form>
        </nav>
        <h2><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['msg2']->value;?>
</h2>
    </body>
</html><?php }
}
