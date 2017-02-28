<?php
/* Smarty version 3.1.29, created on 2017-02-28 18:24:08
  from "C:\wamp64\www\Projet2zoo\vues\employesVueForm.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58b5c0487a3f69_75554655',
  'file_dependency' => 
  array (
    'c4653f1d132685dca12caf157e6e41e40ebadcb7' => 
    array (
      0 => 'C:\\wamp64\\www\\Projet2zoo\\vues\\employesVueForm.tpl',
      1 => 1488306242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b5c0487a3f69_75554655 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
        <link href="style/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="style/styles.css" rel="stylesheet">
        <link href="style/dropdown.css" rel="stylesheet">
        <title>Projet2</title>
	</head>
        <body>
        <div class="conteneur noOverF">
            <img class="logo" src="img/logoSinges.png">
            <header>
                <ul>
                    <li>
                        <form method="POST" name="gestion">
                            <input type="hidden" name="gestion" value="accueil">
                            <input class="lienNav" type="submit" value="Accueil">
                        </form>
                    </li>
                    <li>
                        <form method="POST" name="gestion">
                            <input type="hidden" name="gestion" value="animaux">
                            <input class="lienNav" type="submit" value="Animaux">
                        </form>
                    </li>
                    <li>
                        <form method="POST" name="gestion">
                            <input type="hidden" name="gestion" value="carte">
                            <input class="lienNav" type="submit" value="Carte">
                        </form>
                    </li>
                     <li>
                        <form method="POST" name="gestion">
                            <input type="hidden" name="gestion" value="statistiques">
                            <input class="lienNav" type="submit" value="Statistiques">
                        </form>
                    </li>
                     <li>
                            <form method="POST" action="index.php">
                                <input type="text" name="objRech" placeholder="Rechercher">
                                <input type="hidden" name="gestion" value="animaux">
                                <input type="hidden" name="action" value="rechercher">
                                <input type="submit" name="rechAnimal" value="->">
                                <label for="tri">Trier par</label>
                                <select id="tri" name="selection">
                                    <option selected="selected" value="prenomAnimal">Prénom</option>
                                    <option value="nomEspece">Espèce</option>
                                    <option value="Sexe">Sexe</option>
                                    <option value="Age">Age</option>
                                    <option value="StatutA">Statut</option>
                                </select>
                            </form>
                    </li>
                    <li class="dropdown">
                        <span class="dropbtn" onclick="displayMenuUser()"><img class="avatar"  onclick="displayMenuUser()" src="img/userlogof.png"><span class="username"  onclick="displayMenuUser()"><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</span></span>
                        <div class="dropdown-content" id="menuUser">
                            <form method="POST" name="gestion">
                                <button class="lienNav">
                                    <input type="hidden" name="gestion" value="profil">
                                    <input type="hidden" name="action" value="profil">
                                    <input type="hidden" name="identifiant" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
">
                                    <img src="img/userlogof.png" style="width:20px; margin-right:5px">Profil
                                </button>
                            </form>
                            <form method="POST" name="gestion">
                                <button class="lienNav">
                                    <input type="hidden" name="gestion" value="aide">
                                    <img src="img/icone_aide.png" style="width:20px; margin-right:5px">Aide
                                </button>
                            </form>
                            <form method="POST" name="gestion">
                                 <button class="lienNav">
                                    <input type="hidden" name="gestion" value="accueil">
                                    <input type="hidden" name="action" value="deconnexion">
                                    <img src="img/iconedeconnexion.png" style="width:15px; margin-right:5px">Déconnexion
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </header>
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
" class="miniatureavatar"></td>
                            <td>Identifiant de connexion</td>
                            <td><input id="login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['login'];?>
" <?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
></td>
                        </tr>
                        <tr>
                            <td>Civilité</td>
							<td><input id="idSexe" name="idSexe" value="<?php echo $_smarty_tpl->tpl_vars['Civilite']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
></td>
                        </tr>
						<tr>
                            <td>Nom</td>
                            <td><input id="nom" name="nom" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['nomEmploye'];?>
" <?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
></td>
                        </tr>
                        <tr>
                            <td>Prénom</td>
                            <td><input id="prenom" name="prenom" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['prenomEmploye'];?>
"<?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
></td>
                        </tr>
                        <tr>
                            <td>Fonction</td>
                            <td><input id="fonction" name="fonction" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['fonction'];?>
" <?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
></td>
                        </tr>
                        <tr>
                            <td>Mot de passe</td>
                            <td><input type="password" id="motdepasse" name="motdepasse" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['motdepasse'];?>
" <?php echo $_smarty_tpl->tpl_vars['parametrereadonly']->value;?>
></td>
                        </tr>
                        <tr>
                            <td>Adresse mail</td>
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
             <?php echo $_smarty_tpl->tpl_vars['js']->value;?>

</html><?php }
}
