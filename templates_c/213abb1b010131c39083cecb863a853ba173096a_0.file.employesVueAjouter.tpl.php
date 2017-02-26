<?php
/* Smarty version 3.1.29, created on 2017-02-26 17:05:16
  from "C:\wamp64\www\authentification\template\employesVueAjouter.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58b30accc8b559_07224931',
  'file_dependency' => 
  array (
    '213abb1b010131c39083cecb863a853ba173096a' => 
    array (
      0 => 'C:\\wamp64\\www\\authentification\\template\\employesVueAjouter.tpl',
      1 => 1488128712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b30accc8b559_07224931 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <?php echo '<script'; ?>
 type="text/javascript" src="js/script.js"> <?php echo '</script'; ?>
>
        <title>Projet2</title>
	</head>
    <body>
        <h2><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h2>
    <table>
				<form method="POST" action="index.php" enctype="multipart/form-data" onsubmit="Verifier_formulaire (this.form)">
                <thead>
                    </thead>
                    <tfoot>
                    <tr>
                        <input type="hidden" name="gestion" value="employes">
                        <input type="hidden" name="action" value="validerajouter">
                        <td><input type="submit" id="retour" name="Retour" value="Retour" ></td>
                        <td colspan="3"><input type="submit" name="validerajouter" value="Valider"/></td>
                    </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Identifiant de connexion(login)</td>
                            <td><input type="text" id="login" name="login" onblur="verifUtilisateur(this);"><span id="info"></span></td>
                        </tr>
						<tr>
                            <td>Nom</td>
                            <td><input type="text" id="nom" name="nom" /></td>
                        </tr>
                        <tr>
                            <td>Prénom</td>
                            <td><input type="text" id="prenom" name="prenom" /></td>
                        </tr>
                        <tr>
                            <td>Fonction</td>
                            <td>
                                <select id="fonction" name="fonction">
                                    <option value="">---Fonction---</option>
                                    <option value="Administrateur">Administrateur</option> 
                                    <option value="Chef animalier">Chef animalier</option>
                                    <option value="Veterinaire">Veterinaire</option>
                                    <option value="Stagiaire">Stagiaire</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Mot de passe</td>
                            <td><input type="password" id="motdepasse" name="motdepasse" value=""></td>
                        </tr>
                        <tr>
                            <td>Adresse mail</td>
                            <td><input type="email" id="mail" name="mail" value=""></td>
                        </tr>
                        <tr>
                            <td>Sexe</td>
							<td><select id="idSexe" name="idSexe">
                    <option value="">---Sexe de l'employé---</option>
                    <option value="1">Masculin</option> 
                    <option value="2">Feminin</option>
                </select></td>
                        </tr>
                        <tr>
                            <td>Droits</td>
							<td><select id='droits' name='droits'>
                    <option value=''>---Droits---</option>
                    <option value='1'>Lecture</option> 
                    <option value='2'>Tous les droits</option>
                    <option value='3'>Droits de type administrateur</option>
                </select></td>
                        </tr>
                        <tr>
                            <td>Photo de profil</td>
                            <td><input type="file" id="avatar" name="avatar" value=""></td>
                        </tr>
                    </tbody>
                    </form>
            </table>
</html><?php }
}
