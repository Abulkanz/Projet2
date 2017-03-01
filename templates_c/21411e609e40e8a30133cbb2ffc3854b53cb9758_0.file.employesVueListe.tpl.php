<?php
/* Smarty version 3.1.29, created on 2017-02-28 20:36:15
  from "C:\wamp64\www\Projet2zoo\vues\employesVueListe.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58b5df3f2118b6_32585502',
  'file_dependency' => 
  array (
    '21411e609e40e8a30133cbb2ffc3854b53cb9758' => 
    array (
      0 => 'C:\\wamp64\\www\\Projet2zoo\\vues\\employesVueListe.tpl',
      1 => 1488314171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b5df3f2118b6_32585502 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style/styles.css" rel="stylesheet">
    <link href="style/dropdown.css" rel="stylesheet">
    <title>Projet2</title>
    <title>Projet2</title>
</head>
    <body>
        <div class="conteneur noOverF">
            <!--<img class="logo" src="img/logoSinges.png">-->
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
                        <form method="POST" action="index.php">
                            <input type="hidden" name="gestion" value="employes">
                            <input class="lienNav" type="submit" name="employes" value="utilisateur">
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
        </div>
            <div class="conteneurTable">
            <h2><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h2>
            <br>
            <table class="tAnimaux">
                <tr>
                    <th></th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Fonction</th>
                    <th colspan="3">Action</th>
                </tr>
                <?php
$_from = $_smarty_tpl->tpl_vars['listeEmploye']->value;
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
                <tr>
                    <td><img src="img/<?php echo $_smarty_tpl->tpl_vars['Employe']->value['avatar'];?>
" class="vignLienFiche"></td>        
                    <td><?php echo $_smarty_tpl->tpl_vars['Employe']->value['nomEmploye'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['Employe']->value['prenomEmploye'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['Employe']->value['fonction'];?>
</td>
                    <td>
                        <form method="POST" action="index.php">
                            <input type="hidden" name="identifiant" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['idEmploye'];?>
">
                            <input type="hidden" name="gestion" value="employes">
                            <input type="hidden" name="action" value="consulter">
                            <input type="submit" name="consulter" value="Consulter">
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="index.php">
                            <input type="hidden" name="identifiant" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['idEmploye'];?>
">
                            <input type="hidden" name="gestion" value="employes">
                            <input type="hidden" name="action" value="modifier">
                            <input type="submit" name="modifier" value="Modifier">
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="index.php">
                            <input type="hidden" name="identifiant" value="<?php echo $_smarty_tpl->tpl_vars['Employe']->value['idEmploye'];?>
">
                            <input type="hidden" name="gestion" value="employes">
                            <input type="hidden" name="action" value="supprimer">
                            <input type="submit" name="supprimer" value="Supprimer">
                        </form>
                    </td>
                </tr>
                <?php
$_smarty_tpl->tpl_vars['Employe'] = $__foreach_Employe_0_saved_local_item;
}
if ($__foreach_Employe_0_saved_item) {
$_smarty_tpl->tpl_vars['Employe'] = $__foreach_Employe_0_saved_item;
}
?>
            </table>
            <br>
            nombre d'enregistrements : <?php echo $_smarty_tpl->tpl_vars['nbligne']->value;?>

            <br>
            <form method="POST" action="index.php">
                <p>
                    <label>Ajout d'un employé</label>
                    <input type="hidden" name="gestion" value="employes">
                    <input type="hidden" name="action" value="ajouter">
                    <input type="submit" name="ajouter" value="Ajouter">
                </p>
            </form>
            </div>
    </body>
</html><?php }
}
