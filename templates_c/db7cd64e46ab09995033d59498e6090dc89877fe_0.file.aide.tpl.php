<?php
/* Smarty version 3.1.29, created on 2017-03-01 12:08:00
  from "C:\wamp64\www\Projet2zoo\vues\aide.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58b6b9a0beb687_17908018',
  'file_dependency' => 
  array (
    'db7cd64e46ab09995033d59498e6090dc89877fe' => 
    array (
      0 => 'C:\\wamp64\\www\\Projet2zoo\\vues\\aide.tpl',
      1 => 1488368645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b6b9a0beb687_17908018 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <?php echo $_smarty_tpl->tpl_vars['employes']->value;?>

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
        <mean>
            <h2><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h2>
            <br>
            <h1>Sommaire</h1>
            <br>
            <h2>Ajout d'un utilisateur ou d'un animal</h2>
            <h2>Consultation des informations d'un utilisateur ou d'un animal</h2>
            <h2>Modification des informations d'un utilisateur ou d'un animal</h2>
            <h2>Modification de la photo d'un utilisateur ou d'un animal</h2>
            <h2>Suppression des informations d'un utilisateur ou d'un animal</h2>
            <br>
            <h3>Ajout d'un utilisateur ou d'un animal</h3>
            <br>
            <p>Pour ajouter un utilisateur ou un animal, il faut cliquer sur le bouton "Ajouter" (comme ci-dessous) en bas de la liste des employés ou des annimaux pour accéder au formulaire prévu</p>
            <img src="img/ajout.png">
            <br>
            <p>Une fois arrivé sur la page contenant le formulaire, il faut compléter les différents champs du formulaire et choisir l'image qui sera affichée dans liste comme dans l'exemple (employés)</p>
            <br>
            <img src="img/formajout.png">
            <br>
            <h3>Consulation des informations d'un utilisateur ou d'un animal</h3>
            <br>
            <p>Pour consulter les informations d'un utilisateur ou d'un animal, il faut cliquer sur le bouton "Consulter" (comme ci-dessous) dans la liste des employés ou des animaux</p>
            <img src="img/consulter.png">
            <br>
            <p>Le formulaire est alors affiché.</p>
            <br>
            <img src="img/formconsult.png">
            <h3>Modification des informations d'un utilisateur ou d'un animal</h3>
            <br>
            <p>Pour modifier les informations d'un utilisateur ou d'un animal, il faut cliquer sur le bouton "Modifier" (comme ci-dessous) dans la liste des employés ou des animaux</p>
            <br>
            <img src="img/modifier.png">
            <p>Le formulaire est alors afficher. Pour modifier les informations, il suffit de compléter le champ du formulaire qui contient l'information que vous souhaitez modifiée.</p>
            <br>
            <img src="img/formmodifier.png">
            <h3>Modification de la photo d'un utilisateur ou d'un animal</h3>
            <br>
            <p>Pour modifier la photo d'un animal, il faut accéder au formulaire de modification (section précédente).</p>
            <P>Une fois le formulaire chargé, il faut cliquer sur "parcourir" et cliquer sur "Modifier" pour appliquer la modification</p>
            <br>
            <h3>Suppression des informations d'un utilisateur ou d'un animal</h3>
            <br>
            <p>Pour supprimer un utilisateur ou un animal, il faut cliquer sur le bouton "Supprimer" dans la liste des employés ou des animaux</p>
            <p>Un formulaire sera alors affiché, il récapitulera les informations qui seront supprimées. Pour valider la suppression, il faut cliqur sur le bouton "Supprimer".</p>
        </mean>
        <?php echo $_smarty_tpl->tpl_vars['js']->value;?>

    </body>
</html><?php }
}
