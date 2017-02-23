<?php
/* Smarty version 3.1.29, created on 2017-02-14 13:31:00
  from "C:\wamp64\www\authentification\template\acueilVueChef.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a30694eed791_08594917',
  'file_dependency' => 
  array (
    'cfd1c16e96c5073d5f9e84142d86230c764eda6e' => 
    array (
      0 => 'C:\\wamp64\\www\\authentification\\template\\acueilVueChef.tpl',
      1 => 1487077805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a30694eed791_08594917 ($_smarty_tpl) {
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
                <input type="hidden" name="gestion" value="animeaux">
                <input type="submit" name="animeaux" value="animeaux">
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
