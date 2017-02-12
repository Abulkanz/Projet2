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
        <h2>{$msg}</h2>
        {foreach from=$consultEmploye item=Employe}
        <table>
				<form method="POST" action="index.php" enctype="multipart/form-data">
                <thead>
                    <tr>
                        <td colspan="3">Fiche de : {$Employe.nom} {$Employe.prenom}</td>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <input type="hidden" name="gestion" value="employes">
                        <input type="hidden" name="action" value="validersuppression">
                        <input type="hidden" id="idEmploye" name="idEmploye" value="{$Employe.idEmploye}">
                        <td><input type="submit" id="retour" name="Retour" value="Retour" ></td>
                        <td colspan="3"><input type="submit" id="Valider" name="validersuppression" value="Supprimer" ></td>
                        <!-- bouton servant a la modification -->
                    </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td rowspan="8"><img src="img/{$Employe.avatar}" class="avatar"></td>
                            <td>Identifiant de connexion de la personne</td>
                            <td><input id="idconnexion" name="idconnexion" value="{$Employe.idconnexion}"></td>
                        </tr>
						<tr>
                            <td>Nom de la personne</td>
                            <td><input id="nom" name="nom" value="{$Employe.nom}"></td>
                        </tr>
                        <tr>
                            <td>Prenom de la personne</td>
                            <td><input id="prenom" name="prenom" value="{$Employe.prenom}"></td>
                        </tr>
                        <tr>
                            <td>Fonction de la personne</td>
                            <td><input id="fonction" name="fonction" value="{$Employe.fonction}"></td>
                        </tr>
                        <tr>
                            <td>Mot de passe de la personne</td>
                            <td><input id="motdepasse" name="motdepasse" value="{$Employe.motdepasse}"></td>
                        </tr>
                        <tr>
                            <td>Adresse mail de la personne</td>
                            <td><input id="mail" name="mail" value="{$Employe.adressemail}"></td>
                        </tr>
                        <tr>
                            <td>Sexe</td>
							<td><input id="droits" name="droits" value="{$Employe.droits}"></td>
                        </tr>
                        <tr>
                            <td>Droits de l'utilisateur</td>
							<td><input id="idSexe" name="idSexe" value="{$Employe.idSexe}"></td>
                        </tr>
                    </tbody>
                </form>
            </table>
            {/foreach}
    </body>
</html>