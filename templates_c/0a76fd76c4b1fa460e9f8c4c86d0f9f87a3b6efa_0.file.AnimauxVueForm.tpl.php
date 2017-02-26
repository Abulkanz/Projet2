<?php
/* Smarty version 3.1.29, created on 2017-02-26 16:54:31
  from "C:\wamp64\www\authentification\template\AnimauxVueForm.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58b308477f6903_90357756',
  'file_dependency' => 
  array (
    '0a76fd76c4b1fa460e9f8c4c86d0f9f87a3b6efa' => 
    array (
      0 => 'C:\\wamp64\\www\\authentification\\template\\AnimauxVueForm.tpl',
      1 => 1488128058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b308477f6903_90357756 ($_smarty_tpl) {
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
$_from = $_smarty_tpl->tpl_vars['consultAnimaux']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_Animaux_0_saved_item = isset($_smarty_tpl->tpl_vars['Animaux']) ? $_smarty_tpl->tpl_vars['Animaux'] : false;
$_smarty_tpl->tpl_vars['Animaux'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['Animaux']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['Animaux']->value) {
$_smarty_tpl->tpl_vars['Animaux']->_loop = true;
$__foreach_Animaux_0_saved_local_item = $_smarty_tpl->tpl_vars['Animaux'];
?>
        <table>
				<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

                <thead>
                    <tr>
                        <td colspan="3">Fiche de : <?php echo $_smarty_tpl->tpl_vars['Animaux']->value['prenomAnimal'];?>
</td>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <input type="hidden" name="gestion" value="animaux">
                        <?php echo $_smarty_tpl->tpl_vars['action1']->value;?>

                        <td><input type="submit" id="retour" name="Retour" value="Retour" ></td>
                        <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['bouton1']->value;?>
</td>
                        <!-- bouton servant a la modification -->
                    </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td rowspan="9"><img src="img/imgFiches/<?php echo $_smarty_tpl->tpl_vars['Animaux']->value['photo'];?>
" class="avatar"></td>
                            <td>Prénom de l'animal</td>
                            <td><input type="text" id="prenomAnimal" name="prenomAnimal" value="<?php echo $_smarty_tpl->tpl_vars['Animaux']->value['prenomAnimal'];?>
" <?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
></td>
                        </tr>
						<tr>
                            <td>Poids de l'animal</td>
                            <td><input type="text" id="poids" name="poids" value="<?php echo $_smarty_tpl->tpl_vars['Animaux']->value['poids'];?>
" <?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
></td>
                        </tr>
                        <tr>
                            <td>Taille de l'animal</td>
                            <td><input type="text" id="taille" name="taille" value="<?php echo $_smarty_tpl->tpl_vars['Animaux']->value['taille'];?>
"<?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
></td>
                        </tr>
                        <tr>
                            <td>Statut de l'animal</td>
                            <td><input type="text" id="statut" name="statut" value="<?php echo $_smarty_tpl->tpl_vars['Animaux']->value['statut'];?>
" <?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
></td>
                        </tr>
                        <tr>
                            <td>Date de naissance</td>
                            <td><input type="text" id="date_naissance" name="date_naissance" value="<?php echo $_smarty_tpl->tpl_vars['Animaux']->value['date_naissance'];?>
" <?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
></td>
                        </tr>
                        <tr>
                            <td>Lieu de naissance</td>
                            <td><input type="text" id="lieu_naissance" name="lieu_naissance" value="<?php echo $_smarty_tpl->tpl_vars['Animaux']->value['lieu_naissance'];?>
" <?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
></td>
                        </tr>
                        <tr>
                            <td>Sexe</td>
							<td><input type="text" id="idSexe" name="idSexe" value="<?php echo $_smarty_tpl->tpl_vars['genre']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
></td>
                        </tr>
                        <tr>
                            <td>Lieu de vie</td>
							<td><input type="text" id="nomParcelle" name="nomParcelle" value="<?php echo $_smarty_tpl->tpl_vars['Animaux']->value['nomParcelle'];?>
" <?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td><textarea rows="4" cols="50" id="description" name="description" <?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
><?php echo $_smarty_tpl->tpl_vars['Animaux']->value['description'];?>
</textarea></td>
                        </tr>
                        <?php echo $_smarty_tpl->tpl_vars['debutlignetab']->value;?>
<input type="hidden" id="idAnimaux" name="idAnimaux" value="<?php echo $_smarty_tpl->tpl_vars['Animaux']->value['idAnimaux'];?>
"><?php echo $_smarty_tpl->tpl_vars['finlignetab']->value;?>

                    </tbody>
                    </form>
            </table>
             <?php
$_smarty_tpl->tpl_vars['Animaux'] = $__foreach_Animaux_0_saved_local_item;
}
if ($__foreach_Animaux_0_saved_item) {
$_smarty_tpl->tpl_vars['Animaux'] = $__foreach_Animaux_0_saved_item;
}
?>
            <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
