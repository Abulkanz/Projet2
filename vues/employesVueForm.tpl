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
                    {$employes}
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
                        <span class="dropbtn" onclick="displayMenuUser()"><img class="avatar"  onclick="displayMenuUser()" src="img/userlogof.png"><span class="username"  onclick="displayMenuUser()">{$login}</span></span>
                        <div class="dropdown-content" id="menuUser">
                            <form method="POST" name="gestion">
                                <button class="lienNav">
                                    <input type="hidden" name="gestion" value="profil">
                                    <input type="hidden" name="action" value="profil">
                                    <input type="hidden" name="identifiant" value="{$login}">
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
        {foreach from=$consultEmploye item=Employe}
        <div id="fiche">
        <table id="tFiche">
				{$form}
                <thead>
                    <tr>
                        <td colspan="3">Fiche de : {$Employe.nomEmploye} {$Employe.prenomEmploye}</td>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <input type="hidden" name="gestion" value="employes">
                        {$action1}
                        <td>{$bouton2}</td>
                        <td colspan='{$valeurcolspan}'>{$bouton1}</td>
                        <!-- bouton servant a la modification -->
                    </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td rowspan="8"><img src="img/{$Employe.avatar}" class="miniatureavatar"></td>
                            <td>Identifiant de connexion</td>
                            <td><input id="login" name="login" value="{$Employe.login}" {$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>Civilité</td>
							<td><input id="idSexe" name="idSexe" value="{$Civilite}" {$parametrereadonly}></td>
                        </tr>
						<tr>
                            <td>Nom</td>
                            <td><input id="nom" name="nom" value="{$Employe.nomEmploye}" {$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>Prénom</td>
                            <td><input id="prenom" name="prenom" value="{$Employe.prenomEmploye}"{$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>Fonction</td>
                            <td><input id="fonction" name="fonction" value="{$Employe.fonction}" {$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>Mot de passe</td>
                            <td><input type="password" id="motdepasse" name="motdepasse" value="{$Employe.motdepasse}" {$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>Adresse mail</td>
                            <td><input type="email" id="mail" name="mail" value="{$Employe.adressemail}" {$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>Droits de l'utilisateur</td>
							<td><input id="droits" name="droits" value="{$Employe.droits}" {$parametrereadonly}></td>
                        </tr>
                        {$debutlignetab}<input type="hidden" id="idEmploye" name="idEmploye" value="{$Employe.idEmploye}">{$finlignetab}
                    </tbody>
                    </form>
            </table>
             {/foreach}
             </div>
             </body>
             {$js}
</html>