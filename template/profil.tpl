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
            {$login}
            <ul>
                <li>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="gestion" value="profil">
                        <input type="hidden" name="identifiant" value="{$login}">
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
        <h2>{$msg}</h2>
        {foreach from=$profilEmploye item=Employe}
        <table>
				{$form}
                <thead>
                    <tr>
                        <td colspan="3">Fiche de : {$Employe.nomEmploye} {$Employe.prenomEmploye}</td>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="8"><img src="img/{$Employe.avatar}" class="avatar"></td>
                            <td>Identifiant de connexion de la personne</td>
                            <td><input id="login" name="login" value="{$Employe.login}" {$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>Civilite</td>
							<td><input id="idSexe" name="idSexe" value="{$Civilite}" {$parametrereadonly}></td>
                        </tr>
						<tr>
                            <td>Nom de la personne</td>
                            <td><input id="nom" name="nom" value="{$Employe.nomEmploye}" {$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>Prenom de la personne</td>
                            <td><input id="prenom" name="prenom" value="{$Employe.prenomEmploye}"{$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>Fonction de la personne</td>
                            <td><input id="fonction" name="fonction" value="{$Employe.fonction}" {$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>Mot de passe de la personne</td>
                            <td><input type="password" id="motdepasse" name="motdepasse" value="{$Employe.motdepasse}" {$parametrereadonly}></td>
                        </tr>
                        <tr>
                            <td>Adresse mail de la personne</td>
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
    </body>
</html>