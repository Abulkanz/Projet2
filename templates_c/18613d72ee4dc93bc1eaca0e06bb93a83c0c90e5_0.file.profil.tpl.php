<?php
/* Smarty version 3.1.29, created on 2017-02-23 19:50:00
  from "C:\wamp64\www\authentification\template\profil.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58af3ce8350729_29692396',
  'file_dependency' => 
  array (
    '18613d72ee4dc93bc1eaca0e06bb93a83c0c90e5' => 
    array (
      0 => 'C:\\wamp64\\www\\authentification\\template\\profil.tpl',
      1 => 1487879338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58af3ce8350729_29692396 ($_smarty_tpl) {
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
        <?php
$_from = $_smarty_tpl->tpl_vars['profilEmploye']->value;
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
    </body>
</html><?php }
}
