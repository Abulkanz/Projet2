<?php
/* Smarty version 3.1.29, created on 2017-02-12 13:35:46
  from "C:\wamp64\www\projet2\template\employesVueModifier.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a064b28868d2_04303330',
  'file_dependency' => 
  array (
    'c03af0858665988d6470523c6062efebfe059e6a' => 
    array (
      0 => 'C:\\wamp64\\www\\projet2\\template\\employesVueModifier.tpl',
      1 => 1486905908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a064b28868d2_04303330 ($_smarty_tpl) {
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
        <form method="POST" action="index.php" enctype="multipart/form-data">
                <input type="hidden" name="gestion" value="employes">
                <input type="hidden" name="action" value="validermodification">
                <input type="hidden" id="idEmploye" name="idEmploye" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['idEmploye'];?>
"/><br>
                idConnexion : <input type="text" id="idconnexion" name="idconnexion" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['idconnexion'];?>
"/><br>
                Nom : <input type="text" id="nom" name="nom" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['nom'];?>
"/><br>
                Prenom : <input type="text" id="prenom" name="prenom" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['prenom'];?>
"/><br>
                Fonction :<input type="text" id="fonction" name="fonction" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['fonction'];?>
"/><br>
                Mot de passe : <input type="text" id="motdepasse" name="motdepasse" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['motdepasse'];?>
"/><br>
                Avatar : <input type="file" id="avatar" name="avatar"/><br>
                Adresse mail: <input type="text" id="mail" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['adressemail'];?>
"/><br>
                Droits de l'utilisateur : <input type="text" id="droits" name="droits" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['droits'];?>
"/><br>
                Sexe de l'utilisateur : <input type="number" id="idSexe" name="idSexe" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['idSexe'];?>
"/><br>
                <input type="submit" name="validermodification" value="Valider" />
        </form> 
        <?php
$_smarty_tpl->tpl_vars['Employe'] = $__foreach_Employe_0_saved_local_item;
}
if ($__foreach_Employe_0_saved_item) {
$_smarty_tpl->tpl_vars['Employe'] = $__foreach_Employe_0_saved_item;
}
?>
        <?php
$_from = $_smarty_tpl->tpl_vars['consultEmploye']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_Employe_1_saved_item = isset($_smarty_tpl->tpl_vars['Employe']) ? $_smarty_tpl->tpl_vars['Employe'] : false;
$_smarty_tpl->tpl_vars['Employe'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['Employe']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['Employe']->value) {
$_smarty_tpl->tpl_vars['Employe']->_loop = true;
$__foreach_Employe_1_saved_local_item = $_smarty_tpl->tpl_vars['Employe'];
?>
        <table>
				<form method="POST" action="index.php" enctype="multipart/form-data">
                <thead>
                    <tr>
                        <td colspan="3">Fiche de : <?php echo $_smarty_tpl->tpl_vars['Employe']->value['nom'];?>
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
                            <td><input id="idconnexion" name="idconnexion" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['idconnexion'];?>
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
                            <td><input id="motdepasse" name="motdepasse" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['motdepasse'];?>
"></td>
                        </tr>
                        <tr>
                            <td>Adresse mail de la personne</td>
                            <td><input id="mail" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['adressemail'];?>
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
            </table>
            </form>
            <?php
$_smarty_tpl->tpl_vars['Employe'] = $__foreach_Employe_1_saved_local_item;
}
if ($__foreach_Employe_1_saved_item) {
$_smarty_tpl->tpl_vars['Employe'] = $__foreach_Employe_1_saved_item;
}
?>
    </body>
</html><?php }
}
