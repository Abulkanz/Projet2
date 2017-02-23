<?php
/* Smarty version 3.1.29, created on 2017-02-14 13:22:17
  from "C:\wamp64\www\authentification\template\employesVueModifier.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a30489121b24_33049905',
  'file_dependency' => 
  array (
    'ff4c65694a4635b5dfa870d0d6ab296206676288' => 
    array (
      0 => 'C:\\wamp64\\www\\authentification\\template\\employesVueModifier.tpl',
      1 => 1487078284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a30489121b24_33049905 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
        <link href="css/style.css" rel="stylesheet">
        <title>Projet2</title>
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
        <table>
				<form method="POST" action="index.php" enctype="multipart/form-data">
                <thead>
                    <tr>
                        <td colspan="3">Fiche de : <?php echo $_smarty_tpl->tpl_vars['Civilite']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['Employe']->value['nom'];?>
 <?php echo $_smarty_tpl->tpl_vars['Employe']->value['prenom'];?>
</td>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <input type="hidden" name="gestion" value="employes">
                        <input type="hidden" name="action" value="validermodification">
                        <td><input type="submit" id="retour" name="Retour" value="Retour" ></td>
                        <td colspan="3"><input type="submit" id="Valider" name="validermodification" value="Valider" ></td>
                        <!-- bouton servant a la modification -->
                    </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td rowspan="8"><img src="img/<?php echo $_smarty_tpl->tpl_vars['Employe']->value['avatar'];?>
" class="avatar"></td>
                            <td>Identifiant de connexion de la personne</td>
                            <td><input id="login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['login'];?>
"></td>
                        </tr>
						<tr>
                            <td>Nom de la personne</td>
                            <td><input id="nom" name="nom" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['nom'];?>
"></td>
                        </tr>
                        <tr>
                            <td>Prenom de la personne</td>
                            <td><input id="prenom" name="prenom" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['prenom'];?>
"></td>
                        </tr>
                        <tr>
                            <td>Fonction de la personne</td>
                            <td><input id="fonction" name="fonction" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['fonction'];?>
"></td>
                        </tr>
                        <tr>
                            <td>Mot de passe de la personne</td>
                            <td><input type="password" id="motdepasse" name="motdepasse" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['motdepasse'];?>
"></td>
                        </tr>
                        <tr>
                            <td>Adresse mail de la personne</td>
                            <td><input type="email" id="mail" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['adressemail'];?>
"></td>
                        </tr>
                        <tr>
                            <td>Sexe</td>
							<td><input id="droits" name="droits" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['droits'];?>
"></td>
                        </tr>
                        <tr>
                            <td>Droits de l'utilisateur</td>
							<td><input id="idSexe" name="idSexe" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['idSexe'];?>
"></td>
                        </tr>
                        <tr>
                         <td colspan="3">
                            <form>
                                <input type="hidden" name="gestion" value="employes">
                                <input type="hidden" name="action" value="vmodificationimage">
                                <input type="file" id="avatar" name="avatar" >
                                <input type="hidden" id="idEmploye" name="idEmploye" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['idEmploye'];?>
">
                                <input type="submit" id="modifier" name="vmodificationimage" value="Modifier" >
                            </form>
                        </td>
                        </tr>
                    </tbody>
                </form>
            </table>
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
