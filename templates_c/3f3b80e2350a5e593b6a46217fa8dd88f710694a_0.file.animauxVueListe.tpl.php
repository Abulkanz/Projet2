<?php
/* Smarty version 3.1.29, created on 2017-02-24 16:01:01
  from "C:\wamp64\www\authentification\template\animauxVueListe.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58b058bd7983e5_88097770',
  'file_dependency' => 
  array (
    '3f3b80e2350a5e593b6a46217fa8dd88f710694a' => 
    array (
      0 => 'C:\\wamp64\\www\\authentification\\template\\animauxVueListe.tpl',
      1 => 1487952051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b058bd7983e5_88097770 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Projet2</title>
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
        <h2><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h2>
        <br>
        <form method="POST" action="index.php">
        <input type="hidden" name="gestion" value="Animauxs">
        <input type="hidden" name="action" value="Rechercher">
        Rechercher par 
        <input type="text" name="nom">
        <input type="submit" name="Rechercher" value="Rechercher">
        </form>
        <!--<form method="post" action="index.php">
        <input type="hidden" name="gestion" value="Animauxs">
        <input type="hidden" name="action" value="Trier">
                Trier
                 <select name="choix" id="choix">
                     <option value="">---Choix----</option>
                     <option value="nom">Nom</option>
                     <option value="prenom">Prenom</option>
                 </select>
                <input type="submit" name="Trier" value="Trier">
            </form>-->
        <br>
        <table>
            <tr>
                <th></th>
                <th>Prenom</th>
                <th>Espece</th>
                <th>Sexe</th>
                <th>Poids</th>
                <th>Taille</th>
                <th>Age</th>
                <th>Lieu de naissance</th>
                <th>Statut</th>
                <th colspan="3">Action</th>
            </tr>
            <?php
$_from = $_smarty_tpl->tpl_vars['listeAnimaux']->value;
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
            <tr>
                <td><img src="img/imgFiches/<?php echo $_smarty_tpl->tpl_vars['Animaux']->value['photo'];?>
" class="miniature"></td>        
                <td><?php echo $_smarty_tpl->tpl_vars['Animaux']->value['prenomAnimal'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['Animaux']->value['nomEspece'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['sexe']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['Animaux']->value['poids'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['Animaux']->value['taille'];?>
</td>
                <td>Age de l'animal</td>
                <td><?php echo $_smarty_tpl->tpl_vars['Animaux']->value['lieu_naissance'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['Animaux']->value['statut'];?>
</td>
                <td>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="identifiant" value="<?php echo $_smarty_tpl->tpl_vars['Animaux']->value['idAnimaux'];?>
">
                        <input type="hidden" name="gestion" value="animaux">
                        <input type="hidden" name="action" value="consulter">
                        <?php echo $_smarty_tpl->tpl_vars['consulter']->value;?>

                    </form>
                </td>
                <td <?php echo $_smarty_tpl->tpl_vars['style']->value;?>
>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="identifiant" value="<?php echo $_smarty_tpl->tpl_vars['Animaux']->value['idAnimaux'];?>
">
                        <input type="hidden" name="gestion" value="animaux">
                        <input type="hidden" name="action" value="modifier">
                        <?php echo $_smarty_tpl->tpl_vars['modifier']->value;?>

                    </form>
                </td>
                <td <?php echo $_smarty_tpl->tpl_vars['style']->value;?>
>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="identifiant" value="<?php echo $_smarty_tpl->tpl_vars['Animaux']->value['idAnimaux'];?>
">
                        <input type="hidden" name="gestion" value="animaux">
                        <input type="hidden" name="action" value="supprimer">
                        <?php echo $_smarty_tpl->tpl_vars['supprimer']->value;?>

                    </form>
                </td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['Animaux'] = $__foreach_Animaux_0_saved_local_item;
}
if ($__foreach_Animaux_0_saved_item) {
$_smarty_tpl->tpl_vars['Animaux'] = $__foreach_Animaux_0_saved_item;
}
?>
        </table>
        <br>
        Nombre d'enregistrements : <?php echo $_smarty_tpl->tpl_vars['nbligne']->value;?>

        <br>
        <?php echo $_smarty_tpl->tpl_vars['ajouter']->value;?>

    </body>
</html><?php }
}
