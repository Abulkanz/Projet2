<?php
/* Smarty version 3.1.29, created on 2017-02-24 17:24:19
  from "C:\wamp64\www\authentification\template\employesVueForm.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58b06c43b62b90_18256832',
  'file_dependency' => 
  array (
    'add033758963aedd09475d0c240205f484704188' => 
    array (
      0 => 'C:\\wamp64\\www\\authentification\\template\\employesVueForm.tpl',
      1 => 1487957056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b06c43b62b90_18256832 ($_smarty_tpl) {
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
				<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

                <thead>
                    <tr>
                        <td colspan="3">Fiche de : <?php echo $_smarty_tpl->tpl_vars['Employe']->value['nomEmploye'];?>
 <?php echo $_smarty_tpl->tpl_vars['Employe']->value['prenomEmploye'];?>
</td>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <input type="hidden" name="gestion" value="employes">
                        <?php echo $_smarty_tpl->tpl_vars['action1']->value;?>

                        <td><?php echo $_smarty_tpl->tpl_vars['bouton2']->value;?>
</td>
                        <td colspan='<?php echo $_smarty_tpl->tpl_vars['valeurcolspan']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['bouton1']->value;?>
</td>
                        <!-- bouton servant a la modification -->
                    </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td rowspan="8"><img src="img/<?php echo $_smarty_tpl->tpl_vars['Employe']->value['avatar'];?>
" class="avatar"></td>
                            <td>Identifiant de connexion de la personne</td>
                            <td><input id="login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['login'];?>
" <?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
></td>
                        </tr>
                        <tr>
                            <td>Civilite</td>
							<td><input id="idSexe" name="idSexe" value="<?php echo $_smarty_tpl->tpl_vars['Civilite']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
></td>
                        </tr>
						<tr>
                            <td>Nom de la personne</td>
                            <td><input id="nom" name="nom" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['nomEmploye'];?>
" <?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
></td>
                        </tr>
                        <tr>
                            <td>Prenom de la personne</td>
                            <td><input id="prenom" name="prenom" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['prenomEmploye'];?>
"<?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
></td>
                        </tr>
                        <tr>
                            <td>Fonction de la personne</td>
                            <td><input id="fonction" name="fonction" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['fonction'];?>
" <?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
></td>
                        </tr>
                        <tr>
                            <td>Mot de passe de la personne</td>
                            <td><input type="password" id="motdepasse" name="motdepasse" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['motdepasse'];?>
" <?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
></td>
                        </tr>
                        <tr>
                            <td>Adresse mail de la personne</td>
                            <td><input type="email" id="mail" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['adressemail'];?>
" <?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
></td>
                        </tr>
                        <tr>
                            <td>Droits de l'utilisateur</td>
							<td><input id="droits" name="droits" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['droits'];?>
" <?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
></td>
                        </tr>
                        <?php echo $_smarty_tpl->tpl_vars['debutlignetab']->value;?>
<input type="hidden" id="idEmploye" name="idEmploye" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['idEmploye'];?>
"><?php echo $_smarty_tpl->tpl_vars['finlignetab']->value;?>

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
</html><?php }
}
