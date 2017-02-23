<?php
/* Smarty version 3.1.29, created on 2017-02-23 14:25:52
  from "C:\wamp64\www\authentification\template\acueilVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58aef0f014fcc9_97044674',
  'file_dependency' => 
  array (
    'fe093f8d2af66503153aa812623b04a37287f584' => 
    array (
      0 => 'C:\\wamp64\\www\\authentification\\template\\acueilVue.tpl',
      1 => 1487859797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58aef0f014fcc9_97044674 ($_smarty_tpl) {
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
        <p><?php echo $_smarty_tpl->tpl_vars['msg2']->value;?>
</h2>
    </body>
</html><?php }
}
