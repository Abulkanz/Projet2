<?php
/* Smarty version 3.1.29, created on 2017-02-11 12:03:54
  from "C:\wamp64\www\projet2\template\employesVueAjouter.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589efdaa607205_30438198',
  'file_dependency' => 
  array (
    '30030331ba4c8023971fd6b10dcd89d7bf14b132' => 
    array (
      0 => 'C:\\wamp64\\www\\projet2\\template\\employesVueAjouter.tpl',
      1 => 1486814627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589efdaa607205_30438198 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h2>
        <form method="POST" action="index.php" enctype="multipart/form-data">
                <input type="hidden" name="gestion" value="employes">
                <input type="hidden" name="action" value="validerajouter">
                idConnexion : <input type="text" id="idconnexion" name="idconnexion" /><br>
                Nom : <input type="text" id="nom" name="nom" /><br>
                Prenom : <input type="text" id="prenom" name="prenom" /><br>
                Fonction :<input type="text" id="fonction" name="fonction" /><br>
                Mot de passe : <input type="text" id="motdepasse" name="motdepasse"/><br>
                Avatar : <input type="file" id="avatar" name="avatar" /><br>
                Adresse mail: <input type="text" id="mail" name="mail" /><br>
                Droits de l'utilisateur : <input type="text" id="droits" name="droits" /><br>
                Sexe de l'utilisateur : <input type="number" id="idSexe" name="idSexe" /><br>
                <input type="submit" name="validerajouter" value="Valider" />
        </form> 
    </body>
</html><?php }
}
