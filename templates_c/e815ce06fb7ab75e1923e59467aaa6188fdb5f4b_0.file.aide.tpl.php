<?php
/* Smarty version 3.1.29, created on 2017-02-24 12:13:51
  from "C:\wamp64\www\authentification\template\aide.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58b0237fc59c90_86247646',
  'file_dependency' => 
  array (
    'e815ce06fb7ab75e1923e59467aaa6188fdb5f4b' => 
    array (
      0 => 'C:\\wamp64\\www\\authentification\\template\\aide.tpl',
      1 => 1487937048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b0237fc59c90_86247646 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <nav>
            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="accueil">
                <input type="submit" name="accueil" value="accueil">
            </form>
            <?php echo $_smarty_tpl->tpl_vars['employes']->value;?>

            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="animaux">
                <input type="submit" name="animaux" value="animaux">
            </form>
            <form method="POST" name="gestion">
                <input type="hidden" name="gestion" value="carte">
                <input class="lienNav" type="submit" name="carte" value="Carte">
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
        <mean>
            <h2><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h2>
            <br>
            <h1>Sommaire</h1>
            <br>
            <h2>Ajout d'un utilisateur ou d'un animal</h2>
            <h2>Consulation des informations d'un utilisateur ou d'un animal</h2>
            <h2>Modification des informations d'un utilisateur ou d'un animal</h2>
            <h2>Modification de la photo d'un utilisateur ou d'un animal</h2>
            <h2>Suppression des informations d'un utilisateur ou d'un animal</h2>
            <br>
            <h3>Ajout d'un utilisateur ou d'un animal</h3>
            <br>
            <p>Pour ajouter un utilisateur ou un animal, il faut cliqué sur le bouton "Ajouter" (comme ci-dessous) en bas de la liste des employes ou des annimaux pour acceder au formulaire prevu</p>
            <img src="img/ajout.png">
            <br>
            <p>Une fois arriver sur la page contenant le formulaire. Il faut completer les differents et choisir l'image qui sera affciher dans liste comme dans l'exemple(employes)</p>
            <br>
            <img src="img/formajout.png">
            <br>
            <h3>Consulation des informations d'un utilisateur ou d'un animal</h3>
            <br>
            <p>Pour consulter les informations d'un utilisateur ou d'un animal, il faut cliqué sur le bouton "Consulter" (comme ci-dessous) dans la liste des employes ou des animaux</p>
            <img src="img/consulter.png">
            <br>
            <p>Le formulaire est alors affciher.</p>
            <br>
            <img src="img/formconsult.png">
            <h3>Modification des informations d'un utilisateur ou d'un animal</h3>
            <br>
            <p>Pour modifier les informations d'un utilisateur ou d'un animal, il faut cliqué sur le bouton "Modifier" (comme ci-dessous) dans la liste des employes ou des animaux</p>
            <br>
            <img src="img/modifier.png">
            <p>Le formulaire est alors affciher. Pour modifier les informations, il suffit de completer le champs du formulaire qui contient l'information que vous souhaitez modifié.</p>
            <br>
            <img src="img/formmodifier.png">
            <h3>Modification de la photo d'un utilisateur ou d'un animal</h3>
            <br>
            <p>Pour modifier la photo d'un animal, il faut acceder au formulaire de modification(section precedente).</p>
            <P>Une fois le formulaire chargé, il faut cliqué sur parcourir et cliqué sur "Modifier" pour appliqué la modification</p>
            <br>
            <h3>Suppression des informations d'un utilisateur ou d'un animal</h3>
            <br>
            <p>Pour supprimer un utilisateur ou un animal, il faut cliqué sur le bouton "Supprimer" dans la liste des employes ou des animaux</p>
            <p>Un formulaire sera alors afficher, il recapitulera les information qui seront supprimer. Pour valider la suppression, il faut clique sur le bouton "Supprimer".</p>
        </mean>
    </body>
</html><?php }
}
